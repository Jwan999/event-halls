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
Route::get('auth/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('redirect', 'Auth\LoginController@redirectToProvider');
Route::get('auth/google', 'Auth\LoginController@handleProviderCallback');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name("login");
Route::post('/admin/login', 'Admin\LoginController@login');
Route::get('/admin/logout', 'Admin\LoginController@logout');

Route::group(["middleware" => "auth:admin", "prefix" => "/dashboard",], function () {
    Route::get('/', 'DashboardController@openDashboard');

    Route::get('/places', 'PlaceController@showAllPlaces');
    Route::get('/places/add', 'PlaceController@showAddPlace');
    Route::get('/places/place/{id}', 'PlaceController@placeView');
    Route::delete('/places/{place}', 'PlaceController@delete');
    Route::get('/places/{place}', 'PlaceController@editView');
    Route::patch('/places/{place}/edit', 'PlaceController@edit');

    Route::get('/owners/add', 'OwnerController@showAddOwnerView');
    Route::get('/owners', 'OwnerController@ownersView');

    Route::post('/types/add', 'TypeController@addPlaceType');
    Route::get('/types', 'TypeController@typesView');
    Route::delete('/types/{type}', 'TypeController@delete');

    Route::get('/users', 'UserController@index');

});


Route::group(["prefix" => "/api"], function () {
    Route::get('/owners', 'OwnerController@ownersJson');
    Route::get('/places', 'PlaceController@showAllPlacesJson');
    Route::get('/types', 'TypeController@showPlaceTypes');
    Route::get('/types/all', 'TypeController@showPlaceTypes');

    Route::get('/places/place/{id}', 'PlaceController@placeViewJson');
    Route::get('/users', 'UserController@usersJson');
    Route::get('/admin', 'Admin\LoginController@adminJson');
});

Route::get('/home', 'UserSiteController@mainPageView');
Route::get('/favorites', 'FavoriteController@index');
Route::get('/favorites/add', 'FavoriteController@store');

Route::get('/places/place/{id}', 'UserSiteController@placeView');
Route::get('/places/add', 'UserSiteController@addPlaceView');
Route::post('/places/add', 'PlaceController@addPlace');

Route::get('/owners/add', 'UserSiteController@showAddOwner');
Route::post('/owners/add', 'OwnerController@addOwner');

Route::get('/book', 'BookController@index');

//Route::post('/book','BookController@index');
//Auth::routes();

