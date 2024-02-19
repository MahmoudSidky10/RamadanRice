@extends('admin.layout.index')
@section('content')
    @include("admin.layout.nav",["title" => trans('تقارير الطلبات ')])

    <div class="d-flex flex-column-fluid">
        <div class="container-fluid">
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="col-md-12">
                        @if(auth()->user()->isAdmin())
                            <div class="row">
                                <!-- card start -->
                                <div style=" margin: 0 15px; height: 250px !important;" class="col-md-3 card h-lg-300">
                                    <a style="color: #0c0e18 !important;">
                                        <div class="card-body   flex-column">
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column " style="margin-top: 30px">
                                                <!--begin::Number-->
                                                <span
                                                        class="fw-semibold fs-3x text-gray-800 "> <h1
                                                            style="font-weight: 700 !important;font-size: 70px">   {{number_format($pendingOrdersCount)}}  </h1></span>
                                                <!--end::Number-->

                                                <!--begin::Follower-->
                                                <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-400 "
                                                      style="color: #686872  !important;">{{__(" الطلبات قيد الانتظار")}}</span>

                                                </div>
                                                <!--end::Follower-->
                                            </div>

                                            <div class="pt-6">
                                                @if($pendingOrdersCount > 0 )
                                                    <a class="btn btn-dark" href="{{route("admin.order.export",1)}}">استخراج
                                                        التقرير </a>
                                                @endif
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <!-- ../ card end -->

                                <!-- card start -->
                                <div style=" margin: 0 15px; height: 250px !important;" class="col-md-3 card h-lg-300">
                                    <a style="color: #0c0e18 !important;">
                                        <div class="card-body   flex-column">
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column " style="margin-top: 30px">
                                                <!--begin::Number-->
                                                <span
                                                        class="fw-semibold fs-3x text-gray-800 "> <h1
                                                            style="font-weight: 700 !important;font-size: 70px">   {{number_format($doneOrdersCount)}}  </h1></span>
                                                <!--end::Number-->

                                                <!--begin::Follower-->
                                                <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-400 "
                                                      style="color: #686872  !important;">{{__(" الطلبات المقبولة")}}</span>

                                                </div>
                                                <!--end::Follower-->
                                            </div>

                                            <div class="pt-6">
                                                @if($doneOrdersCount > 0 )
                                                    <a class="btn btn-dark" href="{{route("admin.order.export",2)}}">استخراج
                                                        التقرير </a>
                                                @endif
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <!-- ../ card end -->

                                <!-- card start -->
                                <div style=" margin:  0 15px; height: 250px !important;" class="col-md-4 card h-lg-300">
                                    <a style="color: #0c0e18 !important;">
                                        <div class="card-body   flex-column">
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column " style="margin-top: 30px">
                                                <!--begin::Number-->
                                                <span
                                                        class="fw-semibold fs-3x text-gray-800 "> <h1
                                                            style="font-weight: 700 !important;font-size: 70px">   {{number_format($missingOrdersCount)}}  </h1></span>
                                                <!--end::Number-->

                                                <!--begin::Follower-->
                                                <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-400 "
                                                      style="color: #686872  !important;">{{__(" الطلبات الغير مكتملة")}}</span>

                                                </div>
                                                <!--end::Follower-->
                                            </div>

                                            <div class="pt-6">
                                                @if($missingOrdersCount > 0 )
                                                    <a class="btn btn-dark" href="{{route("admin.order.export",3)}}">استخراج
                                                        التقرير </a>
                                                @endif
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <!-- ../ card end -->

                                <!-- card start -->
                                <div style="  margin:  0 15px; height: 250px !important;"
                                     class="col-md-3 card h-lg-300 mt-3">
                                    <a style="color: #0c0e18 !important;">
                                        <div class="card-body   flex-column">
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column " style="margin-top: 30px">
                                                <!--begin::Number-->
                                                <span
                                                        class="fw-semibold fs-3x text-gray-800 "> <h1
                                                            style="font-weight: 700 !important;font-size: 70px">   {{number_format($rejectedOrdersCount)}}  </h1></span>
                                                <!--end::Number-->

                                                <!--begin::Follower-->
                                                <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-400 "
                                                      style="color: #686872  !important;">{{__(" الطلبات الغير متوافقة")}}</span>

                                                </div>
                                                <!--end::Follower-->
                                            </div>

                                            <div class="pt-6">
                                                @if($rejectedOrdersCount > 0 )
                                                    <a class="btn btn-dark" href="{{route("admin.order.export",4)}}">استخراج
                                                        التقرير </a>
                                                @endif
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <!-- ../ card end -->
                                <!-- card start -->
                                <div style="  margin:  0 15px; height: 250px !important;"
                                     class="col-md-3 card h-lg-300 mt-3">
                                    <a style="color: #0c0e18 !important;">
                                        <div class="card-body   flex-column">
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column " style="margin-top: 30px">
                                                <!--begin::Number-->
                                                <span
                                                        class="fw-semibold fs-3x text-gray-800 "> <h1
                                                            style="font-weight: 700 !important;font-size: 70px">   {{number_format($reUpdatedOrdersCount)}}  </h1></span>
                                                <!--end::Number-->

                                                <!--begin::Follower-->
                                                <div class="m-0">
                                                <span class="fw-semibold fs-6 text-gray-400 "
                                                      style="color: #686872  !important;">{{__(" الطلبات تم تحديث بيانتها")}}</span>

                                                </div>
                                                <!--end::Follower-->
                                            </div>

                                            <div class="pt-6">
                                                @if($reUpdatedOrdersCount > 0 )
                                                    <a class="btn btn-dark" href="{{route("admin.order.export",5)}}">استخراج
                                                        التقرير </a>
                                                @endif
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <!-- ../ card end -->

                            </div>
                        @endif
                    </div>
                    <!--end::Container-->
                </div>
            </div>
        </div>
    </div>

@endsection
@section("js")
@endsection


