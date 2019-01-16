<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    {{--Tabulator--}}
    <link href="https://unpkg.com/tabulator-tables@4.1.4/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.1.4/dist/js/tabulator.min.js"></script>

    <script type="text/javascript" src="http://oss.sheetjs.com/js-xlsx/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.2/jspdf.plugin.autotable.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="{{ action('Admin\Dashboard\DashboardController@dashboard') }}">{{ __('lang.dashboard') }}</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-settings"></i>
                            <p>{{ __('lang.products') }} & {{ __('lang.services') }}</p>
                            <b class="fa fa-caret-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('Admin\ProductCategory\ProductCategoryController@index') }}">{{ __('lang.category') }}</a></li>
                            <li>
                                <a href="{{ action('Admin\Product\ProductController@index') }}" class="dropdown-toggle" data-toggle="sub-dropdown">{{ __('lang.products') }}</a>
                            </li>
                            <li><a href="{{ action('Admin\Service\ServiceController@index') }}">{{ __('lang.services') }}</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-home"></i>
                            <p>{{ __('lang.properties') }}</p>
                            <b class="fa fa-caret-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('Admin\Property\PropertyController@index') }}">{{ __('lang.properties') }}</a></li>
                            <li><a href="{{ action('Admin\Property\PropertyTypeController@index') }}">{{ __('lang.property_type') }}</a></li>
                            <li><a href="{{ action('Admin\Building\BuildingController@index') }}">{{ __('lang.building') }}</a></li>
                            <li><a href="{{ action('Admin\Room\RoomController@index') }}">{{ __('lang.room') }}</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-list"></i>
                            <p>{{ __('lang.tenant') }}</p>
                            <b class="fa fa-caret-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('Admin\Tenant\TenantController@index') }}">{{ __('lang.tenant') }}</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-receipt"></i>
                            <p>{{ __('lang.invoice') }} & {{__('lang.report')}}</p>
                            <b class="fa fa-caret-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('Admin\RoomRental\RoomRentalController@index') }}">{{ __('lang.invoice') }}</a></li>
                            <li><a href="{{ action('Admin\Invoice\InvoiceReportController@index') }}">{{ __('lang.invoice_report') }}</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-settings"></i>
                            <p>{{ __('lang.admin_area') }}</p>
                            <b class="fa fa-caret-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('Admin\Floor\FloorController@index') }}">{{ __('lang.floor') }}</a></li>
                            <li><a href="{{ action('Admin\Currency\CurrencyController@index') }}">{{ __('lang.currency') }}</a></li>
                            <li><a href="{{ action('Admin\User\UserController@index') }}">{{ __('lang.user') }}</a></li>
                            <li><a href="{{ action('Admin\Group\GroupController@index') }}">{{ __('lang.group') }}</a></li>
                            <li><a href="{{ action('Admin\Permission\PermissionController@index') }}">{{ __('lang.permission') }}</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                            <p>{{ __('lang.notification') }}</p>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Notification 1</a></li>
                            <li><a href="#">Notification 2</a></li>
                            <li><a href="#">Notification 3</a></li>
                            <li><a href="#">Notification 4</a></li>
                            <li><a href="#">Another notification</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-user"></i>
                            <p>Phearaeun</p>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">{{ __('lang.profile') }}</a></li>
                            <li><a href="#">{{ __('lang.sign_out') }}</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @yield('content')
    </div>

    @yield('script')
</div>
</body>
</html>
