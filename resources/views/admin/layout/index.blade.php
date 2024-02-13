<!DOCTYPE html>
<html @if(App::isLocale('ar')) direction="rtl" dir="rtl" style="direction: rtl" @endif >
@includeIf("admin.layout.head")
<body id="kt_body"
      class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
@includeIf("admin.layout.header")
@includeIf("admin.layout.aside.index")
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        @yield("content")
    </div>
</div>
@includeIf("admin.layout.footer")
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

@includeIf("admin.components.modals.delete-modal")
@includeIf("admin.components.modals.update-modal")
@includeIf("admin.layout.scripts")

</body>
</html>
