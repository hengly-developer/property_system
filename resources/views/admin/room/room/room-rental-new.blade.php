@extends('layouts.admin')
@section('title', __('lang.new_room_rental'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.new_room_rental') }}</h5>
                    </div>
                    <form action="{{ action('Admin\RoomRental\RoomRentalController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <br><br><br>

                            <label for="property">{{ __('lang.property') }}</label>
                            <select name="property" id="property" class="form-control"></select> <br>

                            <label for="building">{{ __('lang.building') }}</label>
                            <select name="building" id="building" class="form-control"></select> <br>

                            <label for="room">{{ __('lang.room') }} <span class="text-danger">*</span></label>
                            <select name="room" id="room" class="form-control"></select> <br>

                            <label for="tenant">{{ __('lang.tenant') }}</label>
                            <select name="tenant" id="tenant" class="form-control">{{ __('lang.select') }}</select><br>

                            <input type="button" class="btn btn-sm btn-primary" value="{{ __('lang.products') }}" />
                            <input type="button" class="btn btn-sm btn-primary" value="{{ __('lang.services') }}" />

                            <br><br>

                            <label for="start-date">{{ __('lang.start_date') }}: </label>
                            <input type="date" id="start-date" name="start-date" class="form-control form-control-short">

                            <label for="end-date">{{ __('lang.end_date') }}: </label>
                            <input type="date" id="end-date" name="end-date" class="form-control form-control-short">

                            <label for="duration">{{ __('lang.duration') }}: </label>
                            <input type="text"  id="duration" name="duration" class="form-control form-control-short" />

                            <br><br>


                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="panel-footer text-right">
                            <a href="{{ action('Admin\Room\RoomController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                            <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                            <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection