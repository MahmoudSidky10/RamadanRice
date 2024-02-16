@extends('admin.layout.forms.add.index')
@section('action' , "socialSituations")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item"><a
                    href="{{url("admin/socialSituations")}}">  {{trans('language.socialSituations')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.add')}}</li>
    </ol>
    <a class="col-md-2 btn btn-dark" href="{{url()->previous() }}"> عودة </a>
    <br> <br>
@endsection
@section('root' , "permCategory")
@section('page-title',trans('language.socialSituations'))
@section('form-groups')
    @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('language.name'),'name'=>'name_ar', 'placeholder'=>trans('language.name_ar' ),'valid'=>trans('language.vaildation')])
 @endsection
@section('submit-button-title' , trans('language.add'))
