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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::group(['middleware' => 'admin', 'prefix' => 'app'], function () {
    Route::auth();
    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('dashboard', 'AppController@dashboard');
    Route::get('/', 'AppController@redirect');
    CRUD::resource('maker', 'Admin\ProfileMakerCrudController');
    CRUD::resource('retailer', 'Admin\ProfileRetailerCrudController');
    CRUD::resource('category', 'Admin\CategoryCrudController');
    CRUD::resource('product', 'Admin\ProductCrudController');
    CRUD::resource('rental', 'Admin\RentalCrudController');
    CRUD::resource('space', 'Admin\SpaceCrudController');
    CRUD::resource('space-type', 'Admin\SpaceTypeCrudController');
});

