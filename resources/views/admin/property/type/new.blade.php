@extends('layouts.admin')
@section('title', __('lang.new_property_type'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.new_property_type') }}</h5>
                    </div>
                    <div class="panel-body">
                        <form action="{{ action('Admin\Property\PropertyTypeController@save') }}">
                            {{ csrf_field() }}
                            <label for="name">{{ __('lang.title') }}</label>
                            <input type="text" class="form-control" required /><br>
                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </form>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ action('Admin\Property\PropertyTypeController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                        <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                        <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection