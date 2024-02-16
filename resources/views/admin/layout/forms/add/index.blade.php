@extends('admin.layout.index')
@section('content')
    <br><br>
    <div style="margin: 0 auto;" class="col-lg-12 table-container">
        @yield('nav')
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield("title")</h4>

                @if (Session::has('success'))
                    <div class="alert alert-info">{{ Session::get('success') }}</div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif

                @if (Session::has('danger'))
                    <div class="alert alert-danger"
                         style="font-weight: bold"> {{ Session::get('danger') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form p-t-20" enctype="multipart/form-data"
                      method="post" action="{{url("admin/")}}/@yield("action")">
                    @csrf
                    @yield("form-groups")
                    <button type="submit"
                            class="btn btn-success col-md-1 waves-effect waves-light m-r-10">@yield("submit-button-title")</button>
                </form>
            </div>
        </div>
    </div>
@endsection
