<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function index(Request $request)
    {
        $items = User::query()->where("user_type_id", 3);
        $result['items'] = $this->filter($request, $items);
        return view('admin.employees.index')->with($result);
    }

    public function filter($request, $items)
    {

        if ($request->name) {
            $items = $items->where("name", 'LIKE', '%' . $request->name . '%');
        }

        if ($request->user_name) {
            $items = $items->where("user_name", $request->user_name);
        }

        $items = $items->orderBy("id", "desc")->paginate(15);
        return $items;
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'user_name' => 'required',
            'password' => 'required',
        ]);

        $data["user_type_id"] = 3; // user type

        User::create($data);

        toast('تم اضافة الموظف بنجاح','success');
        return redirect(url("/admin/employees"));
    }

    public function edit($id)
    {
        $item = User::find($id);
        return view('admin.employees.edit', compact("item"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'user_name' => 'required',
            'password' => '',
            'name' => 'required',
        ]);

        $user = User::find($id);
        $user->update($data);
        toast('تم تحديث الموظف بنجاح','success');
        return redirect(url("/admin/employees"));
    }
}
