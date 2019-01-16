@extends('layouts.admin')
@section('title', __('lang.category'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.category') }}</h5>
                    </div>
                    <form action="{{ action('Admin\ProductCategory\ProductCategoryController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <br><br><br>
                            <label for="title">{{ __('lang.title') }} <span class="text-danger">*</span></label>
                            <input type="text" id="title" name="title" class="form-control" required /><br>

                            <label for="short-code">{{ __('lang.short_code') }}</label>
                            <input type="text" id="short-code" name="short-code" class="form-control" />

                            <br>
                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="panel-footer text-right">
                            <a href="{{ action('Admin\ProductCategory\ProductCategoryController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                            <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                            <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection