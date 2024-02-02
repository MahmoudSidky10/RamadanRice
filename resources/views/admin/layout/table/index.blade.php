@extends('admin.layout.index')
@section('content')
    <div class="col-12">
        <div class="col-md-12">
            <br><br>
            @yield('nav')
            @yield('buttons')
            <div class="row mt-4">
                @yield('statistics')
            </div>
        </div>
        <div class="card animated headShake  ">
            <div class="card-body ">
                @yield('filters')
                <br>
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table  m-t-30 table-hover contact-list  "
                           data-page-size="10">
                        <thead style="font-weight: bold;">
                        @yield('thead')
                        </thead>
                        <tbody>
                        @yield('tbody')
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="100">
                                <div>
                                    <div style="display: flex; justify-content: center;" class="text-center">
                                        {{$items->appends(request()->input())->links()}}
                                    </div>
                                    <div style="display: flex; justify-content: center;" class="text-center">
                                        {{ __('language.showing') }} {{ ($items->currentPage()-1) * $items->perPage() + ($items->total() ? 1:0 ) }} {{ __('language.to') }} {{ ($items->currentPage()-1) * $items->perPage() + count($items) }} {{ __('language.of') }} {{ $items->total() }} {{ __('language.results') }}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                    @yield('submit')
                </div>
            </div>
        </div>
    </div>
    @yield("modals")
@endsection
