@extends('admin.layout.forms.edit.index')
@section('action' , "updateAdmin")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.edit')}}</li>
    </ol>
@endsection
@section('root' , "coupons")
@section('title' , trans('language.edit'))
@section('page-title',trans('language.edit'))
@section('form-groups')

    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.name'),'name'=>'name', 'placeholder'=>trans('language.name' ),'valid'=>trans('language.vaildation')])
    @if(auth()->user()->isAdmin())
        @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.email'),'name'=>'email', 'placeholder'=>trans('language.email' ),'valid'=>trans('language.vaildation')])
    @endif
    @includeIf('admin.components.form.edit.password', ['icon' => 'fa fa-user','label' => trans('language.password'),'name'=>'password', 'placeholder'=>trans('language.password' ),'valid'=>trans('language.vaildation')])

@endsection
@section('submit-button-title' , trans("language.edit"))
