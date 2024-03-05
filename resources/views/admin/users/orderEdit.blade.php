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
                        <div class="col-md-12">
                            <div class="card card-custom gutter-b example example-compact">
                                <div class="card-header">
                                    <p class="card-title">تفاصيل الطلب
                                        (
                                        <span
                                            style="font-weight: normal; color: #0a6aa1;margin: 0 5px"> {{$item->orderStatusSmsMessage()}} </span>
                                        )
                                    </p>
                                    <a style="padding-top:25px" class="" data-toggle="collapse"
                                       href="#collapseExample3"
                                       role="button" aria-expanded="false" aria-controls="collapseExample3">
                                        <i class="fa fa-plus colOpenClick3  "></i>
                                        <i class="fa fa-minus colCloseClick3 hide"></i>
                                    </a>


                                </div>
                            </div>
                            <!-- show children table -->
                            <div class="card card-custom gutter-b example example-compact">
                                <div class="card-header">
                                    <h3 class="card-title"> قائمه الابناء </h3>

                                    <a style="padding-top:25px" class="" data-toggle="collapse"
                                       href="#collapseExample2"
                                       role="button" aria-expanded="false" aria-controls="collapseExample2">
                                        <i class="fa fa-plus colOpenClick2  "></i>
                                        <i class="fa fa-minus colCloseClick2 hide"></i>
                                    </a>


                                </div>
                            </div>
                            <section class=" " id="collapseExample2">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12 stretch-card mb-8 ">
                                        <div class="card">
                                            <div class="card-body">
                                                @if(Auth::user()->id == $item->user_id)
                                                    <a href="{{route("client.order.child.create")}}"
                                                       class="btn btn-info ">
                                                        أضافه فرد للعائلة</a>
                                                @endif
                                                <div class="table-responsive">
                                                    <table class="table table-hove">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>{{trans('language.name')}}</th>
                                                            <th>{{trans('language.relative_relation')}}</th>
                                                            <th>{{trans('language.id_number')}}</th>
                                                            <th>{{trans('language.settings')}}</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($item->childreen as $child)
                                                            <tr>
                                                                <td>{{$loop->iteration }}</td>
                                                                <td>{{$child->name}}</td>
                                                                <td>{{$child->relative_relation}}</td>
                                                                <td>{{$child->id_number}}</td>
                                                                <td>
                                                                    <a style="margin: 0px  10px"
                                                                       href="{{route("client.order.child.edit",$child->id)}}">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>

                                                                    <a href="{{route("client.order.child.delete",$child->id)}}">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- end ../ children table -->
                            <br>
                            <!--begin::Form-->
                            <section class="collapse show " id="collapseExample3"
                                     style="background-color: #ffffff; padding: 10px 30px">
                                <form action="{{route("admin.order.orderUpdate",$item->id)}}"
                                      enctype="multipart/form-data"
                                      class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework"
                                      method="post" id="kt_careers_form">
                                    @csrf

                                    <!--begin:: Names inputs -->
                                    <div class="row mb-5">
                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4 ">
                                            <!--begin::Label-->
                                            <label class=" required fs-5 fw-semibold mb-2">الاسم الاول</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control " placeholder=""
                                                   value="{{$item->first_name}}"
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
                                                   value="{{$item->parent_name}}"
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
                                                   value="{{$item->grandfather_name}}"
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
                                                   value="{{$item->family_name}}" required
                                                   name="family_name">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("الحالة الإجتماعية")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;"
                                                        id="social_situation_id"

                                                        class="form-control" name="social_situation_id">
                                                    <option @if($item->social_situation_id == 1) selected
                                                            @endif value="1"> رب أسرة
                                                    </option>
                                                    <option @if($item->social_situation_id == 2 ) selected
                                                            @endif value="2">أرملة
                                                    </option>
                                                    <option @if($item->social_situation_id == 3) selected
                                                            @endif value="3">مطلقة
                                                    </option>
                                                    <option @if($item->social_situation_id == 4) selected
                                                            @endif value="4">مهجورة
                                                    </option>
                                                    <option @if($item->social_situation_id == 5) selected
                                                            @endif value="5">أسرة سجين
                                                    </option>
                                                    <option @if($item->social_situation_id == 6) selected
                                                            @endif value="6">كبير في السن +٦٥
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("الجنسية")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="nationality_id"

                                                        class="form-control" name="nationality_id">
                                                    @foreach(\App\Models\Nationality::all() as $nationality)
                                                        <option @if($item->nationality_id == $nationality->id) selected
                                                                @endif value="{{$nationality->id}}">{{$nationality->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 pt-6">
                                            @includeIf('admin.components.form.edit.number', ['icon' => 'fa fa-user','label' => trans('إجمالي الدخل الشهري'),'name'=>'salary', 'placeholder'=>trans('إجمالي الدخل الشهري' ),'valid'=>trans('language.vaildation')])
                                        </div>


                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">تاريخ انتهاء الهوية</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input id="txtHijriDate" name="id_number_expiration_date" type="text"
                                                   value="{{$item->id_number_expiration_date}}" required
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
                                                   placeholder="" value="{{$item->birth_date}}" id="birthDayValue"
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
                                                   placeholder="" value="{{$item->age}}">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>

                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("المدينه")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="city" required
                                                        class="form-control " name="city">
                                                    @foreach(\App\Models\City::all() as $city)
                                                        <option @if($item->city == $city->id) selected
                                                                @endif value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('الحي'),'name'=>'district', 'placeholder'=>trans('الحي' ),'valid'=>trans('language.vaildation')])
                                        </div>

                                        <div class="col-md-6 pt-4">
                                            @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('رقم الجوال 2'),'name'=>'mobile2', 'placeholder'=>trans('رقم الجوال 2' ),'valid'=>trans('language.vaildation')])
                                        </div>


                                        <div class="col-md-6 pt-4">
                                            <label
                                                class="required">{{__("هل أنت من ذوي الإحتياجات الخاصة")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="is_special_case"
                                                        class="form-control" name="is_special_case">
                                                    <option @if($item->is_special_case == 0) selected
                                                            @endif  value="0">
                                                        لا
                                                    </option>
                                                    <option @if($item->is_special_case == 1) selected
                                                            @endif  value="1">
                                                        نعم
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pt-4">
                                            <label class="required">{{__("نوع الإعاقة")}}</label>
                                            <div class="">
                                                <select style="height: 40px !important;" id="special_case_type"
                                                        required class="form-control" name="special_case_type">
                                                    <option>أختر نوع الإعاقة</option>
                                                    <option @if($item->special_case_type == 1) selected
                                                            @endif value="1"> إعاقة حركية
                                                    </option>
                                                    <option @if($item->special_case_type == 2) selected
                                                            @endif value="2"> إعاقة سمعية
                                                    </option>
                                                    <option @if($item->special_case_type == 3) selected
                                                            @endif value="3">إعاقة ذهنية
                                                    </option>
                                                    <option @if($item->special_case_type == 4) selected
                                                            @endif value="4">إعاقة أخرى
                                                    </option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12 pt-4 ">
                                            <div class="row">
                                                @includeIf('admin.components.form.edit.file', ['required' => 'required' ,'icon' => 'fa fa-check','label' => trans('صورة الهوية'),'name'=>'id_number_image', 'max'=>'5'  , 'class' => "col-md-6 id_number_image uploadFiles"])
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('صورة صك الهجران'),'name'=>'deed_ofـabandonment', 'max'=>'5'  , 'class' => "col-md-6 deed_ofـabandonment uploadFiles"])
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('صورة صك الطلاق'),'name'=>'divorce_deed', 'max'=>'5'  , 'class' => "col-md-6 divorce_deed uploadFiles"])
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('شهادة وفاة الزوج'),'name'=>'husband_death_image', 'max'=>'5'  , 'class' => "col-md-6 husband_death_image uploadFiles"])
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('اثبات اسرة سجين'),'name'=>'prisoner_family_identification_facility', 'max'=>'5'  , 'class' => "col-md-6 prisoner_family_identification_facility uploadFiles"])
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('صورة صك الاعاقة'),'name'=>'attached_is_the_support_instrument', 'max'=>'5'  , 'class' => "col-md-6 attached_is_the_support_instrument uploadFiles"])
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('برنت ابشر - لغير السعوديين -'),'name'=>'absher_facility', 'max'=>'5'  , 'class' => "col-md-6 absherFile"])
                                            </div>
                                        </div>

                                        <div class="col-md-12 pt-4 ">
                                            <div class="row">
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('مرفقات أخرى'),'name'=>'other_attachments', 'max'=>'5'  , 'class' => "col-md-4"])
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('مرفقات أخرى'),'name'=>'other_attachments1', 'max'=>'5'  , 'class' => "col-md-4"])
                                                @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('مرفقات أخرى'),'name'=>'other_attachments2', 'max'=>'5'  , 'class' => "col-md-4"])
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Names inputs-->

                                    <!--begin::Separator-->
                                    <div class="separator mb-8"></div>
                                    <!--end::Separator-->

                                    <!--begin::Submit-->
                                    <button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
                                        تحديث البيانات
                                    </button>
                                    <!--end::Submit-->

                                </form>
                            </section>
                            <!--end::Form-->


                            <!--end::Content-->

                        </div>
                        <!--end::Careers main-->
                    </div>
                    <!--end::Content container-->
                </div>
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
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
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
        // hide all files ...
        $(".uploadFiles").addClass("hide");
        var social_situation_id = "{{$item->social_situation_id}}"

        if (social_situation_id == 1) {
            // رب اسره
            $('.id_number_image').removeClass("hide");
        }

        if (social_situation_id == 2) {
            // أرمله
            $('.id_number_image').removeClass("hide");
            $('.husband_death_image').removeClass("hide");
        }

        if (social_situation_id == 3) {
            // مطلقة
            $('.id_number_image').removeClass("hide");
            $('.divorce_deed').removeClass("hide");
        }

        if (social_situation_id == 4) {
            // مهجورة
            $('.id_number_image').removeClass("hide");
            $('.deed_ofـabandonment').removeClass("hide");
        }

        if (social_situation_id == 5) {
            // اسره سجين
            $('.id_number_image').removeClass("hide");
            $('.prisoner_family_identification_facility').removeClass("hide");
        }

        if (social_situation_id == 6) {
            // كبير في السن
            $('.id_number_image').removeClass("hide");
        }


        var nationality_id = {{$item->nationality_id}};
        if (nationality_id == 1) {
            $('.absherFile').addClass("hide");
        } else {
            $('.absherFile').removeClass("hide");
        }


    </script>

@endsection


