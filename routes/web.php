<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** BackEnd */
Route::prefix('admin')->group(function() {
    /** Dashboard */
    Route::get('/', 'Admin\Dashboard\DashboardController@dashboard');

    /** Property  */
    Route::get('/property', 'Admin\Property\PropertyController@index');

    /** Property Type */
    Route::get('/property/type', 'Admin\Property\PropertyTypeController@index');
    Route::get('/property/type/new', 'Admin\Property\PropertyTypeController@add');
    Route::get('/property/type/edit/{id}', 'Admin\Property\PropertyTypeController@edit');
    Route::post('/property/type', 'Admin\Property\PropertyTypeController@save');
    Route::get('/property/type/list', 'Admin\Property\PropertyTypeController@getList');
    Route::post('/property/type/deactivate', 'Admin\Property\PropertyTypeController@deactivate');


    Route::get('/property/new', 'Admin\Property\PropertyController@add');
    Route::get('/property/edit/{id}', 'Admin\Property\PropertyController@edit');
    Route::get('/property/list', 'Admin\Property\PropertyController@getList');
    Route::post('/property', 'Admin\Property\PropertyController@save');
    Route::post('/property/deactivate', 'Admin\Property\PropertyController@deactivate');

    /** Building */
    Route::get('/property/building', 'Admin\Building\BuildingController@index');
    Route::get('/property/building/new', 'Admin\Building\BuildingController@add');
    Route::get('/property/building/edit/{id}', 'Admin\Building\BuildingController@edit');
    Route::post('/property/building', 'Admin\Building\BuildingController@save');

    /** Room */
    Route::get('/property/building/room', 'Admin\Room\RoomController@index');
    Route::get('/property/building/room/new', 'Admin\Room\RoomController@add');
    Route::get('/property/building/room/edit/{id}', 'Admin\Room\RoomController@edit');
    Route::post('/property/building/room', 'Admin\Room\RoomController@save');


    /** Product rental */
    Route::get('/property/building/room/product/rental', 'Admin\ProductRental\ProductRentalController@index');
    Route::get('/property/building/room/product/rental/new', 'Admin\ProductRental\ProductRentalController@add');
    Route::get('/property/building/room/product/rental/edit/{id}', 'Admin\ProductRental\ProductRentalController@edit');
    Route::post('/property/building/room/product/rental', 'Admin\ProductRental\ProductRentalController@save');

    /** Service Rental */
    Route::get('/property/building/room/service/rental', 'Admin\ServiceRental\ServiceRentalController@index');
    Route::get('/property/building/room/service/rental/new', 'Admin\ServiceRental\ServiceRentalController@add');
    Route::get('/property/building/room/service/rental/edit/{id}', 'Admin\ServiceRental\ServiceRentalController@edit');
    Route::post('/property/building/room/service/rental', 'Admin\ServiceRental\ServiceRentalController@save');

    /** Floor */
    Route::get('/floor', 'Admin\Floor\FloorController@index');
    Route::get('/floor/new', 'Admin\Floor\FloorController@add');
    Route::post('/floor', 'Admin\Floor\FloorController@save');

    /** Category */
    Route::get('/category', 'Admin\ProductCategory\ProductCategoryController@index');
    Route::get('/category/new', 'Admin\ProductCategory\ProductCategoryController@add');
    Route::get('/category/edit/{id}', 'Admin\ProductCategory\ProductCategoryController@edit');
    Route::post('/category', 'Admin\ProductCategory\ProductCategoryController@save');

    /** Product */
    Route::get('/product', 'Admin\Product\ProductController@index');
    Route::get('/product/new', 'Admin\Product\ProductController@add');
    Route::get('/product/edit/{id}', 'Admin\Product\ProductController@edit');
    Route::post('/product', 'Admin\Product\ProductController@save');

    /** Service */
    Route::get('/service', 'Admin\Service\ServiceController@index');
    Route::get('/service/new', 'Admin\Service\ServiceController@add');
    Route::get('/service/edit/{id}', 'Admin\Service\ServiceController@edit');
    Route::post('/service', 'Admin\Service\ServiceController@save');

    /** Tenant */
    Route::get('/tenant', 'Admin\Tenant\TenantController@index');
    Route::get('/tenant/new', 'Admin\Tenant\TenantController@add');
    Route::get('/tenant/edit/{id}', 'Admin\Tenant\TenantController@edit');
    Route::post('/tenant', 'Admin\Tenant\TenantController@save');

    /** Currency */
    Route::get('/currency', 'Admin\Currency\CurrencyController@index');
    Route::get('/currency/new', 'Admin\Currency\CurrencyController@add');
    Route::get('/currency/edit/{id}', 'Admin\Currency\CurrencyController@edit');
    Route::post('/currency', 'Admin\Currency\CurrencyController@save');

    /** Invoice */
    Route::get('/invoice', 'Admin\RoomRental\RoomRentalController@index');
    Route::get('/invoice/new', 'Admin\RoomRental\RoomRentalController@add');
    Route::get('/invoice/edit/{id}', 'Admin\RoomRental\RoomRentalController@edit');
    Route::post('/invoice', 'Admin\RoomRental\RoomRentalController@save');

    /** Invoice Report */
    Route::get('/report/invoice', 'Admin\Invoice\InvoiceReportController@index');

    /** User */
    Route::get('/user', 'Admin\User\UserController@index');

    /** Group */
    Route::get('/group', 'Admin\Group\GroupController@index');

    /** Permission */
    Route::get('/permission', 'Admin\Permission\PermissionController@index');


    // Relationship Example
    /*Route::get('/property', function () {
        $buildings = \App\Models\Building\Building::all();

        foreach ($buildings as $building) {
            echo $building->name . ' has property as -> ' . $building->property->name . ' -> has type as ' . $building->property->propertyType->name;
            echo '<br>';
        }

        $properties = \App\Models\Property\Property::all();

        foreach ($properties as $property) {
            echo $property->name;
            echo '->';
            echo $property->propertyType->name;
            echo '<br>';
        }
    });*/
});


/** FrontEnd */
Route::prefix('')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});


Route::fallback(function () {
   return 'Fallback Route';
});