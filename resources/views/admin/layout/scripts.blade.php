<script src="{{asset('assets/admin/')}}/plugins/global/plugins.bundle.js"></script>
<script src="{{asset('assets/admin/')}}/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="{{asset('assets/admin/')}}/js/scripts.bundle.js"></script>
<script src="{{asset("assets/admin/")}}/js/dropify.min.js"></script>
<script src="{{asset('assets/admin/')}}/js/pages/widgets.js"></script>
<script src="{{asset('assets/admin/')}}/js/lightbox.js"></script>
<script src="{{asset('assets/admin/')}}/js/open-delete-modal.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwxAJHAPhgfrxa6vZHBkvqPbIMqxJCvVw&libraries=places"></script>
<script src="{{asset("assets/admin/")}}/js/dropify.min.js"></script>

<script>
    $(document).ready(function () {
        $('.dropify').dropify();
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("هل تريد الغاء تحميل الصورة ؟");
        });
        drEvent.on('dropify.afterClear', function (event, element) {
            alert('تم الغاء عمليه تحميل الصوره .');
        });
        drEvent.on('dropify.errors', function (event, element) {
            console.log('هناك خطاء اثناء تحميل الصوره');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

<script>

    $(".tap_n_1").click(function () {
        localStorage.setItem("sideTapNum", 1);
        $("#kt_body").removeClass("aside-minimize");
    });

    $(".tap_n_2").click(function () {
        localStorage.setItem("sideTapNum", 2);
        $("#kt_body").removeClass("aside-minimize");
    });

    // get avtive side tap :-
    var st = localStorage.getItem("sideTapNum");
    if (st == 1) {
        $(".tap_nav_1").addClass("active")
        $(".tap_nav_2").removeClass("active ")
        $(".tap_cont_1").addClass("active show")
        $(".tap_cont_2").removeClass("active show")
    } else if (st == 2) {
        $(".tap_nav_2").addClass("active ")
        $(".tap_nav_1").removeClass("active ")

        $(".tap_cont_2").addClass("active show")
        $(".tap_cont_1").removeClass("active show")
    } else {
        localStorage.setItem("sideTapNum", 1);
        $(".tap_nav_1").addClass("active")
        $(".tap_nav_2").removeClass("active ")
        $(".tap_cont_1").addClass("active show")
        $(".tap_cont_2").removeClass("active show")
    }


</script>


<script>
    $(document).ready(function () {
        $('.dropify').dropify();
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })


    });
</script>


<script>
    $('.select2').select2();
</script>

@yield("js")
