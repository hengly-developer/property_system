@extends('layouts.admin')
@section('title', __('lang.edit_property_type'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.edit_property_type') }}</h5>
                    </div>
                    <form action="{{ action('Admin\Property\PropertyTypeController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <br><br><br>
                            <input type="hidden" name="id" value="{{ $type->id }}">
                            <input type="hidden" name="_edit" value="1">
                            <label for="name">{{ __('lang.title') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}"/>
                            <p>
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </p>
                            <br>
                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $type->description }}</textarea>
                        </div>
                        <div class="panel-footer text-right">
                            <a href="{{ action('Admin\Property\PropertyTypeController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                            <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                            <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection