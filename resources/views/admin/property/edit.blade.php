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
                    <form action="{{ action('Admin\Property\PropertyController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <br><br><br>
                            <input type="hidden" name="id" value="{{ $property->id }}">
                            <input type="hidden" name="_edit" value="1">
                            <label for="name">{{ __('lang.title') }} <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $property->name }}" required />
                            <p>
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </p>
                            <br>

                            <select name="property_type_id" id="property-type" class="form-control" required>
                                @if (count($types) > 0)
                                    <option value="">{{ __('lang.select') }}</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @if ($property->property_type_id == $type->id) selected="selected" @endif>{{ $type->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <p>
                                <small class="text-danger">{{ $errors->first('property_type_id') }}</small>
                            </p>
                            <br>

                            <label for="lat">{{ __('lang.lat') }}:</label> <input type="number" step="any" class="form-control form-control-short" id="lat" name="lat" value="{{ $property->getGPSPart($property->gps)[0] }}" />
                            <label for="lng">{{ __('lang.lng') }}:</label> <input type="number" step="any" id="lng" name="lng" class="form-control form-control-short" value="{{ $property->getGPSPart($property->gps)[1] }}"/>
                            <br><br>

                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $property->description }}</textarea>
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