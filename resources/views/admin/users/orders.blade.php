@extends('admin.layout.table.index')
@section('page-title',trans('language.orders'))
@section('root' , "orders")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/dash")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.orders')}}</li>
    </ol>
@endsection
@section('thead')
    <tr class="text-center">
        <th>#</th>
        <th>{{trans('language.name')}}</th>
        <th>{{trans('language.id_number')}}</th>
        <th>{{trans('language.children_count')}}</th>
        <th>{{trans('language.status')}}</th>
        <th>{{trans('language.details')}}</th>
    </tr>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->first_name}} {{$item->parent_name}} </td>
            <td>{{$item->id_number}}</td>
            <td>{{count($item->childreen)}}</td>
            <td>
                <span style="font-weight: bolder">{{$item->orderStatusName()}} </span>
                <hr width="70%">
                <a href="javascript:void(0)"
                   class="btn btn-dark updateStatusBtn"
                   data-original-title="تحديث الحالة"
                   data-message="{{"تحديث حاله الطلب "}}"
                   data-action="{{url("admin/orders/$item->id/updateStatus")}}"
                   data-toggle="modal"
                   data-id="{{$item->id}}"
                   data-target=".updateStatusModal"
                   title="{{trans('تحديث الحالة')}}">
                    تحديث الحالة
                </a>

            </td>
            <td>
                <a href="{{route("admin.order.details",$item->id)}}"
                   class="btn btn-success"> {{trans('language.details')}}</a>
            </td>
        </tr>
    @endforeach

@endsection

@section("filters")
    <form method="get" action="{{url("/admin/orders")}}">

        <div style="display: flex">

            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control mobile_input mt-6" name="id_number"
                               value="{{request()->id_number}}"
                               placeholder="{{trans('language.id_number')}}">
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-md-3">
                        <input style="width: 45%" type="submit" class="btn btn-success "
                               value="{{trans('language.filter')}}">
                        <button style="width: 45%" type="button"
                                class="btn btn-info  reset_inputs ">{{trans('language.reset')}}</button>
                    </div>
                </div>
            </div>


        </div>
    </form>
@stop

@section("js")

    <script>
        $('.reset_inputs').click(function () {
            $('.name_input').val('');
            $('.mobile_input').val('');
            $('.email_input').val('');
            $('.start_at').val('');
            $('.end_at').val('');
            window.location = window.location.href.split("?")[0];
        });
    </script>

@endsection


