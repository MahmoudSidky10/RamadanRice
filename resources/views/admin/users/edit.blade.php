@extends('admin.layout.forms.edit.index')
@section('action' , "users/$item->id")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/dash")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{url("admin/users")}}">  {{trans('language.hotels')}}</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.edit')}}</li>
    </ol>
@endsection
@section('root' , "users")
@section('title' , trans('language.edit'))
@section('page-title',trans('language.edit'))
@section('form-groups')

    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.id_number'),'name'=>'id_number', 'placeholder'=>trans('language.id_number' ),'valid'=>trans('language.vaildation')])

@endsection
@section('submit-button-title' , trans("language.edit"))
@section('js')

@endsection
