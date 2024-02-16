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

        if ($request->name) {
            $items = $items->where("name", 'LIKE', '%' . $request->name . '%');
        }
        if ($request->mobile) {
            $items = $items->where("mobile", $request->mobile);
        }
        if ($request->email) {
            $items = $items->where("email", 'LIKE', '%' . $request->email . '%');
        }

        if ($request->id_number) {
            $items = $items->where("id_number", $request->id_number);
        }

        if ($request->register_number) {
            $items = $items->where("register_number", $request->register_number);
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
        /*if (Auth::user()->user_type_id == 3) {
            $items = $items->where("created_by", Auth::id());
        }*/

        if ($request->id_number) {
            $items = $items->where("id_number", $request->id_number);
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
        $order->status_updated_at = Carbon::now();
        $order->save();

        if ($order->status != 2) {
            // Send sms to user
            $msg = $order->orderStatusSmsMessage();
            $this->sendSms($msg, [$order->mobile]);
        }
        toast('تم تحديث حالة الطلب', 'success');
        return back();
    }

    public function print($userId)
    {
        $user = User::find($userId);
        return view('admin.users.print', ["user" => $user]);
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
        ];

        $orders = Order::where('status', $status)->with(['user'])->get();

        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($orders, $fields);
        $csvExporter->download(__("orders") . "-" . Carbon::today()->format('y-m-d') . ".xls");
    }

}
