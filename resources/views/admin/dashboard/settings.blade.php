@extends('admin.layout.forms.edit.index')
@section('action' , "updateSettings")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{url("admin/settings")}}">  {{trans('language.settings')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.edit')}}</li>
    </ol>
@endsection
@section('root' , "clients")
@section('title' , trans('language.edit') . " " . trans('language.settings'))
@section('page-title',trans('language.edit'))
@section('form-groups')


    <div class="col-md-12">
        <div class="row">
            @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('language.event_cover_image'),'name'=>'event_cover_image', 'max'=>'5' , 'class' => "col-md-12"])
        </div>
    </div>


    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.tabby_limit'),'name'=>'tabby_limit', 'placeholder'=>trans('language.tabby_limit'),'valid'=>trans('language.vaildation')])
{{--    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.driving_cost'),'name'=>'driving_cost', 'placeholder'=>trans('language.driving_cost'),'valid'=>trans('language.vaildation')])--}}
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.package_expenses_profit_percentage'),'name'=>'package_expenses_profit_percentage', 'placeholder'=>trans('language.package_expenses_profit_percentage'),'valid'=>trans('language.vaildation')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.driving_receive_the_license_location'),'name'=>'driving_receive_the_license_location', 'placeholder'=>trans('language.driving_receive_the_license_location'),'valid'=>trans('language.vaildation')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.support_email'),'name'=>'support_email', 'placeholder'=>trans('language.support_email'),'valid'=>trans('language.vaildation')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.whatsApp'),'name'=>'whats_app', 'placeholder'=>trans('language.whatsApp'),'valid'=>trans('language.vaildation')])


    <div class="col-12">
        <div class="row">
            <div class="col-6 form-group">
                <label>{{trans("language.chat_enabled")}}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class='fa fa-list'></i></span>
                    </div>
                    <select required class="form-control " id="" name="chat_enabled">
                        <option @if($item->chat_enabled == 1) selected @endif value="1"> {{trans('language.appear')}}</option>
                        <option @if($item->chat_enabled == 0) selected @endif value="0"> {{trans('language.not_appear')}}</option>
                    </select>
                </div>
            </div>
            <div class="col-6 form-group">
                <label>{{trans("language.wallet_enabled")}}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class='fa fa-list'></i></span>
                    </div>
                    <select required class="form-control " id="" name="wallet_enabled">
                        <option @if($item->wallet_enabled == 1) selected @endif value="1"> {{trans('language.appear')}}</option>
                        <option @if($item->wallet_enabled == 0) selected @endif value="0"> {{trans('language.not_appear')}}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.privacy_policy_ar')}}</h4>
                    <textarea id="mymce_ar" name="privacy_policy_ar">{{$item->privacy_policy_ar}}</textarea>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.privacy_policy_en')}}</h4>
                    <textarea id="mymce_en" name="privacy_policy_en">{{$item->privacy_policy_en}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.translations_hint_ar')}}</h4>
                    <textarea id="mymce_ar" name="translations_hint_ar">{{$item->translations_hint_ar}}</textarea>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.translations_hint_en')}}</h4>
                    <textarea id="mymce_en" name="translations_hint_en">{{$item->translations_hint_en}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.terms_ar')}}</h4>
                    <textarea id="mymce_ar" name="terms_ar">{{$item->terms_ar}}</textarea>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.terms_en')}}</h4>
                    <textarea id="mymce_en" name="terms_en">{{$item->terms_en}}</textarea>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.about_ar')}}</h4>
                    <textarea id="mymce_ar" name="about_ar">{{$item->about_ar}}</textarea>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.about_en')}}</h4>
                    <textarea id="mymce_en" name="about_en">{{$item->about_en}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.tabby_hint_ar')}}</h4>
                    <textarea id="mymce_ar" name="tabby_hint_ar">{{$item->tabby_hint_ar}}</textarea>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{trans('language.tabby_hint_en')}}</h4>
                    <textarea id="mymce_en" name="tabby_hint_en">{{$item->tabby_hint_en}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <br>

    @includeIf('admin.components.form.add.textarea', [
        'icon' => 'fa fa-user',
        'label' => trans('language.package_default_exclusion_ar'),
        'name' => 'package_default_exclusion_ar',
        'placeholder' => trans('language.package_default_exclusion_ar'),
        'value' => old('package_default_exclusion_ar', $item->package_default_exclusion_ar) ?? config('defaultvalues.packages.exclusion_ar')
    ])

    @includeIf('admin.components.form.add.textarea', [
        'icon' => 'fa fa-user',
        'label' => trans('language.package_default_exclusion_en'),
        'name' => 'package_default_exclusion_en',
        'placeholder'=>trans('language.package_default_exclusion_en'),
        'value' => old('package_default_exclusion_en', $item->package_default_exclusion_en) ?? config('defaultvalues.packages.exclusion_en')
    ])

    @includeIf('admin.components.form.add.textarea', [
        'required' => 'required',
        'icon' => 'fa fa-user',
        'label' => trans('language.package_default_full_terms_ar'),
        'name' => 'package_default_full_terms_ar',
        'placeholder' => trans('language.package_default_full_terms_ar'),
        'valid' => trans('language.vaildation'),
        'value' => old('package_default_full_terms_ar', $item->package_default_full_terms_ar) ?? config('defaultvalues.packages.full_terms_ar')
    ])

    @includeIf('admin.components.form.add.textarea', [
        'required' => 'required',
        'icon' => 'fa fa-user',
        'label' => trans('language.package_default_full_terms_en'),
        'name' => 'package_default_full_terms_en',
        'placeholder' => trans('language.package_default_full_terms_en'),
        'valid' => trans('language.vaildation'),
        'value' => old('package_default_full_terms_en', $item->package_default_full_terms_en) ?? config('defaultvalues.packages.full_terms_en')
    ])

    @includeIf('admin.components.form.add.text', [
       'required' => 'required',
       'icon' => 'fa fa-user',
       'label' => trans('language.package_default_contact_mobile'),
       'name' => 'package_default_contact_mobile',
       'placeholder' => trans('language.package_default_contact_mobile'),
       'valid' => trans('language.vaildation'),
       'value' => old('package_default_contact_mobile', $item->package_default_contact_mobile) ?? config('defaultvalues.packages.contact_mobile')
    ])

@includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.social_title_en'),'name'=>'social_title_en', 'placeholder'=>trans('language.social_title_en'),'valid'=>trans('language.vaildation')])
@includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.social_title_ar'),'name'=>'social_title_ar', 'placeholder'=>trans('language.social_title_ar'),'valid'=>trans('language.vaildation')])

@if($item->social_icons->isEmpty())
    <div class="row col-md-12">
        <div class="col-md-4">
            @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.social_title'),'name'=>'social_icons[0][title]', 'placeholder'=>trans('language.social_title'),'valid'=>trans('language.vaildation')])
        </div>
        <div class="col-md-4">
            @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.social_url'),'name'=>'social_icons[0][url]', 'placeholder'=>trans('language.social_url'),'valid'=>trans('language.vaildation')])
        </div>
        <div class="col-md-4">
            <div class="col-md-4">
                @includeIf('admin.components.form.edit.file', [
                    'icon' => 'fa fa-user',
                    'label' => trans('language.social_icon'),
                    'max'=>'5' ,
                    'name'=>'social_icons[0][icon]',
                    'placeholder'=>trans('language.social_icon'),
                    'valid'=>trans('language.vaildation'),
                ])
            </div>
        </div>
    </div>

    <div class="row col-md-12">
        <div class="col-md-4">
            @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.social_title'),'name'=>'social_icons[1][title]', 'placeholder'=>trans('language.social_title'),'valid'=>trans('language.vaildation')])
        </div>
        <div class="col-md-4">
            @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.social_url'),'name'=>'social_icons[1][url]', 'placeholder'=>trans('language.social_url'),'valid'=>trans('language.vaildation')])
        </div>
        <div class="col-md-4">
            <div class="col-md-4">
                @includeIf('admin.components.form.edit.file', [
                    'icon' => 'fa fa-user',
                    'label' => trans('language.social_icon'),
                    'max'=>'5' ,
                    'name'=>'social_icons[1][icon]',
                    'placeholder'=>trans('language.social_icon'),
                    'valid'=>trans('language.vaildation'),
                ])
            </div>
        </div>
    </div>
    <div class="row col-md-12">
        <div class="col-md-4">
            @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.social_title'),'name'=>'social_icons[2][title]', 'placeholder'=>trans('language.social_title'),'valid'=>trans('language.vaildation')])
        </div>
        <div class="col-md-4">
            @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.social_url'),'name'=>'social_icons[2][url]', 'placeholder'=>trans('language.social_url'),'valid'=>trans('language.vaildation')])
        </div>
        <div class="col-md-4">
            <div class="col-md-4">
                @includeIf('admin.components.form.edit.file', [
                    'icon' => 'fa fa-user',
                    'label' => trans('language.social_icon'),
                    'max'=>'5' ,
                    'name'=>'social_icons[2][icon]',
                    'placeholder'=>trans('language.social_icon'),
                    'valid'=>trans('language.vaildation'),
                ])
            </div>
        </div>
    </div>
@else
    @foreach ($item->social_icons as $key => $social )
        <div class="row col-md-12">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputuname">{{trans('language.social_title')}}</label>
                    <div class="input-group">
                        <input name="social_icons[{{$key}}][title]"
                            value="{{$social['title'] ?? ''}}"
                            placeholder="{{trans('language.social_title')}}"
                            type="text" class="form-control"
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputuname">{{trans('language.social_url')}}</label>
                    <div class="input-group">
                        <input name="social_icons[{{$key}}][url]"
                            value="{{$social['url'] ?? ''}}"
                            placeholder="{{trans('language.social_url')}}"
                            type="text" class="form-control"
                        >
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{(!empty($social['icon'])) ? $social['icon'] : ''}}" name="social_icons[{{$key}}][icon_path]">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputuname" class="required">{{trans('language.social_icon')}}</label>
                    <div class="input-group">
                        <input type="file"
                            data-default-file="{{ (isset($social['icon']) && $social['icon']) ? env("AWS_BUCKET_URL").''.$social['icon']  : ''}}"
                            name="social_icons[{{$key}}][icon]" class="dropify"
                            data-max-file-size="5M"
                        />
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

@includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.call_us_description_en'),'name'=>'call_us_description_en', 'placeholder'=>trans('language.call_us_description_en'),'valid'=>trans('language.vaildation')])
@includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.call_us_description_ar'),'name'=>'call_us_description_ar', 'placeholder'=>trans('language.call_us_description_ar'),'valid'=>trans('language.vaildation')])

@includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.whatsapp_title_en'),'name'=>'whatsapp_title_en', 'placeholder'=>trans('language.whatsapp_title_en'),'valid'=>trans('language.vaildation')])
@includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.whatsapp_title_ar'),'name'=>'whatsapp_title_ar', 'placeholder'=>trans('language.whatsapp_title_ar'),'valid'=>trans('language.vaildation')])

@includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.number_contact'),'name'=>'number', 'placeholder'=>trans('language.number_contact'),'valid'=>trans('language.vaildation')])

@endsection
@section('submit-button-title' , trans("language.edit"))
@section('js')
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{asset("assets/admin/")}}/js/tinymce/tinymce.min.js"></script>
    <script>
        $(document).ready(function () {
            var plugins = [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ];
            var toolbar = "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons";
            var height = 300;
            var theme = "modern";
            if ($("#mymce_ar").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce_ar",
                    theme: theme,
                    height: height,
                    directionality: 'rtl',
                    plugins: plugins,
                    toolbar: toolbar,
                });
            }

            if ($("#mymce_en").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce_en",
                    theme: theme,
                    height: height,
                    directionality: 'ltr',
                    plugins: plugins,
                    toolbar: toolbar,
                });
            }
        });
    </script>
@endsection
