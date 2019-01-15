<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

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
                <a class="navbar-brand" href="#">{{ __('lang.dashboard') }}</a>
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
                            <li><a href="{{ action('Admin\Property\PropertyController@property') }}">{{ __('lang.properties') }}</a></li>
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
                            <li><a href="">{{ __('lang.active_tenant') }}</a></li>
                            <li><a href="">{{ __('lang.terminate_tenant') }}</a></li>
                            <li><a href="">{{ __('lang.room_rental') }}</a></li>
                            <li><a href="">{{ __('lang.room_product_rental') }}</a></li>
                            <li><a href="">{{ __('lang.room_service_rental') }}</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-receipt"></i>
                            <p>{{ __('lang.invoice') }} & {{__('lang.report')}}</p>
                            <b class="fa fa-caret-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">{{ __('lang.invoice') }}</a></li>
                            <li><a href="">{{ __('lang.invoice_report') }}</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-settings"></i>
                            <p>{{ __('lang.admin_area') }}</p>
                            <b class="fa fa-caret-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">{{ __('lang.currency') }}</a></li>
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
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul>

                    <li>
                        <a href="http://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
            </div>
        </div>
    </footer>
    @yield('script')
</div>
</body>
</html>
