<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        $result = [];
        $result['employeesCount'] = User::employee()->count();
        $result['usersCount'] = User::user()->count();

        return view('admin.dashboard.index')->with($result);
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
        return redirect()->back()->with('success', __('admin.done'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $item = User::find(Auth::id());

        if ($request->password) {
            $data["password"] = Hash::make($request->password);
        }

        $item->update($data);
        Auth::login($item);
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
