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
                                            قم بأدخال بيانات الطلب بشكل صحيح .
                                        </h4>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Description-->

                                    <!--begin:: Names inputs -->
                                    <div class="row mb-5">
                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4 ">
                                            <!--begin::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">الاسم الاول</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input required type="text" class="form-control " placeholder=""
                                                   value="{{old("first_name")}}"
                                                   name="first_name">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class=" fs-5 fw-semibold mb-2">اسم الاب</label>
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
                                            <label class=" fs-5 fw-semibold mb-2">اسم الجد</label>
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
                                                   value="{{old("family_name")}}" required
                                                   name="family_name">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
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

                                        <div class="col-md-10 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class=" fs-5 fw-semibold mb-2">إجمالي الدخل الشهري</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input type="number" class="form-control "
                                                   placeholder=" الراتب أو حساب المواطن أو الضمان الإجتماعي أو التأهيل الشامل أو غيرها من مصادر الدخل"
                                                   value="" name="salary">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>

                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class=" fs-5 fw-semibold mb-2">رقم الهوية</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input type="text" class="form-control " placeholder=""
                                                   value="{{auth()->user()->id_number}}" disabled
                                                   name="id_number">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>

                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">تاريخ انتهاء الهوية</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input id="txtHijriDate" name="id_number_expiration_date" type="text"
                                                   value="" required
                                                   class="form-control"/>
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>

                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class=" fs-5 required fw-semibold mb-2">تاريخ الميلاد ( ميلادي
                                                )</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input type="date" onchange="updateAgeValue()" class="form-control "
                                                   placeholder="" value="" id="birthDayValue" required
                                                   name="birth_date">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>


                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class=" fs-5 fw-semibold mb-2">العمر</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input id="age" type="text" class="form-control ageValue " placeholder=""
                                                   disabled value="">
                                            <input id="age" type="text" name="age" class="form-control hide ageValue "
                                                   placeholder="" value="">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
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

                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class=" fs-5 fw-semibold mb-2">رقم الجوال ( الاساسي )</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input id="mobile" type="text" class="form-control " name="mobile" disabled
                                                   placeholder="" value="{{Auth::user()->mobile}}">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
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
                                        <div id="special_case_type_section" class="col-md-6 pt-4">
                                            <label class="">{{__("نوع الإعاقة")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="special_case_type"
                                                        class="form-control" name="special_case_type">
                                                    <option>أختر نوع الإعاقة</option>
                                                    <option value="1"> إعاقة حركية</option>
                                                    <option value="2"> إعاقة سمعية</option>
                                                    <option value="3">إعاقة ذهنية</option>
                                                    <option value="4">إعاقة أخرى</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12 pt-4">
                                            <label class="required">{{__("الحالة الإجتماعية")}}</label>
                                            <span id="social_situation_description" class="pt-3 "
                                                  style="color: red; font-weight: bolder"></span>

                                            <div class="">
                                                <select style="height: 40px !important;" id="social_situation_id"
                                                        required class="form-control" name="social_situation_id">
                                                    <option value=""> قم بأختيار نوع الحاله الاجتماعية</option>
                                                    <option social_situation_desc="يرجي أرفاق ( صورة الهوية )"
                                                            value="1">رب أسره
                                                    </option>
                                                    <option
                                                        social_situation_desc="يرجي أرفاق ( صورة الهوية وشهادة الوفاة )"
                                                        value="2">أرمله
                                                    </option>
                                                    <option
                                                        social_situation_desc="يرجي أرفاق ( صورة الهوية  صورة صك الطلاق )"
                                                        value="3">مطلقة
                                                    </option>
                                                    <option social_situation_desc="يرجي أرفاق ( صورة الهوية )"
                                                            value="4">مهجورة
                                                    </option>
                                                    <option social_situation_desc="يرجي أرفاق ( صورة الهوية )"
                                                            value="5">أسره سجين
                                                    </option>
                                                    <option
                                                        social_situation_desc="يرجي أرفاق ( صورة الهوية ورقم الاقامه )"
                                                        value="6">كبير في السن +٦٥
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 pt-4 ">

                                            <div class="mt-4">
                                                <p style="font-weight: bolder !important;  font-size: 14px; color: red" class="paper_content">#   لمستخدمي الآيفون الرجاء رفع الصورة من الاستديو وليس من الكاميرا مباشر !</p>
                                                <p style="font-weight: bolder !important;  font-size: 14px; color: red" class="paper_content">#
                                                    في حالة وجود معالين إرفاق بطاقة العائلة للسعوديين وهويات افراد الاسرة للمقيمين وتكون الصوره في صفحة واحدة
                                                </p>
                                            </div>


                                            <div class="row">
                                                @includeIf('admin.components.form.add.file', ['required' => 'required' ,'icon' => 'fa fa-check','label' => trans('صورة الهوية'),'name'=>'id_number_image', 'max'=>'5'  , 'class' => "col-md-6 id_number_image uploadFiles"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('صورة صك الهجران'),'name'=>'deed_ofـabandonment', 'max'=>'5'  , 'class' => "col-md-6 deed_ofـabandonment uploadFiles"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('صورة صك الطلاق'),'name'=>'divorce_deed', 'max'=>'5'  , 'class' => "col-md-6 divorce_deed uploadFiles"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('شهادة وفاة الزوج'),'name'=>'husband_death_image', 'max'=>'5'  , 'class' => "col-md-6 husband_death_image uploadFiles"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('اثبات اسرة سجين'),'name'=>'prisoner_family_identification_facility', 'max'=>'5'  , 'class' => "col-md-6 prisoner_family_identification_facility uploadFiles"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('صورة صك الاعاقة'),'name'=>'attached_is_the_support_instrument', 'max'=>'5'  , 'class' => "col-md-6 attached_is_the_support_instrument uploadFiles"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('برنت ابشر - لغير السعوديين -'),'name'=>'absher_facility', 'max'=>'5'  , 'class' => "col-md-6 absherFile"])
                                            </div>
                                        </div>

                                        <div class="col-md-12 pt-4 ">
                                            <div class="row">
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('مرفقات أخرى'),'name'=>'other_attachments', 'max'=>'5'  , 'class' => "col-md-4"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('مرفقات أخرى'),'name'=>'other_attachments1', 'max'=>'5'  , 'class' => "col-md-4"])
                                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('مرفقات أخرى'),'name'=>'other_attachments2', 'max'=>'5'  , 'class' => "col-md-4"])
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Names inputs-->

                                    <!--begin::Separator-->
                                    <div class="separator mb-8"></div>
                                    <!--end::Separator-->

                                    <!--begin::Submit-->
                                    <button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
                                       التالي
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

            $("#special_case_type_section").hide()

            var date = new Date();
            date.setDate(date.getDate() + 1);
            $('#txtHijriDate').hijriDatePicker({
                minDate: date,
                showClear: true
            });

        });
    </script>

    <script>
        function updateAgeValue() {
            let days = daysdifference($("#birthDayValue").val())

            $(".ageValue").val(days)

        }

        function daysdifference(date) {
            var startDay = new Date();
            var endDay = new Date(date);

            // Determine the time difference between two dates
            var millisBetween = startDay.getTime() - endDay.getTime();

            // Determine the number of days between two dates
            var days = millisBetween / (1000 * 3600 * 24);

            days = days / 365;

            // Show the final number of days between dates
            return Math.round(Math.abs(days));
        }
    </script>

    <script>

        //  hide absher file ...
        $('.absherFile').addClass("hide");
        $("#nationality_id").on('change', function () {
            var item = $("#nationality_id").val();
            if (item != 1) {
                $('.absherFile').removeClass("hide");
            } else {
                $('.absherFile').addClass("hide");
            }
        });
        // end ...  defaulter hide absher file ..


        // hide all files ...
        $(".uploadFiles").addClass("hide");
        $("#social_situation_id").on('change', function () {
            var data = $("#social_situation_id").val();
            $(".uploadFiles").addClass("hide");

            if (data == 1) {
                // رب اسره
                $('.id_number_image').removeClass("hide");
            }

            if (data == 2) {
                // أرمله
                $('.id_number_image').removeClass("hide");
                $('.husband_death_image').removeClass("hide");
            }

            if (data == 3) {
                // مطلقة
                $('.id_number_image').removeClass("hide");
                $('.divorce_deed').removeClass("hide");
            }

            if (data == 4) {
                // مهجورة
                $('.id_number_image').removeClass("hide");
                $('.deed_ofـabandonment').removeClass("hide");
            }

            if (data == 5) {
                // اسره سجين
                $('.id_number_image').removeClass("hide");
                $('.prisoner_family_identification_facility').removeClass("hide");
            }

            if (data == 6) {
                // كبير في السن
                $('.id_number_image').removeClass("hide");
            }


        });

        $("#is_special_case").on('change', function () {
            $("#special_case_type_section").toggle()
            if ($("#is_special_case").val() == 1) {
                $('.attached_is_the_support_instrument').removeClass("hide");
            } else {
                $('.attached_is_the_support_instrument').addClass("hide");
            }
        });


    </script>
@endsection


