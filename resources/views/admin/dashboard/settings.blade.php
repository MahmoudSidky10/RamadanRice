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

    <div class="col-12">
        <div class="row">
            <div class="col-12 form-group">
                <label>{{trans("language.enable_creating_new_orders")}}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class='fa fa-list'></i></span>
                    </div>
                    <select required class="form-control " id="enable_creating_new_orders" name="enable_creating_new_orders">
                        <option @if($item->enable_creating_new_orders == 1) selected
                                @endif value="1"> {{trans('language.enable')}}</option>
                        <option @if($item->enable_creating_new_orders == 0) selected
                                @endif value="0"> {{trans('language.disable')}}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('submit-button-title' , trans("language.edit"))
