@extends('admin.layout.forms.edit.index')
@section('action' , "socialSituations/$item->id")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item"><a
                    href="{{url("admin/socialSituations")}}">  {{trans('language.socialSituations')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.edit')}}</li>
    </ol>
    <a class="col-md-2 btn btn-dark" href="{{url()->previous() }}"> عودة </a>
    <br> <br>
@endsection
@section('root' , "socialSituations")
@section('title' , trans('language.edit'))
@section('page-title',trans('language.edit'))
@section('form-groups')
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.name'),'name'=>'name_ar', 'placeholder'=>trans('language.name_ar' ),'valid'=>trans('language.vaildation')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.description'),'name'=>'description', 'placeholder'=>trans('language.description' ),'valid'=>trans('language.vaildation')])
 @endsection
@section('submit-button-title' , trans("language.edit"))
