@extends('admin.layout.forms.add.index')
@section('action' , "employees")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/dash")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{url("admin/employees")}}">  {{trans('language.employees')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.add')}}</li>
    </ol>
    <a class="col-md-2 btn btn-dark" href="{{url()->previous() }}"> عودة </a>
    <br> <br>
@endsection
@section('root' , "employees")
@section('page-title',trans('language.employees'))
@section('form-groups')

    @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('language.name'),'name'=>'name', 'placeholder'=>trans('language.name' ),'valid'=>trans('language.vaildation')])
    @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('language.user_name'),'name'=>'user_name', 'placeholder'=>trans('language.user_name' ),'valid'=>trans('language.vaildation')])
    @includeIf('admin.components.form.add.password', ['icon' => 'fa fa-user','label' => trans('language.password'),'name'=>'password', 'placeholder'=>trans('language.password' ),'valid'=>trans('language.vaildation')])

@endsection
@section('submit-button-title' , trans('language.add'))

