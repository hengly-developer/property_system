@extends('layouts.admin')
@section('title', __('lang.new_room'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.new_room') }}</h5>
                    </div>
                    <form action="{{ action('Admin\Room\RoomController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <br><br><br>
                            <label for="floor-number">{{ __('lang.generate_floor') }} </label>

                            <label for="from">{{ __('lang.from') }}: </label>
                            <input type="number" id="from" class="form-control form-control-short" />

                            <label for="to">{{ __('lang.to') }}: </label>
                            <input type="number" id="to" class="form-control form-control-short" />
                        </div>
                        <div class="panel-footer text-right">
                            <a href="{{ action('Admin\Floor\FloorController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                            <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                            <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection