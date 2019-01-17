@extends('layouts.admin')
@section('title', __('lang.category'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="col-md-12 panel-heading">
                        <h5 class="pull-left">{{ __('lang.property') }}</h5>
                        <h5 class="pull-right">
                            @include('admin.patial.limiter')
                            <button type="button" id="download-pdf" class="btn btn-info btn-sm">{{ __('lang.download') }} PDF</button>
                            <button type="button" id="download-csv" class="btn btn-warning btn-sm">{{ __('lang.download') }} CSV</button>
                            <button type="button" id="select-all" class="btn btn-sm btn-default">Select all</button>
                            <button type="button" id="deactivate-selected" class="btn btn-sm btn-danger hidden">{{ __('lang.disable_selected') }}</button>
                            <a href="{{ action('Admin\Property\PropertyController@add') }}" class="btn btn-primary btn-sm">{{ __('lang.add_new') }}</a>
                        </h5>

                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body row">
                        <div id="property"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/property.js') }}"></script>
    <script type="text/javascript">
        var options = {
            token: '{{ csrf_token() }}',
            target: '#property',
            url: '/admin/property/list',
            deactivate_url: '/admin/property/deactivate',
            page_size: 5,
            columns: [
                {
                    formatter: 'rownum',
                    align: 'center',
                    width: 40,
                    sorter: 'number'
                },
                {
                    title: '{{ __('lang.property_type') }}',
                    field: 'property_type.name'
                },
                {
                    title: "{{ __('lang.name') }}",
                    field:"name",
                    headerFilter: true
                },
                {
                    title: '{{ __('lang.gps') }}',
                    field: 'gps',
                    headerFilter: true
                },
                {
                    title: "{{ __('lang.description') }}",
                    field:"description",
                    align:"right",
                    sorter:"string",
                    headerFilter: true
                },
                {
                    title: '{{ __('lang.date') }}',
                    field: 'created_at',
                    align: 'center',
                    visible: true
                },
                {
                    title: '{{ __('lang.edit') }}',
                    formatter: function (e) {
                        console.log(e.getData().id);
                        return '<a href="/admin/property/edit/' + e.getData().id + '"><i class="fa fa-pencil"></i></a>';
                    },
                    width: 50,
                    align: 'center',
                    headerSort: false
                }
            ]
        };

        showList(options);

        jQuery('#select-to-limit').on('change', function () {
            pageSize = jQuery(this).val();
            options.page_size = pageSize;

            showList(options);
        });

    </script>
@endsection