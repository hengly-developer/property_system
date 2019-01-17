@extends('layouts.admin')
@section('title', __('lang.new_property'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.new_property') }}</h5>
                    </div>
                    <form action="{{ action('Admin\Property\PropertyController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <br><br><br>
                            <label for="name">{{ __('lang.title') }} <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" required/>
                            <p>
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </p>
                            <br>

                            <label for="property-type">{{ __('lang.property_type') }} <span class="text-danger">*</span></label>
                            <select name="property_type_id" id="property-type" class="form-control" required>
                            @if (count($types) > 0)
                                    <option value="">{{ __('lang.select') }}</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            @endif
                            </select>
                            <p>
                                <small class="text-danger">{{ $errors->first('property_type_id') }}</small>
                            </p>
                            <br>

                            <label for="lat">{{ __('lang.lat') }}:</label> <input type="number" step="any" class="form-control form-control-short" id="lat" name="lat" />
                            <label for="lng">{{ __('lang.lng') }}:</label> <input type="number" step="any" id="lng" name="lng" class="form-control form-control-short" />
                            <br><br>

                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
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