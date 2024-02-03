<!--begin::Aside-->
<div class="aside aside-left d-flex aside-fixed" id="kt_aside">

    <div class="aside-primary d-flex flex-column align-items-center flex-row-auto">

        <!-- Logo -->
        <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">
            {{--            <a href="{{url("/admin/dash")}}">--}}
            {{--                <img alt="Logo" src="{{asset("assets/com-soon/K-B-LOGO.png")}}" class="max-h-30px"/>--}}
            {{--            </a>--}}
        </div>

        <!-- Sections Taps  -->
        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull">
            <ul class="nav flex-column" role="tablist">
                <li class="nav-item mb-3 tap_n_1" data-toggle="tooltip" data-placement="right" data-container="body"
                    data-boundary="window" title="Features">
                    <a href="#"
                       class="nav-link btn btn-icon btn-icon-white btn-hover-transparent-white tap_nav_1 active"
                       data-toggle="tab" data-target="#kt_aside_tab_1" role="tab">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
													<path
                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                        fill="#000000" opacity="0.3"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                    </a>
                </li>
                {{--                <li class="nav-item mb-3 tap_n_2" data-toggle="tooltip" data-placement="right" data-container="body"--}}
                {{--                    data-boundary="window" title="Members">--}}
                {{--                    <a href="#" class="nav-link btn btn-icon btn-icon-white btn-hover-transparent-white tap_nav_2"--}}
                {{--                       data-toggle="tab" data-target="#kt_aside_tab_2" role="tab">--}}
                {{--										<span class="svg-icon svg-icon-xl">--}}
                {{--											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->--}}
                {{--											<svg xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                {{--                                                 viewBox="0 0 24 24" version="1.1">--}}
                {{--												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                {{--													<polygon points="0 0 24 0 24 24 0 24"/>--}}
                {{--													<path--}}
                {{--                                                        d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"--}}
                {{--                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
                {{--													<path--}}
                {{--                                                        d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"--}}
                {{--                                                        fill="#000000" fill-rule="nonzero"/>--}}
                {{--												</g>--}}
                {{--											</svg>--}}
                {{--                                            <!--end::Svg Icon-->--}}
                {{--										</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body"
                    data-boundary="window" title="Members">
                    <a href="{{url("/logout")}}"
                       class="nav-link btn btn-icon btn-icon-white btn-hover-transparent-white">
                        <i class="flaticon-logout"></i>
                    </a>

                </li>

            </ul>

        </div>

        <!-- Footer -->
        <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">
            <!--begin::Aside Toggle-->
            <span class="aside-toggle btn btn-icon btn-primary btn-hover-primary shadow-sm" id="kt_aside_toggle"
                  data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window"
                  title="Toggle Aside">
								<i class="ki ki-bold-arrow-back icon-sm"></i>
							</span>

            <br>

            <a href="#" class="btn btn-icon btn-icon-white btn-hover-transparent-white w-40px h-40px"
               id="kt_quick_user_toggle" data-toggle="tooltip" data-placement="right" data-container="body"
               data-boundary="window" title="User Profile">
                <div class="symbol symbol-30 bg-gray-100">
                    <div class="symbol-label">
                        <img alt="Logo" src="{{asset("assets/com-soon/K-B-LOGO.png")}}"
                             class="h-75 align-self-end"/>
                    </div>
                    <i class="symbol-badge bg-success"></i>
                </div>
            </a>
            <!--end::User-->
        </div>

        <!-- pops -->
        <div id="kt_quick_user" class="offcanvas offcanvas-left p-10">
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
                <h3 class="font-weight-bold m-0">{{__("language.user_details")}}</h3>
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
            <div class="offcanvas-content pr-5 mr-n5">
                <!--begin::Header-->
                <div class="d-flex align-items-center mt-5">
                    <div class="symbol symbol-100 mr-5">
                        <div class="symbol-label"
                             style="background-image:url({{asset("assets/com-soon/K-B-LOGO.png")}}); background-size: cover"></div>
                        <i class="symbol-badge bg-success"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#"
                           class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{Auth::user()->name}}</a>
                        <div class="navi mt-1">
                            <a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path
                                                        d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                        fill="#000000"/>
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">{{Auth::user()->email}}</span>
								</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="navi navi-spacer-x-0 p-0">
                    <span class="navi-item mt-2">
						<span class="navi-link">
							<a href="{{url("/logout")}}"
                               class="btn btn-sm btn-light-primary font-weight-bolder py-3 px-6">{{__("language.logout")}}</a>
                               <a href="{{url("/admin/edit")}}" style="margin: 0 5px"
                                  class="btn btn-sm btn-light-info font-weight-bolder py-3 px-6">تحديث البيانات</a>

						</span>

					</span>
                </div>
                <div class="separator separator-dashed my-5"></div>
            </div>
        </div>

    </div>


    <!-- Tap Content -->
    <div class="aside-secondary d-flex flex-row-fluid">
        <div class="aside-workspace scroll scroll-push my-2">
            <div class="tab-content">
                <div class="tab-pane  tap_cont_1 fade" id="kt_aside_tab_1">
                    <!--begin::Aside Menu-->
                    <div class="aside-menu-wrapper flex-column-fluid px-3 px-lg-10 py-5" id="kt_aside_menu_wrapper">
                        <!--begin::Menu Container-->
                        <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1"
                             data-menu-scroll="1">
                            <!--begin::Menu Nav-->
                            <ul class="menu-nav">
                                @if(auth()->user()->user_type_id == 1 )
                                    @include("admin.layout.aside.tap1")
                                @elseif(auth()->user()->user_type_id == 3 )
                                    @include("admin.layout.aside.tap2")
                                @endif
                            </ul>
                            <!--end::Menu Nav-->
                        </div>
                        <!--end::Menu Container-->
                    </div>
                    <!--end::Aside Menu-->
                    <!--end::List-->
                </div>
                {{--                <div class="tab-pane tap_cont_2 fade " id="kt_aside_tab_2">--}}
                {{--                    <!--begin::Aside Menu-->--}}
                {{--                    <div class="aside-menu-wrapper flex-column-fluid px-3 px-lg-10 py-5" id="kt_aside_menu_wrapper">--}}
                {{--                        <!--begin::Menu Container-->--}}
                {{--                        <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1"--}}
                {{--                             data-menu-scroll="1">--}}
                {{--                            <ul class="menu-nav">--}}
                {{--                                @include("admin.layout.aside.tap2")--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                        <!--end::Menu Container-->--}}
                {{--                    </div>--}}
                {{--                    <!--end::Aside Menu-->--}}
                {{--                    <!--end::List-->--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>

</div>

<style>
    .notification {
        background-color: #555;
        color: white;
        text-decoration: none;
        padding: 15px 26px;
        position: relative;
        display: inline-block;
        border-radius: 2px;
    }

    .notification:hover {
        background: red;
    }

    .notification .badge {
        position: absolute;
        top: -10px;
        right: -1px;
        padding: 5px 10px;
        border-radius: 50%;
        background: red;
        color: white;
    }
</style>
