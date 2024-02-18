<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use TaqnyatSms;

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

    public function storeFiles($file, $file_name = "files")
    {
        $file->store($file_name, 'public');
        $path = "storage/" . $file_name . "/" . $file->hashName();
        return url("/") . "/" . $path;
    }

    protected function storeImage($file, $file_name = "images")
    {
        $file->store($file_name, 'public');
        $path = "storage/" . $file_name . "/" . $file->hashName();
        return url("/") . "/" . $path;
    }

    public function sendSms($body, $recipients)
    {
        $bearer = env("SMS_BEARER_TOKEN");
        $taqnyt = new TaqnyatSms($bearer);
        $sender = env("SMS_SENDER");
        if ($body && $recipients) {
            $taqnyt->sendMsg($body, $recipients, $sender);
        }
        return true;
    }


}
