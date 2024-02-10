<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $items = User::query()->where("user_type_id", 2);

        // check if auth not admin so return his registered users ...
        if (!Auth::user()->isAdmin()) {
            $items = $items->where("created_by", Auth::id());
        }

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

        if ($request->id_number){
            $items = $items->where("id_number", $request->id_number);
        }

        if ($request->register_number){
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
            'id_number' => 'required'
        ]);

        // check if id number exists return error
        $userExist = User::where("id_number", $request->id_number)->first();
        if ($userExist) {
            session()->flash('danger', trans('رقم الهوية موجود مسبقا , يرجي التاكد من البيانات مره اخري'));
        }

        $data['register_number'] = self::generateRegisterNumber();
        $data["user_type_id"] = 2; // user type

        User::create($data);

        return redirect(url("/admin/users"));
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

        return redirect(url("/admin/users"));
    }

    public function orders()
    {
        $items = Order::query();
        if (Auth::user()->user_type_id == 3) {
            $items = $items->where("created_by", Auth::id());
        }

        $result['items'] = $items->orderBy("id", "desc")->paginate(15);

        return view('admin.users.orders')->with($result);
    }

    public function orderDetails($orderId)
    {
        $order = Order::find($orderId);
        return view('client.dashboard.order', ["item" => $order]);
    }

}
