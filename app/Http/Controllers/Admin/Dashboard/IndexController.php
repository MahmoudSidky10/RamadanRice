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
        $result['item'] = Setting::first();
        return view('admin.dashboard.settings')->with($result);
    }

    public function updateSettings(Request $request)
    {
        //        $this->authorize("settings_edit");
        $data = $request->all();
        $item = Setting::latest()->first();

        if ($request->logo) {
            $data['logo'] = $this->storeImage($request->logo, "settings");
        }

        if ($request->event_cover_image) {
            $data["event_cover_image"] = $this->storeImage($request->event_cover_image, "events");
        }

        if ($request->event_cover_image) {
            $data["event_cover_image"] = $this->storeImage($request->event_cover_image, "events");
        }

        $item->updatePackageDefaultValues(
            ($item->package_default_exclusion_ar != $request->package_default_exclusion_ar) ? $request->package_default_exclusion_ar : null,
            ($item->package_default_exclusion_en != $request->package_default_exclusion_en) ? $request->package_default_exclusion_en : null,
            ($item->package_default_full_terms_ar != $request->package_default_full_terms_ar) ? $request->package_default_full_terms_ar : null,
            ($item->package_default_full_terms_en != $request->package_default_full_terms_en) ? $request->package_default_full_terms_en : null,
            ($item->package_default_contact_mobile != $request->package_default_contact_mobile) ? $request->package_default_contact_mobile : null,
        );

        $item->update($data);
        $item->updateSocialIcons($request->social_icons);

        return back();
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
