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
    Route::get('/', function () {
       return 'Admin';
    });

    Route::get('user', function () {
       return 'User';
    });

    Route::get('user/{id}', function ($id) {
        return 'User: ' . $id;
    });

    // Relationship Example
    Route::get('/property', function () {
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
    });
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