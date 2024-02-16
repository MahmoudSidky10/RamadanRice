<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialSituation;
use Illuminate\Http\Request;

class SocialSituationController extends Controller
{
    public function index(Request $request)
    {
        $items = SocialSituation::query();
        $result['items'] = $this->filter($request, $items);
        return view('admin.socialSituations.index')->with($result);
    }

    public function filter($request, $items)
    {

        if ($request->name) {
            $items = $items->where("name_ar", 'LIKE', '%' . $request->name . '%')->where("name_en", 'LIKE', '%' . $request->name . '%');
        }

        $items = $items->orderBy("id", "desc")->paginate(15);

        return $items;
    }

    public function create()
    {
        return view('admin.socialSituations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_ar' => 'required',
            'description' => 'required',
        ]);


        SocialSituation::create($data);
        toast('تم اضافة البيانات بنجاح', 'success');
        return redirect(url("/admin/socialSituations"));
    }

    public function edit($id)
    {
        $item = SocialSituation::find($id);

        return view('admin.socialSituations.edit', compact("item"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name_ar' => 'required',
            'description' => 'required',
        ]);

        $user = SocialSituation::find($id);

        $user->update($data);
        toast('تم تحديث البيانات بنجاح', 'success');
        return redirect(url("/admin/socialSituations"));
    }
}
