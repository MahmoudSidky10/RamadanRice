@extends('admin.layout.index')
@section('content')
    @include("admin.layout.nav",["title" => trans('تعديل بيانات المعالين')])

    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div id="kt_app_content" class="app-content  flex-column-fluid ">


                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <!--begin::Careers main-->
                    <div class="d-flex flex-column flex-xl-row col-lg-12">
                        <!--begin::Content-->
                        <div class="card bg-body me-xl-12 mb-12 mb-xl-0" style="width: 100%">
                            <div class="card-body">

                                <!--begin::Form-->
                                <form action="{{route("client.order.child.update",$item->id)}}"
                                      enctype="multipart/form-data"
                                      class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                      method="post" id="kt_careers_form">
                                    @csrf
                                    <!--begin:: Names inputs -->
                                    <div class="row mb-5">
                                        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4 ">
                                            <!--begin::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">الاسم الكامل</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control " placeholder=""
                                                   value="{{$item->name}}"
                                                   name="name">
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
                                                   value="{{$item->relative_relation}}"
                                                   name="relative_relation">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-12 fv-row fv-plugins-icon-container pt-4">
                                            <!--end::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">رقم الهوية</label>
                                            <!--end::Label-->

                                            <!--end::Input-->
                                            <input type="text" class="form-control " placeholder=""
                                                   value="{{$item->id_number}}"
                                                   name="id_number">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <!--end::Names inputs-->

                                    <!--begin::Separator-->
                                    <div class="separator mb-8"></div>
                                    <!--end::Separator-->

                                    <!--begin::Submit-->
                                    <button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
                                        تحديث
                                    </button>

                                    <a href="{{url()->previous()}}" class="btn btn-success"
                                       id="kt_careers_submit_button">
                                        الغاء
                                    </a>

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


