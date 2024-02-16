@extends('admin.layout.index')
@section('content')
    @include("admin.layout.nav",["title" => trans('')])

    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid">

                        <div class="col-md-12">
                            @if(auth()->user()->isAdmin())
                                <div class="row">
                                    <!-- card start -->
                                    <div style="margin: 10px 10px ; height: 250px !important;"
                                         class="col-md-3 card h-lg-300">
                                        <a style="color: #0c0e18 !important;" href="{{url("/admin/employees")}}">
                                            <div class="card-body   flex-column">
                                                <!--begin::Icon-->
                                                <div class="m-0">
                                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                                        <i class="icon-2x text-dark-50 flaticon-users"></i>
                                                    </div>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex flex-column " style="margin-top: 30px">
                                                    <!--begin::Number-->
                                                    <span
                                                            class="fw-semibold fs-3x text-gray-800 "> <h1
                                                                style="font-weight: 700 !important;font-size: 70px">   {{number_format($employeesCount)}}  </h1></span>
                                                    <!--end::Number-->

                                                    <!--begin::Follower-->
                                                    <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-400 "
                                                      style="color: #686872  !important;">{{__("language.employees")}}</span>

                                                    </div>
                                                    <!--end::Follower-->
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <!-- ../ card end -->

                                    <!-- card start -->
                                    <div style="margin: 10px 10px ; height: 250px !important;"
                                         class="col-md-3 card h-lg-300">
                                        <a style="color: #0c0e18 !important;" href="{{url("/admin/users")}}">
                                            <div class="card-body   flex-column">
                                                <!--begin::Icon-->
                                                <div class="m-0">
                                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                                        <i class="icon-2x text-dark-50 flaticon-users"></i>
                                                    </div>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex flex-column " style="margin-top: 30px">
                                                    <!--begin::Number-->
                                                    <span
                                                            class="fw-semibold fs-3x text-gray-800 "> <h1
                                                                style="font-weight: 700 !important;font-size: 70px">   {{number_format($usersCount)}}  </h1></span>
                                                    <!--end::Number-->

                                                    <!--begin::Follower-->
                                                    <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-400 "
                                                      style="color: #686872  !important;">{{__("language.users")}}</span>

                                                    </div>
                                                    <!--end::Follower-->
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <!-- ../ card end -->

                                    <!-- card start -->
                                    <div style="margin: 10px 10px ; height: 250px !important;"
                                         class="col-md-3 card h-lg-300">
                                        <a style="color: #0c0e18 !important;" href="{{url("/admin/orders")}}">
                                            <div class="card-body   flex-column">
                                                <!--begin::Icon-->
                                                <div class="m-0">
                                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                                        <i class="icon-2x text-dark-50 flaticon-users"></i>
                                                    </div>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex flex-column " style="margin-top: 30px">
                                                    <!--begin::Number-->
                                                    <span
                                                            class="fw-semibold fs-3x text-gray-800 "> <h1
                                                                style="font-weight: 700 !important;font-size: 70px">   {{number_format($ordersCount)}}  </h1></span>
                                                    <!--end::Number-->

                                                    <!--begin::Follower-->
                                                    <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-400 "
                                                      style="color: #686872  !important;">{{__("language.orders")}}</span>

                                                    </div>
                                                    <!--end::Follower-->
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <!-- ../ card end -->

                                </div>
                            @endif

                            @if(auth()->user()->isEmployee())
                                <div class="row">
                                    <div class="col-xl-6">

                                        <!--begin::Engage widget 1-->
                                        <div class="card h-md-100" dir="ltr">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column flex-center">
                                                <!--begin::Heading-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                                                        <span class="fw-bolder" style="font-weight: bolder"> أضافه مستفيد جديد ؟ </span>
                                                    </h1>
                                                    <!--end::Title-->

                                                    <!--begin::Illustration-->
                                                    <div class="py-10 text-center">
                                                        <img
                                                                src="{{asset("assets/admin/media/svg/illustrations/easy/2.svg")}}"
                                                                class="theme-light-show w-200px" alt="">
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Links-->
                                                <br>
                                                <div class="text-center mb-1">
                                                    <!--begin::Link-->
                                                    <a style="font-weight: bolder" class="btn btn-sm btn-light"
                                                       href="{{route("users.index")}}">
                                                        عرض المستفيدين</a>
                                                    <!--end::Link-->

                                                    <!--begin::Link-->
                                                    <a style="font-weight: bolder" href="{{route("users.create")}}"
                                                       class="btn btn-sm btn-primary me-2"> أضافه مستفيد</a>
                                                    <!--end::Link-->
                                                    <br>
                                                    <br>

                                                    <!--begin::Link-->
                                                    <a style="font-weight: bolder" class="btn btn-sm btn-dark col-md-12"
                                                       href="{{url("/admin/orders")}}">إستعراض طلبات الأرزاق</a>
                                                    <!--end::Link-->

                                                </div>
                                                <!--end::Links-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Engage widget 1-->

                                    </div>
                                    <div class="col-xl-6">

                                        <!--begin::Engage widget 1-->
                                        <div class="card h-xl-100" dir="ltr">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column flex-center">
                                                <!--begin::Heading-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-semibold text-gray-800 text-center lh-lg pt-15">
                                                        <span style="font-weight: bolder" class="fw-bolder">بحث عن طلب مستفيد ؟</span>
                                                    </h1>
                                                    <!--end::Title-->

                                                    <!--begin::Illustration-->
                                                    <div class="py-5 text-center">
                                                        <img
                                                                src="{{asset("assets/admin/media/svg/illustrations/easy/3.png")}}"
                                                                class="theme-light-show w-200px" alt="">

                                                        <form method="get" action="{{url("/admin/orders")}}">
                                                            <input style="font-weight: bolder ; text-align: right"
                                                                   type="text" class="form-control mobile_input mt-6"
                                                                   name="id_number" value=""
                                                                   placeholder="ادخل رقم هويه المستفيد ...">
                                                            <input style="font-weight: bolder ; width: 100%"
                                                                   type="submit" class="btn btn-success mt-3"
                                                                   value="{{trans('language.filter')}}">
                                                        </form>

                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                            </div>

                                            <!--end::Body-->
                                        </div>
                                        <!--end::Engage widget 1-->

                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                    <!--end::Container-->
                </div>
            </div>
        </div>
    </div>

@endsection
@section("js")
@endsection


