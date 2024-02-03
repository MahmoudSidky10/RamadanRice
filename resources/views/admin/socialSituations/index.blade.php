@extends('admin.layout.table.index')
@section('page-title',trans('language.socialSituations'))
@section('root' , "permCategory")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.socialSituations')}}</li>
    </ol>
@endsection
@section("buttons")
    <a class="btn btn-success" href="{{url("/admin/socialSituations/create")}}">
        {{trans("language.add")}}
    </a>
@endsection
@section('thead')
    <tr class="text-center">
        <th>#</th>
        <th>{{trans('language.name')}}</th>
        <th>{{trans('language.settings')}}</th>
    </tr>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->name}}</td>
            <td>
                @includeIf("admin.components.buttons.edit" , ["href" => "socialSituations/$item->id/edit"])
                @includeIf("admin.components.buttons.delete",["message" => "($item->name)" ,  "action" => url("admin/socialSituations/$item->id")])
            </td>
        </tr>
    @endforeach
@endsection

@section("filters")
    <form method="get" action="{{url("/admin/socialSituations/")}}">

        <div style="display: flex">
            <div class="col-md-3">
                <input type="text" class="form-control name_input " name="name" value="{{request()->name}}"
                       placeholder="{{trans('language.name')}}">
            </div>

            <div class="col-md-3">
                <input style="width: 45%" type="submit" class="btn btn-success " value="{{trans('language.filter')}}">
                <button style="width: 45%" type="button"
                        class="btn btn-info  reset_inputs ">{{trans('language.reset')}}</button>
            </div>
        </div>
    </form>
@stop

@section("js")

    <script>
        $('.reset_inputs').click(function () {
            $('.name_input').val('');
            window.location = window.location.href.split("?")[0];
        });
    </script>

@endsection


