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
                            {{ __('lang.show') }}: <select name="" id="select-to-limit" class="form-control form-control-short w-10">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20" selected="selected">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                            </select>
                            <button type="button" id="download-pdf" class="btn btn-info btn-sm">{{ __('lang.download') }} PDF</button>
                            <button type="button" id="download-csv" class="btn btn-warning btn-sm">{{ __('lang.download') }} CSV</button>
                            <button type="button" id="select-all" class="btn btn-sm btn-default">Select all</button>
                            <button type="button" id="deactivate-selected" class="btn btn-sm btn-danger hidden">{{ __('lang.disable_selected') }}</button>
                            <a href="{{ action('Admin\Property\PropertyController@add') }}" class="btn btn-primary btn-sm">{{ __('lang.add_new') }}</a>
                        </h5>

                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body row">
                        <div id="property-type"></div>
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
            target: '#property-type',
            url: '/admin/property/type/list',
            deactivate_url: '/admin/property/type/deactivate',
            page_size: 20,
        };

        showList(options);

        jQuery('#select-to-limit').on('change', function () {
            pageSize = jQuery(this).val();
            options.page_size = pageSize;

            showList(options);
        });

    </script>
@endsection