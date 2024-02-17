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

    public function resendOtp()
    {
        $randCode = rand(1111, 9999);
        $msg = "كود التفعيل الخاص بك هو : " . $randCode . " لدخول منصة اقرأ ";
        $user = User::find(Auth::id());
        $user->otp = $randCode;
        $user->save();
        $this->sendSms($msg, [$user->mobile]);
        return redirect('/client/otp');
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

            if (Auth::user()->user_type_id == 3) {
                return redirect('/admin/dash');
            }

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

    public function orderUpdate()
    {
        if (Auth::user()->otp) {
            return view('client.otp');
        }

        $order = Order::where("user_id", Auth::id())->first();
        if ($order) {
            return view('client.dashboard.updateOrder', ["item" => $order]);
        } else {
            return view('client.login');
        }
    }

    public function updateData(Request $request)
    {
        if (Auth::user()->otp) {
            return view('client.otp');
        }

        $order = Order::where("user_id", Auth::id())->first();

        $data = $request->all();

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

        if ($request->deed_ofـabandonment) {
            $data['deed_ofـabandonment'] = $this->storeImage($request->deed_ofـabandonment, 'images');
        }

        if ($request->other_attachments) {
            $data['other_attachments'] = $this->storeImage($request->other_attachments, 'images');
        }
        if ($request->other_attachments1) {
            $data['other_attachments1'] = $this->storeImage($request->other_attachments1, 'images');
        }
        if ($request->other_attachments2) {
            $data['other_attachments2'] = $this->storeImage($request->other_attachments2, 'images');
        }
        $order->update($data);

        toast('تم عمل التحديثات بنجاح وجاري مراجعة البيانات', 'success');
        return redirect()->route('client.order.details');

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
        toast('تم اضافة المعال بنجاح', 'success');
        return redirect()->back();
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "id_number" => "required",
            "register_number" => "required",
            "mobile" => "required|min:10|max:10",
        ], [
            'id_number.required' => "رقم الهوية مطلوب",
            'register_number.required' => "رقم العشوائي مطلوب",
            'mobile.required' => "رقم الجوال مطلوب",
            'mobile.min' => 'يجب عليك ادخال رقم الجوال بشكل صحيح الحد الادني 10 أرقام',
            'mobile.max' => 'يجب عليك ادخال رقم الجوال بشكل صحيح الحد الاقصي 10 أرقام',
        ]);


        $checkAuth = User::where('id_number', $data['id_number'])->where('register_number', $data['register_number'])->first();
        if ($checkAuth) {
            // check if user using register number ?
            if ($checkAuth->mobile) {
                if ($checkAuth->mobile != $request->mobile) {
                    session()->flash('danger', trans('language.loginError'));
                    return redirect()->route("client.login");
                }
            } else {
                // check if id number exists return error
                $userExist = User::where("mobile", $request->mobile)->first();
                if ($userExist) {
                    session()->flash('danger', trans('رقم الجوال موجود مسبقا , يرجي التاكد من البيانات مره اخري'));
                    return redirect()->route("client.login");
                }
            }

            Auth::login($checkAuth, true);

            // check from otp code
            if ($checkAuth->otp_code == null) {
                $randCode = rand(1111, 9999);
                $msg = "كود التفعيل الخاص بك هو : " . $randCode . " لدخول منصة اقرأ ";
                User::find(Auth::id())->update([
                    'otp' => $randCode,
                    'mobile' => $request->mobile
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

        $data = $request->all();

        // check if id number exists return error
        $userExist = User::where("id", "!=", Auth::id())->where("id_number", $request->id_number)->first();
        if ($userExist) {
            session()->flash('danger', trans('رقم الهوية موجود مسبقا , يرجي التاكد من البيانات مره اخري'));
        }

        // check if id number exists return error
        $userExist = User::where("id", "!=", Auth::id())->where("mobile", $request->mobile)->first();
        if ($userExist) {
            session()->flash('danger', trans('رقم الجوال موجود مسبقا , يرجي التاكد من البيانات مره اخري'));
        }

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

        if ($request->other_attachments) {
            $data['other_attachments'] = $this->storeImage($request->other_attachments, 'images');
        }

        if ($request->deed_ofـabandonment) {
            $data['deed_ofـabandonment'] = $this->storeImage($request->deed_ofـabandonment, 'images');
        }
        if ($request->other_attachments) {
            $data['other_attachments'] = $this->storeImage($request->other_attachments, 'images');
        }
        if ($request->other_attachments1) {
            $data['other_attachments1'] = $this->storeImage($request->other_attachments1, 'images');
        }
        if ($request->other_attachments2) {
            $data['other_attachments2'] = $this->storeImage($request->other_attachments2, 'images');
        }

        $data['id_number'] = Auth::user()->id_number;
        $data['user_id'] = Auth::id();
        $data['created_by'] = Auth::user()->created_by;
        $data['status'] = 1;

        Order::create($data);
        // $msg = "تم أستلام طلبك بنجاح";
        // $this->sendSms($msg, [$order->user->mobile]);
        return redirect()->route('client.order.child.create');
    }
}
