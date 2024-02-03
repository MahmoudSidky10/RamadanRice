@extends('admin.layout.index')
@section('content')
    @include("admin.layout.nav",["title" => trans('language.dashboard')])

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


