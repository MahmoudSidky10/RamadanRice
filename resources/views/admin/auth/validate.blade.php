<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>{{__("language.appName")}}</title>
    <meta name="description" content="Validate page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="{{url('assets/admin/plugins/global/plugins.bundle.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet">
    @if(App::isLocale('ar'))
        <link href="{{url('assets/admin/css/style.bundle.rtl.css')}}" rel="stylesheet">
    @else
        <link href="{{url('assets/admin/css/style.bundle.css')}}" rel="stylesheet">
    @endif
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap');

        body {
            font-family: 'Cairo', sans-serif !important;
        }
    </style>

    <link href="{{asset("assets/admin/media/logos/logo-1.svg")}}" rel="stylesheet">

</head>
<body id="kt_body"
      class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
<div class="d-flex flex-column flex-root">
    <div
            class="login login-2 login-signin-on d-flex flex-column flex-column-fluid bg-white position-relative overflow-hidden"
            id="kt_login">
        <div class="login-header py-10 flex-column-auto">
            <div
                    class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
                <a href="#" class="flex-column-auto py-5 py-md-0">
                    <img src="{{asset('assets/admin/media/logos/logo-1.svg')}}" alt="logo" class="h-50px"/>

                </a>
            </div>
        </div>
        <div class="login-body d-flex flex-column-fluid align-items-stretch justify-content-center">
            <div class="container row">
                <div
                        class="col-lg-6 bgi-size-contain bgi-no-repeat bgi-position-y-center bgi-position-x-center min-h-150px mt-10 m-md-0"
                        style="background-image: url({{asset("assets/admin/media/svg/illustrations/payment.svg")}})"></div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="login-form login-signin">
                        <form class="form w-xxl-550px rounded-lg p-20" novalidate="novalidate"
                              method="POST" action="{{ route('admin.validate') }}">
                            @csrf


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(Session::has('danger'))
                                <div class="alert alert-danger"
                                     style="font-weight: bold"> {{ Session::get('danger') }}</div>
                            @endif

                            <div class="pb-13 pt-lg-0 pt-5">
                                <h4 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">
                                    يرجى التحقق من بريدك الإلكتروني للحصول على رمز الدخول
                                </h4>
                            </div>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">{{ __('language.validationCode') }}</label>
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="text"
                                       name="code" autocomplete="off" required/>
                            </div>
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" id="kt_login_signin_submit"
                                        class="btn btn-primary font-weight-bolder font-size-h6 px-8 col-md-12 py-4 my-3 mr-">
                                    تسجيل الدخول
                                </button>
                            </div>

                            <div class="pb-lg-0 pb-5">
                                <a id="resend-code" href="#" onclick="resendCode(this);return false;">
                                    اعادة ارسال رمز التحقق
                                </a>
                                <div style="display:none; margin-top:7px; font-size:12px;" id="timer">يمكنك اعادة ارسال رمز التحقق خلال
                                    <span id="count-down"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{url('assets/admin/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('assets/admin/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{url('assets/admin/js/scripts.bundle.js')}}"></script>
<script>
    let fewSeconds = 20

    function countDown() {
        let timeOut = setInterval(() => {
            if(fewSeconds == 0) {
                document.getElementById('timer').style.display="none";
            } else {
                if(fewSeconds < 10) {
                    fewSeconds = 0 + '' + fewSeconds;
                }
                document.getElementById('timer').style.display="block";
                document.getElementById('count-down').innerHTML='00:' + fewSeconds;
                fewSeconds -= 1;
            }
        }, 1000);
    }

    function resendCode(target) {
        countDown()
        $.ajax({
            url: '{{ route('admin.validate.resend') }}',
            type: 'get',
            success: function(response) {
                if(response.success) {
                    document.getElementById('resend-code').style.pointerEvents="none";
                    document.getElementById('resend-code').style.cursor="default";
                    document.getElementById('resend-code').style.color="#ccc";
                    setTimeout(() => {
                        document.getElementById('resend-code').style.pointerEvents="auto";
                        document.getElementById('resend-code').style.cursor="pointer";
                        document.getElementById('resend-code').style.color="#3699ff";
                    }, fewSeconds * 1000);
                }
            }
        });
    }
</script>
</body>
</html>
