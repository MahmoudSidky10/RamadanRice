<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public static function generateRegisterNumber()
    {
        $rand = rand(111111, 999999);
        $user = User::where("register_number", $rand)->first();
        if ($user) {
            self::generateRegisterNumber();
        }
        return $rand;
    }
}
