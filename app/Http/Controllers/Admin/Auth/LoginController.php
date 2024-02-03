<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\ModulesConst\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect('/admin/dash');
        } else {
            return view('admin.auth.login');
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $checkAuth = Auth::attempt([
                'email' => $data['email'], 'password' => $data['password']
            ]);
        } else {
            $checkAuth = Auth::attempt([
                'user_name' => $data['email'], 'password' => $data['password']
            ]);
        }

        if ($checkAuth) {
            return redirect('/admin/dash');
        } else {
            session()->flash('danger', trans('language.loginError'));
            return back();
        }
    }

}
