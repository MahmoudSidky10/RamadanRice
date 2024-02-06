<?php

namespace App\Http\Middleware;

use App\ModulesConst\UserType;
use Closure;

class Admin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (auth()->check() and in_array(auth()->user()->user_type_id, [1, 2, 3])) {
            return $next($request);
        }

        session()->flash('danger', trans('فقط يستطيع مدير الموقع الدخول الى لوحه التحكم'));
        return redirect('/admin');
    }
}
