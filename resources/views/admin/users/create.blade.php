@extends('admin.layout.forms.add.index')
@section('action' , "users")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/dash")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{url("admin/users")}}">  {{trans('language.users')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.add')}}</li>
    </ol>
    <a class="col-md-2 btn btn-dark" href="{{url()->previous() }}"> عودة </a>
    <br> <br>

@endsection
@section('root' , "users")
@section('page-title',trans('language.users'))
@section('form-groups')

    @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('language.id_number'),'name'=>'id_number', 'placeholder'=>trans('language.id_number' ),'valid'=>trans('language.vaildation')])

@endsection
@section('submit-button-title' , trans('language.add'))

