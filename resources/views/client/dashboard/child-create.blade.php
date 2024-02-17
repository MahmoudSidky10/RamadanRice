@extends('admin.layout.index')
@section('content')
    @include("admin.layout.nav",["title" => trans('أضافه بيانات المعالين')])

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
                                <form action="{{route("client.order.child.store")}}" enctype="multipart/form-data"
                                      class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                      method="post" id="kt_careers_form">
                                    @csrf
                                    <!--begin::Description-->
                                    <div class="mb-7">
                                        <!--begin::Title-->
                                        <h4 class="fs-1 text-gray-800 w-bolder mb-6">
                                            قم بأضافه بيانات المعالين
                                        </h4>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Description-->

                                    <div class="col-md-12">
                                        <a class="btn btn-primary" id="addNewCard">
                                            أضافه معال
                                        </a>
                                    </div>

                                    <section id="childrenSection">

                                        <div class="col-md-12"
                                             style="margin: 10px 0 ; padding-bottom: 10px;background-color: #DDDDDD">
                                            <div class="row mb-5">
                                                <div class="col-md-6 fv-row fv-plugins-icon-container pt-4 ">
                                                    <!--begin::Label-->
                                                    <label class="required fs-5 fw-semibold mb-2">الاسم الكامل</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control " placeholder="" value=""
                                                           name="name[]">
                                                    <!--end::Input-->
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                </div>
                                                <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                                    <!--end::Label-->
                                                    <label class="required fs-5 fw-semibold mb-2">صلة القرابة </label>
                                                    <!--end::Label-->

                                                    <!--end::Input-->
                                                    <input type="text" class="form-control " placeholder=""
                                                           name="relative_relation[]">
                                                    <!--end::Input-->
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                </div>
                                                <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                                    <!--end::Label-->
                                                    <label class="required fs-5 fw-semibold mb-2">رقم الهوية</label>
                                                    <!--end::Label-->

                                                    <!--end::Input-->
                                                    <input type="text" class="form-control " placeholder=""
                                                           name="id_number[]">
                                                    <!--end::Input-->
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                </div>
                                                <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                                    <!--end::Label-->
                                                    <label class="required fs-5 fw-semibold mb-2">تاريخ الميلاد</label>
                                                    <!--end::Label-->

                                                    <!--end::Input-->
                                                    <input type="date" class="form-control " placeholder=""
                                                           name="birth_date[]">
                                                    <!--end::Input-->
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                </div>
                                                <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
                                                    <!--end::Label-->
                                                    <label class=" fs-5 fw-semibold mb-2">الراتب الشهري</label>
                                                    <!--end::Label-->

                                                    <!--end::Input-->
                                                    <input type="text" class="form-control " placeholder=""
                                                           name="salary[]">
                                                    <!--end::Input-->
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                </div>
                                                <div class="col-md-6 pt-4">
                                                    <label class="">{{__("هل الفرد يتيم ؟")}}</label>
                                                    <div class="">
                                                        <select id="is_orphan" required class="form-control"
                                                                name="is_orphan[]">
                                                            <option value="0"> لا</option>
                                                            <option value="1"> نعم</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </section>

                                    <!--begin::Separator-->
                                    <div class="separator mb-8"></div>
                                    <!--end::Separator-->

                                    <!--begin::Submit-->
                                    <button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
                                        أتمام الطلب
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

    <script>
        $(document).ready(function () {
            $("#addNewCard").click(function () {
                $.ajax({
                    type: "GET",
                    url: "{{route('client.order.child.newRecord')}}",
                    success: function (data) {
                        $("#childrenSection").append(data);
                    }
                })
            });

        });

        function deleteRaw(item) {
            $("#div_" + item).remove();
        }
    </script>

@endsection


