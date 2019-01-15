@extends('layouts.admin')
@section('title', __('lang.edit_property'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.edit_property') }}</h5>
                    </div>
                    <form action="{{ action('Admin\Property\PropertyTypeController@save') }}">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <label for="name">{{ __('lang.title') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required /><br>
                            <label for="property-type">{{ __('lang.property_type') }}</label>
                            <select name="" id="" class="form-control"></select> <br>
                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="panel-footer text-right">
                            <a href="{{ action('Admin\Property\PropertyController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                            <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                            <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection