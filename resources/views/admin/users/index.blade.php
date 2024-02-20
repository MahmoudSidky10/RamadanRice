@extends('admin.layout.table.index')
@section('page-title',trans('language.users'))
@section('root' , "users")
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("admin/dash")}}">  {{trans('language.home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('language.users')}}</li>
    </ol>
@endsection
@section("buttons")
    @if(\App\Models\Setting::first()->enable_creating_new_orders == 1)
        <a class="btn btn-success col-md-1 " href="{{url("/admin/users/create")}}">
            {{trans("language.add")}}
        </a>
    @endif

@endsection
@section('thead')
    <tr class="text-center">
        <th>#</th>
        <th>{{trans('language.id_number')}}</th>
        <th>{{trans('language.register_number')}}</th>
        <th>{{trans('language.mobile')}}</th>
        @if(Auth::user()->isAdmin())
            <th>{{trans('language.created_by')}}</th>
        @endif
        <th>{{trans('language.created_at')}}</th>
        <th>{{trans('language.order_details')}}</th>
        <th>{{trans('طباعه ملف المستفيد')}}</th>
        <th>{{trans('language.settings')}}</th>
    </tr>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->id_number}}</td>
            <td>{{$item->mobile}}</td>
            <td>{{$item->register_number}}</td>
            @if(Auth::user()->isAdmin())
                <td>{{@$item->createdBy->name ?? @$item->createdBy->user_name }}</td>
            @endif
            <td>{{($item->created_at) ? $item->created_at->format("d-m-Y") : null}}</td>
            <td>
                @if($item->orderData())
                    <a href="{{route("admin.order.details",@$item->orderData()->id)}}"
                       class="btn btn-success"> {{trans('language.details')}} </a>
                @else
                    <p>{{trans('language.no_data')}}</p>
                @endif
            </td>
            <td>

                @if($item->printed_by)
                    <a href="{{route("admin.users.print",$item->id)}}" class="btn btn-info"> {{trans('طباعة مجددا')}} </a>
                @else
                    <a href="{{route("admin.users.print",$item->id)}}" class="btn btn-success"> {{trans('طباعة')}} </a>
                @endif

            </td>
            <td>
                @includeIf("admin.components.buttons.edit" , ["href" => "users/$item->id/edit"])
            </td>
        </tr>
    @endforeach
@endsection

@section("filters")
    <form method="get" action="{{url("/admin/users")}}">

        <div style="display: flex">

            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-2">
                        <input type="text" class="form-control mobile_input mt-6" name="id_number"
                               value="{{request()->id_number}}"
                               placeholder="{{trans('language.id_number')}}">
                    </div>

                    <div class="col-md-2">
                        <input type="text" class="form-control email_input mt-6" name="register_number"
                               value="{{request()->register_number}}"
                               placeholder="{{trans('language.register_number')}}">
                    </div>

                    <div class="col-md-2">
                        <span> {{trans('حاله الطباعة')}} </span>
                        <select class="form-control sorter select2 " name="print_status">
                            <option @if(request()->print_status == 0 ) selected @endif value="0"> الكل</option>
                            <option @if(request()->print_status == 1 ) selected @endif  value="1"> مطبوع</option>
                            <option @if(request()->print_status == 2 ) selected @endif  value="2"> غير مطبوع</option>
                        </select>
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


