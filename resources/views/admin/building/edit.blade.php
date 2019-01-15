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
                    <form action="{{ action('Admin\Building\BuildingController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <label for="name">{{ __('lang.title') }} <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" required /><br>
                            <label for="property">{{ __('lang.property') }}</label>
                            <select name="property" id="" class="form-control"></select> <br>
                            <label for="land-size">{{ __('lang.land_size') }}</label>
                            <input type="text" id="land-size" name="land-size" class="form-control"><br>
                            <label for="building-size">{{ __('lang.building_size') }}</label>
                            <input type="text" id="building-size" name="building-size" class="form-control"><br>
                            <label for="gps">{{ __('lang.gps') }}</label>
                            <input type="text" id="gps" name="gps" class="form-control" /><br>
                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="panel-footer text-right">
                            <a href="{{ action('Admin\Building\BuildingController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                            <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                            <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection