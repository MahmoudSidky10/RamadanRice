<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderChildreen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClientController extends Controller
{
    public function otp()
    {
        return view("client.otp");
    }

    public function otpCheck(Request $request)
    {
        $code = $request->code;
        $user = User::find(Auth::id());
        if ($code == $user->otp) {

            $user->otp = null;
            $user->save();

            return redirect()->route("home");
        } else {
            session()->flash('danger', "كود التفعيل غير صحيح ");
            return back();
        }
    }

    public function index()
    {
        if (Auth::check()) {
            $order = Order::where("user_id", Auth::id())->first();

            if (Auth::user()->otp) {
                return view('client.otp');
            }

            if ($order) {
                return view('client.dashboard.order', ["item" => $order]);
            } else {
                return view('client.dashboard.index');
            }
        } else {
            return view('client.login');
        }
    }

    public function orderDetails()
    {
        if (Auth::user()->otp) {
            return view('client.otp');
        }

        $order = Order::where("user_id", Auth::id())->first();
        if ($order) {
            return view('client.dashboard.order', ["item" => $order]);
        } else {
            return view('client.login');
        }
    }

    public function orderChildCreate()
    {
        if (Auth::user()->otp) {
            return view('client.otp');
        }

        $order = Order::where("user_id", Auth::id())->first();
        return view('client.dashboard.child-create', ["item" => $order]);
    }

    public function orderChildStore(Request $request)
    {
        $order = Order::where("user_id", Auth::id())->first();
        $data = $request->all();
        $data["order_id"] = $order->id;
        $data["user_id"] = Auth::id();

        OrderChildreen::create($data);
        toast('تم اضافة الطفل بنجاح', 'success');
        return redirect()->route("client.order.details");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "id_number" => "required",
            "register_number" => "required",
            "mobile" => "required",
        ]);

        $checkAuth = User::where('id_number', $data['id_number'])->where('register_number', $data['register_number'])->first();
        if ($checkAuth) {
            Auth::login($checkAuth, true);
            // check from otp code
            if ($checkAuth->otp_code == null) {
                $randCode = rand(1111, 9999);
                $msg = "كود التفعيل الخاص بك هو : " . $randCode;
                User::find(Auth::id())->update([
                    'otp' => $randCode
                ]);
                $this->sendSms($msg, [$request->mobile]);
                return redirect('/client/otp');
            }
            return redirect('/admin/dash');
        } else {
            session()->flash('danger', trans('language.loginError'));
            return back();
        }
    }


    public function orderStore(Request $request)
    {

        $data = $request->validate([
            "first_name" => "required",
            "parent_name" => "required",
            "grandfather_name" => "required",
            "family_name" => "required",
            "social_situation_id" => "required",
            "nationality_id" => "required",
            "salary" => "required",
            "id_number_expiration_date" => "required",
            "birth_date" => "required",
            "age" => "required",
            "city" => "required",
            "district" => "required",
            "mobile" => "required",
            "mobile2" => "required",
            "is_special_case" => "required",
            "special_case_type" => "required",

            "id_number_image" => "required",
            "divorce_deed" => "required",
            "husband_death_image" => "required",
            "prisoner_family_identification_facility" => "required",
            "attached_is_the_support_instrument" => "required",
            "absher_facility" => "required",
        ]);


        if ($request->id_number_image) {
            $data['id_number_image'] = $this->storeImage($request->id_number_image, 'images');
        }

        if ($request->divorce_deed) {
            $data['divorce_deed'] = $this->storeImage($request->divorce_deed, 'images');
        }

        if ($request->husband_death_image) {
            $data['husband_death_image'] = $this->storeImage($request->husband_death_image, 'images');
        }

        if ($request->prisoner_family_identification_facility) {
            $data['prisoner_family_identification_facility'] = $this->storeImage($request->prisoner_family_identification_facility, 'images');
        }

        if ($request->attached_is_the_support_instrument) {
            $data['attached_is_the_support_instrument'] = $this->storeImage($request->attached_is_the_support_instrument, 'images');
        }

        if ($request->absher_facility) {
            $data['absher_facility'] = $this->storeImage($request->absher_facility, 'images');
        }


        $data['is_number'] = Auth::user()->id_number;
        $data['user_id'] = Auth::id();
        $data['created_by'] = Auth::user()->created_by;
        $data['status'] = 1;


        Order::create($data);
        toast('تم اضافة الطلب بنجاح', 'success');
        return redirect()->route('home');
    }
}
