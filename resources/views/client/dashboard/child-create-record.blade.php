<div class="col-md-12" id="div_{{$rand}}"
     style="margin: 10px 0 ; padding-bottom: 10px;background-color: #DDDDDD">

    <a class="btn btn-danger mt-3 " onclick="deleteRaw({{$rand}})">
        حذف المعال
    </a>

    <div class="row mb-5">
        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4 ">
            <!--begin::Label-->
            <label class="required fs-5 fw-semibold mb-2">الاسم الكامل</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input required type="text" class="form-control " placeholder="" value=""
                   name="name[]">
            <!--end::Input-->
            <div
                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
        </div>
        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
            <!--end::Label-->
            <label class="required fs-5 fw-semibold mb-2">صلة القرابة </label>
            <!--end::Label-->

            <!--end::Input-->
            <input required type="text" class="form-control " placeholder=""
                   name="relative_relation[]">
            <!--end::Input-->
            <div
                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
        </div>
        <div class="col-md-6 fv-row fv-plugins-icon-container pt-4">
            <!--end::Label-->
            <label class="required fs-5 fw-semibold mb-2">رقم الهوية</label>
            <!--end::Label-->

            <!--end::Input-->
            <input type="text" class="form-control " placeholder=""
                   name="id_number[]">
            <!--end::Input-->
            <div
                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
        </div>
    </div>
</div>
