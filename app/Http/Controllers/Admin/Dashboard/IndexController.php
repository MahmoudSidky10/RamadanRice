<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Session;

class IndexController extends Controller
{
    public function index()
    {

        $result = [];
        if (Auth::user()->user_type_id == 2) {
            return redirect()->route("home");
        } else {
            $result['employeesCount'] = User::employee()->count();
            $result['usersCount'] = User::user()->count();
            $result['ordersCount'] = Order::count();
            return view('admin.dashboard.index')->with($result);
        }
    }

    public function reports()
    {
        $result['doneOrdersCount'] = Order::getOdersCount(2);
        $result['missingOrdersCount'] = Order::getOdersCount(3);
        $result['rejectedOrdersCount'] = Order::getOdersCount(4);
        return view('admin.dashboard.reports')->with($result);
    }

    public function settings()
    {
        $item = Setting::first();

        if (!$item) {
            $item = Setting::create([
                'enable_creating_new_orders' => 1
            ]);
        }

        $result['item'] = $item;
        return view('admin.dashboard.settings')->with($result);
    }

    public function updateSettings(Request $request)
    {
        $data = $request->all();
        $item = Setting::latest()->first();

        if (!$item) {
            Setting::create([
                'enable_creating_new_orders' => $request->enable_creating_new_orders
            ]);
        }

        $item->update($data);

        toast('تم تحديث البيانات بنجاح','success');
        return redirect()->back()->with('success', __('admin.done'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $item = User::find(Auth::id());

        if ($request->password) {
            $data["password"] = Hash::make($request->password);
        }

        $item->update($data);
        Auth::login($item);
        toast('تم تحديث البيانات بنجاح','success');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect('/admin');
    }

    public function edit()
    {
        $item = User::find(Auth::id());
        return view('admin.dashboard.edit', compact("item"));
    }
}
