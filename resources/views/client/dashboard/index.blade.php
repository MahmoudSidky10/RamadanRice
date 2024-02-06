@extends('admin.layout.index')
@section('content')
    @include("admin.layout.nav",["title" => trans('language.dashboard')])

    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div id="kt_app_content" class="app-content  flex-column-fluid ">


                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <!--begin::Careers main-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="card bg-body me-xl-9 mb-9 mb-xl-0">
                            <div class="card-body">

                                <!--begin::Form-->
                                <form action="" class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework"
                                      method="post" id="kt_careers_form">
                                    @csrf
                                    <!--begin::Description-->
                                    <div class="mb-7">
                                        <!--begin::Title-->
                                        <h4 class="fs-1 text-gray-800 w-bolder mb-6">
                                            Apply Now
                                        </h4>
                                        <!--end::Title-->

                                        <!--begin::Text-->
                                        <p class="fw-semibold fs-4 text-gray-600 mb-2">
                                            First, a disclaimer – the entire process of writing a blog post often takes
                                            more than a couple of hours,
                                            even if you can type eighty words as per minute.
                                        </p>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Description-->

                                    <!--begin:: Names inputs -->
                                    <div class="row mb-5">
                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4 ">
                                            <!--begin::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">الاسم الاول</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control " placeholder=""
                                                   name="first_name">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">اسم الاب</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input type="text" class="form-control " placeholder=""
                                                   name="parent_name">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">اسم الجد</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input type="text" class="form-control " placeholder=""
                                                   name="grandfather_name">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">اسم العائلة</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input type="text" class="form-control " placeholder=""
                                                   name="family_name">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("الحالة الإجتماعية")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="social_situation_id"
                                                        required class="form-control" name="social_situation_id">
                                                    <option value="1" selected> رب أسرة</option>
                                                    <option value="2">أرملة</option>
                                                    <option value="3">مطلقة</option>
                                                    <option value="4">مهجورة</option>
                                                    <option value="5">أسرة سجين</option>
                                                    <option value="6">آنسه</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("الجنسية")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="nationality_id" required
                                                        class="form-control" name="nationality_id">
                                                    <option value="1" selected>مصر</option>
                                                    <option value="2">السعوديه</option>
                                                    <option value="3">المانيا</option>
                                                    <option value="4">سويسرا</option>
                                                    <option value="5">اليونان</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('إجمالي الدخل الشهري'),'name'=>'salary', 'placeholder'=>trans('إجمالي الدخل الشهري' ),'valid'=>trans('language.vaildation')])
                                        </div>
                                        <div class="col-md-4 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('رقم الهوية'),'name'=>'id_number', 'placeholder'=>trans('رقم الهوية' ),'valid'=>trans('language.vaildation')])
                                        </div>
                                        <div class="col-md-4 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('تاريخ انتهاء الهوية'),'name'=>'id_number_expiration_date', 'placeholder'=>trans('تاريخ انتهاء الهوية' ),'valid'=>trans('language.vaildation')])
                                        </div>

                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('تاريخ الميلاد'),'name'=>'birth_date', 'placeholder'=>trans('تاريخ الميلاد' ),'valid'=>trans('language.vaildation')])
                                        </div>

                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('العمر'),'name'=>'age', 'placeholder'=>trans('العمر' ),'valid'=>trans('language.vaildation')])
                                        </div>


                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('المدينة'),'name'=>'city', 'placeholder'=>trans('المدينة' ),'valid'=>trans('language.vaildation')])
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('الحي'),'name'=>'district', 'placeholder'=>trans('الحي' ),'valid'=>trans('language.vaildation')])
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' , 'icon' => 'fa fa-user','label' => trans('رقم الجوال 1'),'name'=>'mobile', 'placeholder'=>trans('لإستقبال رسائل نصية أو رسائل واتساب' ),'valid'=>trans('language.vaildation')])
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('رقم الجوال 2'),'name'=>'mobile2', 'placeholder'=>trans('رقم الجوال 2' ),'valid'=>trans('language.vaildation')])
                                        </div>


                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("هل أنت من ذوي الإحتياجات الخاصة")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="is_special_case"
                                                        required class="form-control" name="is_special_case">
                                                    <option value="0"> لا</option>
                                                    <option value="1"> نعم</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("نوع الإعاقة")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="special_case_type"
                                                        required class="form-control" name="special_case_type">
                                                    <option>أختر نوع الإعاقة</option>
                                                    <option value="1"> إعاقة حركية</option>
                                                    <option value="2"> إعاقة سمعية</option>
                                                    <option value="3">إعاقة ذهنية</option>
                                                    <option value="4">إعاقة أخرى</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12 pt-4 ">
                                            <div class="row">
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('صورة الهوية'),'name'=>'id_number_image', 'max'=>'5'  , 'class' => "col-md-6"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('صورة صك الطلاق'),'name'=>'divorce_deed', 'max'=>'5'  , 'class' => "col-md-6"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('شهادة وفاة الزوج'),'name'=>'husband_death_image', 'max'=>'5'  , 'class' => "col-md-6"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('اثبات اسرة سجين'),'name'=>'prisoner_family_identification_facility', 'max'=>'5'  , 'class' => "col-md-6"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('صورة صك الاعاقة'),'name'=>'attached_is_the_support_instrument', 'max'=>'5'  , 'class' => "col-md-6"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('برنت ابشر - لغير السعوديين -'),'name'=>'absher_facility', 'max'=>'5'  , 'class' => "col-md-6"])
                                             </div>
                                        </div>

                                    </div>
                                    <!--end::Names inputs-->

                                    <!--begin::Separator-->
                                    <div class="separator mb-8"></div>
                                    <!--end::Separator-->

                                    <!--begin::Submit-->
                                    <button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
                                        Apply
                                    </button>
                                    <!--end::Submit-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::Content-->

                    </div>
                    <!--end::Careers main-->
                </div>
                <!--end::Content container-->
            </div>
        </div>
    </div>

@endsection
@section("js")
@endsection


