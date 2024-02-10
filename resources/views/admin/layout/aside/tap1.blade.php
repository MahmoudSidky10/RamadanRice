<!-- ADMIN DASHBOARD -->

<div class="menu-content "><span style="font-weight: bolder" class="menu-section fs-5 fw-bolder ps-1 py-1">
        {{__('language.appName')}}
    </span></div>
<br>

<li class="menu-item menu-item-submenu
 @if(strpos(url()->current(), "dash" )) menu-item-open @endif
 @if(strpos(url()->current(), "reports" )) menu-item-open @endif

" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;"
                                                   class="menu-link menu-toggle">
       <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/keen-v2/theme/demo1/dist/assets/media/svg/icons/Design/Layers.svg--><svg
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
               height="24px"
               viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"></polygon>
        <path
            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
            fill="#000000" fill-rule="nonzero"></path>
        <path
            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
            fill="#000000" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span>
        <span class="menu-text">{{trans('language.dashboard')}}</span><i class="menu-arrow"></i></a>
    <div class="menu-submenu "
         @if(strpos(url()->current(), "dash" )) style="display: block;" @endif
         @if(strpos(url()->current(), "reports" )) style="display: block;" @endif
         kt-hidden-height="200"><i
            class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span
                        class="menu-text">{{trans('language.dashboard')}}</span></span></li>
            <li class="menu-item @if(strpos(url()->current(), "dash" )) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf("admin.layout.aside.main-item" ,["href"=>"/admin/dash" , "title" => trans('language.home') , "icon" => "menu-icon flaticon-layers" ])
            </li>

            <li class="menu-item @if(strpos(url()->current(), "reports" )) menu-item-active @endif  "
                aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf("admin.layout.aside.main-item" ,["href"=>"/admin/reports" , "title" => trans('language.reports') , "icon" => "menu-icon flaticon-layers" ])
            </li>
        </ul>
    </div>
</li>


<li class="menu-item menu-item-submenu
 @if(strpos(url()->current(), "users" )) menu-item-open @endif
" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;"
                                                   class="menu-link menu-toggle">
               <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/keen-v2/theme/demo1/dist/assets/media/svg/icons/Design/Layers.svg--><svg
                       xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                       height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path
            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
            fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>

        <span class="menu-text">{{trans('language.user_section')}}</span><i class="menu-arrow"></i></a>
    <div class="menu-submenu "
         @if(strpos(url()->current(), "users" ))  style="display: block;" @endif
         kt-hidden-height="200"><i
            class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span
                        class="menu-text">{{trans('language.user_section')}}</span></span></li>
            <li class="menu-item @if(strpos(url()->current(), "users" )) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf("admin.layout.aside.main-item" ,["href"=>"/admin/users" , "title" => trans('language.users') , "icon" => "menu-icon flaticon-layers" ])
            </li>

            <li class="menu-item @if(strpos(url()->current(), "orders" )) menu-item-active @endif  " aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf("admin.layout.aside.main-item" ,["href"=>"/admin/orders" , "title" => trans('language.orders') , "icon" => "menu-icon flaticon-layers" ])
            </li>

        </ul>
    </div>
</li>

<li class="menu-item menu-item-submenu
 @if(strpos(url()->current(), "employees" )) menu-item-open @endif
" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;"
                                                   class="menu-link menu-toggle">
               <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/keen-v2/theme/demo1/dist/assets/media/svg/icons/Design/Layers.svg--><svg
                       xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                       height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path
            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
            fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>

        <span class="menu-text">{{trans('language.employees')}}</span><i class="menu-arrow"></i></a>
    <div class="menu-submenu "
         @if(strpos(url()->current(), "employees" ))  style="display: block;" @endif
         kt-hidden-height="200"><i
            class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span
                        class="menu-text">{{trans('language.employees')}}</span></span></li>
            <li class="menu-item @if(strpos(url()->current(), "employees" )) menu-item-active @endif  "
                aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf("admin.layout.aside.main-item" ,["href"=>"/admin/employees" , "title" => trans('language.employees') , "icon" => "menu-icon flaticon-layers" ])
            </li>
        </ul>
    </div>
</li>


<li class="menu-item menu-item-submenu

 @if(strpos(url()->current(), "settings" )) menu-item-open @endif
 @if(strpos(url()->current(), "socialSituations" )) menu-item-open @endif

 " aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle">
               <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/keen-v2/theme/demo1/dist/assets/media/svg/icons/Design/Layers.svg--><svg
                       xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                       height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M10,14 L5,14 C4.33333333,13.8856181 4,13.5522847 4,13 C4,12.4477153 4.33333333,12.1143819 5,12 L12,12 L12,19 C12,19.6666667 11.6666667,20 11,20 C10.3333333,20 10,19.6666667 10,19 L10,14 Z M15,9 L20,9 C20.6666667,9.11438192 21,9.44771525 21,10 C21,10.5522847 20.6666667,10.8856181 20,11 L13,11 L13,4 C13,3.33333333 13.3333333,3 14,3 C14.6666667,3 15,3.33333333 15,4 L15,9 Z"
            fill="#000000" fill-rule="nonzero"/>
        <path
            d="M3.87867966,18.7071068 L6.70710678,15.8786797 C7.09763107,15.4881554 7.73079605,15.4881554 8.12132034,15.8786797 C8.51184464,16.2692039 8.51184464,16.9023689 8.12132034,17.2928932 L5.29289322,20.1213203 C4.90236893,20.5118446 4.26920395,20.5118446 3.87867966,20.1213203 C3.48815536,19.7307961 3.48815536,19.0976311 3.87867966,18.7071068 Z M16.8786797,5.70710678 L19.7071068,2.87867966 C20.0976311,2.48815536 20.7307961,2.48815536 21.1213203,2.87867966 C21.5118446,3.26920395 21.5118446,3.90236893 21.1213203,4.29289322 L18.2928932,7.12132034 C17.9023689,7.51184464 17.2692039,7.51184464 16.8786797,7.12132034 C16.4881554,6.73079605 16.4881554,6.09763107 16.8786797,5.70710678 Z"
            fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>

        <span class="menu-text">{{trans('language.settings')}}</span><i class="menu-arrow"></i></a>
    <div class="menu-submenu "
         @if(strpos(url()->current(), "settings" ))  style="display: block;" @endif
         @if(strpos(url()->current(), "socialSituations" ))  style="display: block;" @endif

         kt-hidden-height="200"><i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span
                        class="menu-text">{{trans('language.settings')}}</span></span></li>
            <li class="menu-item @if(strpos(url()->current(), "settings" )) menu-item-active @endif"
                aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf("admin.layout.aside.main-item" ,["href"=>"/admin/settings" , "title" => trans('language.settings') , "icon" => "menu-icon flaticon-layers" ])
            </li>

            <li class="menu-item @if(strpos(url()->current(), "socialSituations" )) menu-item-active @endif"
                aria-haspopup="true"
                data-menu-toggle="hover">
                @includeIf("admin.layout.aside.main-item" ,["href"=>"/admin/socialSituations" , "title" => trans('language.socialSituations') , "icon" => "menu-icon flaticon-layers" ])
            </li>

        </ul>
    </div>
</li>





