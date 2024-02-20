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

                                        <p style="font-weight: bolder !important;  font-size: 14px; color: red" class="paper_content">#
                                            في حالة وجود معالين اضغط علي (
                                            <span style="color: black"> اضافه معال  </span>
                                            ) , أو اضغط علي ( <span style="color: black">اتمام الطلب </span> ) لاتمام طلبك بدون معالين
                                        </p>

                                        <!--end::Title-->

                                    </div>
                                    <!--end::Description-->

                                    <section id="childrenSection" >


                                    </section>

                                    <!--begin::Separator-->
                                    <div class="separator mb-8"></div>
                                    <!--end::Separator-->

                                    <!--begin::Submit-->

                                    <a class="btn btn-primary" id="addNewCard">
                                        أضافه معال
                                    </a>

                                    <button type="submit" class="btn btn-success" id="kt_careers_submit_button">
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


