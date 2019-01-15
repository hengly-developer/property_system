@extends('layouts.admin')
@section('title', __('lang.property_type'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="col-md-12 panel-heading">
                        <h5 class="pull-left">{{ __('lang.property_type') }}</h5>
                        <h5 class="pull-right">
                            <a href="" class="btn btn-danger btn-sm">{{ __('lang.disable_selected') }}</a>
                            <a href="" class="btn btn-danger btn-sm">{{ __('lang.remove_selected') }}</a>
                            <a href="{{ action('Admin\Property\PropertyTypeController@add') }}" class="btn btn-primary btn-sm">{{ __('lang.add_new') }}</a>
                        </h5>

                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        Body content
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection