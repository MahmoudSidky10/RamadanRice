<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("assets/print/assets/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/print/assets/fontawesome.css")}}">
    <link rel="stylesheet" href="{{asset("assets/print/assets/brands.css")}}">
    <link rel="stylesheet" href="{{asset("assets/print/assets/solid.css")}}">
    <link rel="stylesheet" href="{{asset("assets/print/assets/all.css")}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/print/assets/PrintStyle.css")}}">

    <title>index</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/images/logo.png")}}"/>
</head>
<body>
<!-- GENRALL HEAD FOR PAGE -->
<div class="container">
    <div class="row">
        <div class="col-12 print_head">
            <p>للطباعه قم بالضغط علي
                <button onclick="window.print()"><i class="fa-solid fa-print"></i>طباعه</button>
                او الضغط علي <span>(CTRL+P)</span> من لوحه المفاتيح
            </p>
            <a class="print_head btn btn-dark p-md-2" style="padding-bottom: 10px" href="{{url("/admin/users")}}">
                <i class="fa-solid fa-arrow-left"> عودة لقائمه المستفيدين  </i>
            </a>
        </div>
    </div>
</div>



<!-- PAGE CONTENT -->

<div class="container-fluid ">
    <div class="row">
        <div class="col-6">
            <img class="Site_logo" src="{{asset("assets/images/logo.png")}}" alt="logo">
        </div>
        <div class="col-6 text-left">
            <img class="Site_parcode" src="{{asset("assets/print/assets/images/parcode.png")}}" alt="logo">
            <p class="site_link">www.ihr-ksa.com</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="Head_section">ـــــــــــــــــــــــ برنامج أرزاق رمضان (1445هـ - 2024م)
                ـــــــــــــــــــــــ</p>
        </div>
        <div class="col-12 mt-3">

            <h2 style="font-weight: bolder !important" class="head_content">
                عزيري المستفيد ,أدناه تعليمات تقديم طلب أرزاق رمضان :
            </h2>
            <p class="paper_content"> الدخول للموقع الإلكتروني إما بمسح الباركود بواسطة الكاميرا
                <br>
                أو زيارة الرابط
                الإلكتروني
                ( www.ihr-ksa.com )
            </p>
            <p class="paper_content"> إدخال رمز الدخول الموضح أدناه ورقم الهوية </p>
            <p class="paper_content"> إكمال تعبئة البيانات والمرفقات بشكل سليم </p>
            <p class="paper_content"> الضغط على كلمة إرسال </p>
            <p class="paper_content"> في حالة استيفائكم للشروط وبعد التحقق من طلبكم ستصلكم رسالة نصية لزيارة أي فرع من
                فروع متجر الدكان</p>

            <p class="Randome_number"> رمز الدخول : {{$user->register_number}} </p>

        </div>
        <div class="col-12 Nots">
            <p><i class="fa-solid fa-triangle-exclamation"></i> آخر موعد لإكمال تعبئة البيانات يوم 27 فبراير 2024 </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="print_Footer">
                في حال وجود إستفسار عن برنامج أرزاق رمضان أو آلية إدخال المعلومات يرجى التواصل بالواتساب على الجوال
                <span class="phone">0505655344</span>
            </p>
        </div>
    </div>
    <!-- page break -->
    <div class="pagebreak"></div>
</div>

<script src="{{asset("assets/print/assets/jQuery.js")}}"></script>
<script src="{{asset("assets/print/assets/bootstrap.bundle.min.js")}}"></script>

</body>
</html>
