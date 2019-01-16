@extends('layouts.admin')
@section('title', __('lang.edit_tenant'))
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <div class="col-md-12 panel-heading">
                        <h5>{{ __('lang.edit_tenant') }}</h5>
                    </div>
                    <form action="{{ action('Admin\Tenant\TenantController@save') }}" method="POST">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <br><br><br><br>
                            <label for="name">{{ __('lang.name') }} <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control form-control-short w-25" required />
                            &nbsp;&nbsp;
                            <label for="photo">{{ __('lang.photo') }}</label>
                            <input type="file" name="photo" class="form-control form-control-short">
                            <br><br>

                            <label for="contact-number">{{ __('lang.contact_number') }}</label>
                            <input type="text" id="contact-number" name="contact-number" class="form-control" /> <br>

                            <label for="contact-email">{{ __('lang.contact_email') }}</label>
                            <input type="email" id="contact-email" name="contact-email" class="form-control" /> <br>

                            <label for="address">{{ __('lang.address') }}:</label><br>

                            <label for="city">{{ __('lang.city') }}</label>
                            <select name="city" id="city" class="form-control form-control-short">
                                <option value="">{{ __('lang.select') }}</option>
                            </select>

                            <label for="district">{{ __('lang.district') }}</label>
                            <select name="district" id="district" class="form-control form-control-short">
                                <option value="">{{ __('lang.select') }}</option>
                            </select>

                            <label for="commune">{{ __('lang.commune') }}</label>
                            <select name="commune" id="commune" class="form-control form-control-short">
                                <option value="">{{ __('lang.select') }}</option>
                            </select>

                            <label for="village">{{ __('lang.village') }}</label>
                            <select name="village" id="village" class="form-control form-control-short">
                                <option value="">{{ __('lang.select') }}</option>
                            </select> <br><br>

                            <label for="id-card">{{ __('lang.id_card') }}</label>
                            <input type="text" id="id-card" name="id-card" class="form-control"> <br>

                            <label for="attachment">{{ __('lang.attachment') }}</label>
                            <input type="file" name="attachment" id="attachment" class="form-control form-control-short" />
                            <br>

                            <label for="description">{{ __('lang.description') }}</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="panel-footer text-right">
                            <a href="{{ action('Admin\Tenant\TenantController@index') }}" class="btn btn-sm btn-danger">{{ __('lang.cancel') }}</a>
                            <input type="submit" value="{{ __('lang.save_and_close') }}" class="btn btn-sm btn-default" name="save_and_close">
                            <input type="submit" value="{{ __('lang.save') }}" class="btn btn-sm btn-primary" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection