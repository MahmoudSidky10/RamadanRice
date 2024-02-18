<?php

namespace App\Http\Controllers\Admin\User;

use App\Helpers\ExportHelper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $items = User::query()->where("user_type_id", 2);

        // check if auth not admin so return his registered users ...
        /*if (!Auth::user()->isAdmin()) {
            $items = $items->where("created_by", Auth::id());
        }*/

        $result['items'] = $this->filter($request, $items);
        return view('admin.users.index')->with($result);
    }

    public function filter($request, $items)
    {

        if (request()->start_at) {
            $items = $items->whereDate('created_at', '>=', Carbon::parse(request()->start_at));
        }

        if (request()->end_at) {
            $items = $items->whereDate('created_at', '<=', Carbon::parse(request()->end_at));
        }

        if ($request->id_number) {
            $items = $items->where("id_number", $request->id_number);
        }

        if ($request->register_number) {
            $items = $items->where("register_number", $request->register_number);
        }

        if ($request->print_status) {
            if ($request->print_status == 1) {
                $items = $items->where("printed_by", '!=', null);
            } else {
                $items = $items->where("printed_by", '=', null);
            }
        }

        $items = $items->orderBy("id", "desc")->paginate(15);
        return $items;
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_number' => 'required|min:10|max:10',
        ], [
            'id_number.required' => 'يجب عليك ادخال رقم الهوية',
            'id_number.min' => 'يجب عليك ادخال رقم الهوية بشكل صحيح الحد الادني 10 أرقام',
            'id_number.max' => 'يجب عليك ادخال رقم الهوية بشكل صحيح الحد الاقصي 10 أرقام',
        ]);

        // check if id number exists return error
        $userExist = User::where("id_number", $request->id_number)->first();
        if ($userExist) {
            session()->flash("danger", "رقم الهوية موجود مسبقا , يرجي التاكد من البيانات مره اخري");
            toast('رقم الهوية موجود مسبقا , يرجي التاكد من البيانات مره اخري', 'error');
            return back();
        }

        $data['register_number'] = self::generateRegisterNumber();
        $data["user_type_id"] = 2; // user type

        $user = User::create($data);
        toast('تم اضافة المستخدم بنجاح', 'success');
        return redirect(route("admin.users.print", $user->id));
    }

    public function edit($id)
    {
        $item = User::find($id);
        return view('admin.users.edit', compact("item"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'id_number' => 'required'
        ]);

        $user = User::find($id);
        // check if id number exists return error
        $userExist = User::where('id', "!=", $user->id)->where("id_number", $request->id_number)->first();
        if ($userExist) {
            session()->flash('danger', trans('رقم الهوية موجود مسبقا , يرجي التاكد من البيانات مره اخري'));
        }


        $user->update($data);
        toast('تم تحديث المستخدم بنجاح', 'success');
        return redirect(url("/admin/users"));
    }

    public function orders(Request $request)
    {
        $items = Order::query();


        if ($request->id_number) {
            $items = $items->where("id_number", $request->id_number);
        }

        if (request()->start_at) {
            $items = $items->whereDate('created_at', '>=', Carbon::parse(request()->start_at));
        }

        if (request()->end_at) {
            $items = $items->whereDate('created_at', '<=', Carbon::parse(request()->end_at));
        }

        $result['items'] = $items->orderBy("id", "desc")->paginate(15);

        return view('admin.users.orders')->with($result);
    }

    public function orderDetails($orderId)
    {
        $order = Order::find($orderId);
        return view('client.dashboard.order', ["item" => $order]);
    }

    public function updateStatus($orderId, Request $request)
    {
        $order = Order::find($orderId);
        $order->status = $request->status;
        $order->notes = $request->notes;
        $order->created_by = Auth::id();
        $order->status_updated_at = Carbon::now();
        $order->save();

        if ($order->status == 3) {
            // Send sms to user
            $msg = $order->orderStatusSmsMessage();
            $this->sendSms($msg, [$order->mobile]);
        }

        if ($request->status == 2) {
            $order->notes = null;
            $order->save();
        }
        toast('تم تحديث حالة الطلب', 'success');
        return back();
    }

    public function print($userId)
    {
        $user = User::find($userId);
        return view('admin.users.print', ["user" => $user]);
    }

    public function usersFromPrint($userId)
    {
        $user = User::find($userId);
        $user->printed_by = Auth::id();
        $user->save();
        return redirect()->route("users.index");
    }

    public function export($status)
    {

        $fields = [
            'id' => '#',
            'id_number' => 'رقم الهوية',
            'id_number_expiration_date' => 'تاريخ انتهاء صلاحية الهوية',

            'first_name' => 'الاسم الاول',
            'parent_name' => 'اسم الاب',
            'grandfather_name' => 'اسم الجد',
            'family_name' => 'اسم العائلة',

            'employee.name' => 'اسم الموظف',

            'social_situation.name_ar' => 'الحالة الاجتماعية',
            'birth_date' => 'تاريخ الميلاد',
            'age' => 'العمر',
            'salary' => 'الراتب',
            'nationality.name_ar' => 'الجنسية',
            'cityName.name' => 'المدينة',
            'district' => 'الحي',
            'mobile' => 'رقم الجوال',
            'mobile2' => 'رقم الجوال الاضافي',
            'created_at' => 'تاريخ الانشاء',
            'childrenCount' => 'عدد الاطفال',
        ];

        $orders = Order::where('status', $status)->with(['user'])->get();
        $orders->map(function ($orders) {
            $orders['childrenCount'] = $orders->childrenCount();
        });

        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($orders, $fields);
        $csvExporter->download(__("orders") . "-" . Carbon::today()->format('y-m-d') . ".xlsx");
    }


    public function pendingOrders()
    {
        $result['items'] = Order::where('status', Order::PENDING)->orderBy("id", "desc")->paginate(15);
        return view('admin.users.orders')->with($result);
    }

    public function acceptedOrders()
    {
        $result['items'] = Order::where('status', Order::ACCEPTED)->orderBy("id", "desc")->paginate(15);
        return view('admin.users.orders')->with($result);
    }

    public function reviewOrders()
    {
        $result['items'] = Order::where('status', Order::MISSING)->orderBy("id", "desc")->paginate(15);
        return view('admin.users.orders')->with($result);
    }

    public function rejectedOrders()
    {
        $result['items'] = Order::where('status', Order::REJECTED)->orderBy("id", "desc")->paginate(15);
        return view('admin.users.orders')->with($result);
    }

    public function reUpdatedOrders()
    {
        $result['items'] = Order::where('status', Order::REUPDATED)->orderBy("id", "desc")->paginate(15);
        return view('admin.users.orders')->with($result);
    }


}
