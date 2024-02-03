@extends('admin.layout.table.index')
@section('page-title',trans('language.employees'))
@section('root' , "employees")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/dash")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.employees')}}</li>
    </ol>
@endsection
@section("buttons")
    <a class="btn btn-success col-md-1 " href="{{url("/admin/employees/create")}}">
        {{trans("language.add")}}
    </a>
@endsection
@section('thead')
    <tr class="text-center">
        <th>#</th>
        <th>{{trans('language.name')}}</th>
        <th>{{trans('language.username')}}</th>
        <th>{{trans('language.num_of_employee_creators')}}</th>
        <th>{{trans('language.created_at')}}</th>
        <th>{{trans('language.settings')}}</th>
    </tr>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->user_name}}</td>
            <td>{{count($item->creators())}}</td>
            <td>{{($item->created_at) ? $item->created_at->format("d-m-Y") : null}}</td>
            <td>
                @includeIf("admin.components.buttons.edit" , ["href" => "employees/$item->id/edit"])
            </td>
        </tr>
    @endforeach
@endsection

@section("filters")
    <form method="get" action="{{url("/admin/employees")}}">

        <div style="display: flex">

            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control mobile_input mt-6" name="name"
                               value="{{request()->name}}"
                               placeholder="{{trans('language.name')}}">
                    </div>

                    <div class="col-md-3">
                        <input type="text" class="form-control email_input mt-6" name="user_name"
                               value="{{request()->user_name}}"
                               placeholder="{{trans('language.username')}}">
                    </div>

                    <div class="col-md-3">
                        <span> {{trans('language.start_at')}} </span>
                        <input type="date" class="form-control start_at" name="start_at" value="{{request()->start_at}}"
                               placeholder="{{trans('language.start_at')}}">
                    </div>

                    <div class="col-md-3">
                        <span> {{trans('language.end_at')}} </span>
                        <input type="date" class="form-control end_at " name="end_at" value="{{request()->end_at}}"
                               placeholder="{{trans('language.end_at')}}">
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


