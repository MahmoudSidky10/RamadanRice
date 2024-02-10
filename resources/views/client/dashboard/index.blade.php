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
                                <form action="{{route("client.order.store")}}" enctype="multipart/form-data"
                                      class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework"
                                      method="post" id="kt_careers_form">
                                    @csrf
                                    <!--begin::Description-->
                                    <div class="mb-7">
                                        <!--begin::Title-->
                                        <h4 class="fs-1 text-gray-800 w-bolder mb-6">
                                            قدم طلبك .
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
                                                   value="{{old("first_name")}}"
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
                                                   value="{{old("parent_name")}}"
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
                                                   value="{{old("grandfather_name")}}"
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
                                                   value="{{old("family_name")}}"
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
                                                    <option @if(old("social_situation_id") == 1) selected
                                                            @endif value="1"> رب أسرة
                                                    </option>
                                                    <option @if(old("social_situation_id") == 2) selected
                                                            @endif value="2">أرملة
                                                    </option>
                                                    <option @if(old("social_situation_id") == 3) selected
                                                            @endif value="3">مطلقة
                                                    </option>
                                                    <option @if(old("social_situation_id") == 4) selected
                                                            @endif value="4">مهجورة
                                                    </option>
                                                    <option @if(old("social_situation_id") == 5) selected
                                                            @endif value="5">أسرة سجين
                                                    </option>
                                                    <option @if(old("social_situation_id") == 6) selected
                                                            @endif value="6">آنسه
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("الجنسية")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="nationality_id" required
                                                        class="form-control select2 " name="nationality_id">
                                                    @foreach(\App\Models\Nationality::all() as $nationality)
                                                        <option @if(old("nationality_id") == $nationality->id) selected
                                                                @endif value="{{$nationality->id}}">{{$nationality->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('إجمالي الدخل الشهري'),'name'=>'salary', 'placeholder'=>trans('إجمالي الدخل الشهري' ),'valid'=>trans('language.vaildation')])
                                        </div>

                                        <div class="col-md-4 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class=" fs-5 fw-semibold mb-2">رقم الهوية</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input type="text" class="form-control " placeholder="" disabled
                                                   value="{{auth()->user()->id_number}}"
                                                   name="id_number">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>

                                        <div class="col-md-4 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">تاريخ انتهاء الهوية</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input id="txtHijriDate" name="id_number_expiration_date" type="text" value=""
                                                   class="form-control"/>
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>


                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.add.date', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('تاريخ الميلاد'),'name'=>'birth_date', 'placeholder'=>trans('تاريخ الميلاد' ),'valid'=>trans('language.vaildation')])
                                        </div>

                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.add.text', ['required' => 'required' ,'icon' => 'fa fa-user','label' => trans('العمر'),'name'=>'age', 'placeholder'=>trans('العمر' ),'valid'=>trans('language.vaildation')])
                                        </div>


                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("المدينه")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="city" required
                                                        class="form-control select2 " name="city">
                                                    @foreach(\App\Models\City::all() as $city)
                                                        <option @if(old("city") == $city->id) selected
                                                                @endif value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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
                                        تسجيل البيانات
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
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment-hijri@2.1.0/moment-hijri.js"></script>
    <script src="{{asset("/assets/admin/js/bootstrap-hijri-datetimepicker.js")}}"></script>
    <script type="text/javascript">
        $(function () {

            var date = new Date();
            date.setDate(date.getDate() + 1);
            $('#txtHijriDate').hijriDatePicker({
                minDate: date,
                showClear: true
            });

        });
    </script>
@endsection


