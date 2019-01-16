@extends('layouts.admin')
@section('title', __('lang.new_currency'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.new_currency') }}</h5>
                    </div>
                    <form action="{{ action('Admin\Currency\CurrencyController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <br><br><br>
                            <label for="title">{{ __('lang.title') }} <span class="text-danger">*</span></label>
                            <input type="text" id="title" name="title" class="form-control" required /><br>

                            <label for="short-code">{{ __('lang.short_code') }}</label>
                            <input type="text" id="short-code" name="short-code" class="form-control" />

                            <br>
                            <label for="rate">{{ __('lang.rate') }}</label>
                            <input type="number" id="rate" name="rate" class="form-control" />
                        </div>
                        <div class="panel-footer text-right">
                            <a href="{{ action('Admin\Currency\CurrencyController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                            <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                            <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection