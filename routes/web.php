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
    Route::get('/property', 'Admin\Property\PropertyController@property');

    /** Property Type */
    Route::get('/property/type', 'Admin\Property\PropertyTypeController@index');

    /** Building */
    Route::get('/property/building', 'Admin\Building\BuildingController@index');

    /** Room */
    Route::get('/property/building/room', 'Admin\Room\RoomController@index');

    /** Category */
    Route::get('/category', 'Admin\ProductCategory\ProductCategoryController@index');

    /** Product */
    Route::get('/product', 'Admin\Product\ProductController@index');

    /** Service */
    Route::get('/service', 'Admin\Service\ServiceController@index');

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