@extends('layouts.admin')
@section('title', __('lang.edit_room'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.edit_room') }}</h5>
                    </div>
                    <form action="{{ action('Admin\Room\RoomController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <label for="room-number">{{ __('lang.room_number') }} <span class="text-danger">*</span></label>
                            <input type="text" id="room-number" name="room-number" class="form-control" required /><br>
                            <label for="property">{{ __('lang.property') }}</label>
                            <select name="property" id="" class="form-control"></select> <br>
                            <label for="building">{{ __('lang.building') }}</label>
                            <select name="building" id="building" class="form-control"></select> <br>
                            <label for="room-size">{{ __('lang.room_size') }}</label>
                            <input type="text" id="room-size" name="room-size" class="form-control"><br>
                            <label for="floor">{{ __('lang.floor') }}</label>
                            <select name="floor" id="floor" class="form-control"></select> <br>
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