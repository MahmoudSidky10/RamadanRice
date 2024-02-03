<head>
    <meta charset="utf-8"/>
    <title>{{__("language.appName")}}</title>
    <meta name="description" content="Page with empty content"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="{{url('assets/admin/plugins/global/plugins.bundle.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet">

    @if(App::isLocale('ar'))
        <link href="{{url('assets/admin/css/style.bundle.rtl.css')}}" rel="stylesheet">
    @else
        <link href="{{url('assets/admin/css/style.bundle.css')}}" rel="stylesheet">
    @endif


    <link href="{{asset("assets/admin/css/dropify.min.css")}}" rel="stylesheet"/>
    <link href="{{url('assets/admin/media/logos/favicon.ico')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('assets/admin/css/dropify.min.css')}}">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap');

        body {
            font-family: 'Cairo', sans-serif !important;
        }
    </style>


    <style>
        .img-responsive {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .required:after {
            content: " *";
            color: red;
        }


        /*h1, h2, h3, h4, h5, h6, p, input, textarea, span, a, td, th {*/
        /*    font-family: 'Cairo', sans-serif !important;*/
        /*}*/

        .hide {
            display: none !important;
        }


        .kt-switch {
            display: inline-block;
            font-size: 1rem;
        }

        .kt-switch input:empty {
            margin-right: -999px;
            height: 0;
            width: 0;
            overflow: hidden;
            position: absolute;
            opacity: 0;
        }

        .kt-switch input:empty ~ span {
            display: inline-block;
            position: relative;
            float: right;
            width: 1px;
            text-indent: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .kt-switch input:empty ~ span:before,
        .kt-switch input:empty ~ span:after {
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            right: 0;
            content: ' ';
            -webkit-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
        }

        .kt-switch.kt-switch--icon input:empty ~ span:after {
            font-family: "LineAwesome";
            text-decoration: inherit;
            text-rendering: optimizeLegibility;
            text-transform: none;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
            content: "";
        }

        .kt-switch.kt-switch--icon input:checked ~ span:after {
            content: '\f17b';
        }

        .kt-switch.kt-switch--icon-check input:checked ~ span:after {
            font-family: "LineAwesome";
            text-decoration: inherit;
            text-rendering: optimizeLegibility;
            text-transform: none;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
            content: "";
        }

        .kt-switch input:empty ~ span {
            line-height: 30px;
            margin: 2px 0;
            height: 30px;
            width: 57px;
            border-radius: 15px;
        }

        .kt-switch input:empty ~ span:before,
        .kt-switch input:empty ~ span:after {
            width: 54px;
            border-radius: 15px;
        }

        .kt-switch input:empty ~ span:after {
            height: 24px;
            width: 24px;
            line-height: 26px;
            top: 3px;
            bottom: 3px;
            margin-right: 3px;
            font-size: 0.9em;
            text-align: center;
            vertical-align: middle;
        }

        .kt-switch input:checked ~ span:after {
            margin-right: 26px;
        }

        .kt-switch.kt-switch--lg input:empty ~ span {
            line-height: 40px;
            margin: 2px 0;
            height: 40px;
            width: 75px;
            border-radius: 20px;
        }

        .kt-switch.kt-switch--lg input:empty ~ span:before,
        .kt-switch.kt-switch--lg input:empty ~ span:after {
            width: 72px;
            border-radius: 20px;
        }

        .kt-switch.kt-switch--lg input:empty ~ span:after {
            height: 34px;
            width: 34px;
            line-height: 34px;
            top: 3px;
            bottom: 3px;
            margin-right: 3px;
            font-size: 1em;
            text-align: center;
            vertical-align: middle;
        }

        .kt-switch.kt-switch--lg input:checked ~ span:after {
            margin-right: 34px;
        }

        .kt-switch.kt-switch--sm input:empty ~ span {
            line-height: 24px;
            margin: 2px 0;
            height: 24px;
            width: 40px;
            border-radius: 12px;
        }

        .kt-switch.kt-switch--sm input:empty ~ span:before,
        .kt-switch.kt-switch--sm input:empty ~ span:after {
            width: 38px;
            border-radius: 12px;
        }

        .kt-switch.kt-switch--sm input:empty ~ span:after {
            height: 20px;
            width: 20px;
            line-height: 20px;
            top: 2px;
            bottom: 2px;
            margin-right: 2px;
            font-size: 0.8em;
            text-align: center;
            vertical-align: middle;
        }

        .kt-switch.kt-switch--sm input:checked ~ span:after {
            margin-right: 16px;
        }

        .form-group.row .kt-switch {
            margin-top: 0.15rem;
        }

        .form-group.row .kt-switch.kt-switch--lg {
            margin-top: 0rem;
            position: relative;
            top: -0.3rem;
        }

        .form-group.row .kt-switch.kt-switch--sm {
            margin-top: 0.3rem;
        }

        .kt-switch input:empty ~ span:before {
            background-color: #e8ebf1;
        }

        .kt-switch input:empty ~ span:after {
            color: #f8f9fb;
            background-color: #ffffff;
        }

        .kt-switch input:checked ~ span:before {
            background-color: #e8ebf1;
        }

        .kt-switch input:checked ~ span:after {
            background-color: #2D2F33;
            color: #ffffff;
        }

        .kt-switch input[disabled] {
            cursor: not-allowed;
        }

        .kt-switch input[disabled] ~ span:after,
        .kt-switch input[disabled] ~ span:before {
            cursor: not-allowed;
            opacity: 0.7;
        }

        .kt-switch.kt-switch--brand:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #2D2F33;
        }

        .kt-switch.kt-switch--brand:not(.kt-switch--outline) input:empty ~ span:after {
            color: #2D2F33;
            background-color: #ffffff;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--brand:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #2D2F33;
        }

        .kt-switch.kt-switch--brand:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--brand input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--brand input:empty ~ span:after {
            color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--brand input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--brand input:checked ~ span:after {
            background-color: #2D2F33;
            opacity: 1;
        }

        .kt-switch.kt-switch--metal:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #d3dae6;
        }

        .kt-switch.kt-switch--metal:not(.kt-switch--outline) input:empty ~ span:after {
            color: #d3dae6;
            background-color: #586272;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--metal:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #d3dae6;
        }

        .kt-switch.kt-switch--metal:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--metal input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--metal input:empty ~ span:after {
            color: #586272;
        }

        .kt-switch.kt-switch--outline.kt-switch--metal input:checked ~ span:before {
            background-color: #586272;
        }

        .kt-switch.kt-switch--outline.kt-switch--metal input:checked ~ span:after {
            background-color: #d3dae6;
            opacity: 1;
        }

        .kt-switch.kt-switch--light:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--light:not(.kt-switch--outline) input:empty ~ span:after {
            color: #ffffff;
            background-color: #282a3c;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--light:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--light:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--light input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--light input:empty ~ span:after {
            color: #282a3c;
        }

        .kt-switch.kt-switch--outline.kt-switch--light input:checked ~ span:before {
            background-color: #282a3c;
        }

        .kt-switch.kt-switch--outline.kt-switch--light input:checked ~ span:after {
            background-color: #ffffff;
            opacity: 1;
        }

        .kt-switch.kt-switch--dark:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #645ca1;
        }

        .kt-switch.kt-switch--dark:not(.kt-switch--outline) input:empty ~ span:after {
            color: #645ca1;
            background-color: #ffffff;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--dark:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #645ca1;
        }

        .kt-switch.kt-switch--dark:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--dark input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--dark input:empty ~ span:after {
            color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--dark input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--dark input:checked ~ span:after {
            background-color: #645ca1;
            opacity: 1;
        }

        .kt-switch.kt-switch--accent:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #00c5dc;
        }

        .kt-switch.kt-switch--accent:not(.kt-switch--outline) input:empty ~ span:after {
            color: #00c5dc;
            background-color: #ffffff;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--accent:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #00c5dc;
        }

        .kt-switch.kt-switch--accent:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--accent input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--accent input:empty ~ span:after {
            color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--accent input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--accent input:checked ~ span:after {
            background-color: #00c5dc;
            opacity: 1;
        }

        .kt-switch.kt-switch--focus:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #9816f4;
        }

        .kt-switch.kt-switch--focus:not(.kt-switch--outline) input:empty ~ span:after {
            color: #9816f4;
            background-color: #ffffff;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--focus:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #9816f4;
        }

        .kt-switch.kt-switch--focus:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--focus input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--focus input:empty ~ span:after {
            color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--focus input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--focus input:checked ~ span:after {
            background-color: #9816f4;
            opacity: 1;
        }

        .kt-switch.kt-switch--primary:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #5867dd;
        }

        .kt-switch.kt-switch--primary:not(.kt-switch--outline) input:empty ~ span:after {
            color: #5867dd;
            background-color: #ffffff;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--primary:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #5867dd;
        }

        .kt-switch.kt-switch--primary:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--primary input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--primary input:empty ~ span:after {
            color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--primary input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--primary input:checked ~ span:after {
            background-color: #5867dd;
            opacity: 1;
        }

        .kt-switch.kt-switch--success:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #1dc9b7;
        }

        .kt-switch.kt-switch--success:not(.kt-switch--outline) input:empty ~ span:after {
            color: #1dc9b7;
            background-color: #ffffff;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--success:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #1dc9b7;
        }

        .kt-switch.kt-switch--success:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--success input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--success input:empty ~ span:after {
            color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--success input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--success input:checked ~ span:after {
            background-color: #1dc9b7;
            opacity: 1;
        }

        .kt-switch.kt-switch--info:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #5578eb;
        }

        .kt-switch.kt-switch--info:not(.kt-switch--outline) input:empty ~ span:after {
            color: #5578eb;
            background-color: #ffffff;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--info:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #5578eb;
        }

        .kt-switch.kt-switch--info:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--info input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--info input:empty ~ span:after {
            color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--info input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--info input:checked ~ span:after {
            background-color: #5578eb;
            opacity: 1;
        }

        .kt-switch.kt-switch--warning:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #ffb822;
        }

        .kt-switch.kt-switch--warning:not(.kt-switch--outline) input:empty ~ span:after {
            color: #ffb822;
            background-color: #111111;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--warning:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #ffb822;
        }

        .kt-switch.kt-switch--warning:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--warning input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--warning input:empty ~ span:after {
            color: #111111;
        }

        .kt-switch.kt-switch--outline.kt-switch--warning input:checked ~ span:before {
            background-color: #111111;
        }

        .kt-switch.kt-switch--outline.kt-switch--warning input:checked ~ span:after {
            background-color: #ffb822;
            opacity: 1;
        }

        .kt-switch.kt-switch--danger:not(.kt-switch--outline) input:empty ~ span:before {
            background-color: #fd397a;
        }

        .kt-switch.kt-switch--danger:not(.kt-switch--outline) input:empty ~ span:after {
            color: #fd397a;
            background-color: #ffffff;
            opacity: 0.4;
        }

        .kt-switch.kt-switch--danger:not(.kt-switch--outline) input:checked ~ span:before {
            background-color: #fd397a;
        }

        .kt-switch.kt-switch--danger:not(.kt-switch--outline) input:checked ~ span:after {
            opacity: 1;
        }

        .kt-switch.kt-switch--outline.kt-switch--danger input:empty ~ span:before {
            border: 2px solid #dee3eb;
            background-color: #e8ebf1;
        }

        .kt-switch.kt-switch--outline.kt-switch--danger input:empty ~ span:after {
            color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--danger input:checked ~ span:before {
            background-color: #ffffff;
        }

        .kt-switch.kt-switch--outline.kt-switch--danger input:checked ~ span:after {
            background-color: #fd397a;
            opacity: 1;
        }


    </style>

    @yield("css")
</head>

