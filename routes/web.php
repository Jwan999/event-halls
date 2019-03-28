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

Route::get('redirect/google', 'Auth\LoginController@redirectToProvider')
    ->name('login');
Route::get('google/callback', 'Auth\LoginController@handleProviderCallback')
    ->name('login.callback');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name("login");
Route::post('/admin/login', 'Admin\LoginController@login');
Route::get('/admin/logout', 'Admin\LoginController@logout');

Route::group(["prefix" => "/dashboard",], function () {
    Route::get('/', 'DashboardController@openDashboard')->middleware('auth:admin');
    Route::get('bookings', 'BookController@index');

    Route::get('/places', 'PlaceController@showAllPlaces')->middleware('auth:admin');
    Route::get('/places/place/{id}', 'PlaceController@placeView')->middleware('auth:admin');
    Route::delete('/places/{place}', 'PlaceController@delete')->middleware('auth:admin');
    Route::get('/places/{place}/edit', 'PlaceController@editView')->middleware('auth:admin');
    Route::patch('/places/{place}/edit', 'PlaceController@edit')->middleware('auth:admin');
    Route::post('/places/add/{owner}', 'PlaceController@addPlace')->middleware('auth:admin');
    Route::get('/places/add/{owner}', 'PlaceController@showAddPlace')->middleware('auth:admin');
//    {user}
    Route::get('/owners/add', 'OwnerController@showAddOwnerView')->middleware('auth:admin');
    Route::get('/owners', 'OwnerController@ownersView')->middleware('auth:admin');
    Route::post('/owners/add', 'OwnerController@addOwner')->middleware('auth:admin');

    Route::post('/types/add', 'TypeController@addPlaceType')->middleware('auth:admin');
    Route::get('/types', 'TypeController@typesView')->middleware('auth:admin');
    Route::delete('/types/{type}', 'TypeController@delete')->middleware('auth:admin');

    Route::get('/users', 'UserController@index')->middleware('auth:admin');
});

Route::group(["prefix" => "/api"], function () {
    Route::get('/owners', 'OwnerController@ownersJson');
    Route::get('/places', 'PlaceController@showAllPlacesJson');
    Route::get('/types', 'TypeController@showPlaceTypes');
    Route::get('/types/all', 'TypeController@showPlaceTypes');
    Route::get('/favorites', 'FavoriteController@getFavorites');
    Route::get('/places/place/{id}', 'PlaceController@placeViewJson');
    Route::get('/users', 'UserController@usersJson');
    Route::get('/admin', 'Admin\LoginController@adminJson');
});

Route::get('/', 'UserSiteController@mainPageView');
Route::get('/{id}', 'UserSiteController@mainPageView');
Route::get('/places/place/{id}', 'UserSiteController@placeView');

Route::group(["middleware" => "auth"], function () {
    Route::get('/places/add/{owner}', 'UserSiteController@addPlaceView');
    Route::post('/places/add/{owner}', 'PlaceController@savePlaceRedirectHome');

    Route::get('/owners/add', 'UserSiteController@showAddOwner');
    Route::post('/owners/add', 'OwnerController@addOwnerUserSite');

    Route::post('/favorite/{place}', 'PlaceController@favoritePlace');
    Route::post('/unfavorite/{place}', 'PlaceController@unFavoritePlace');
//    Route::get('/favorites', 'PlaceController');

//    Route::get('/book', '@index');
//    Route::get('bookings', 'BookController@index');

});

Route::group(["prefix" => "/book/place", "middleware" => "auth"], function () {
    Route::get('/', 'BookController@index');
    Route::post('/', 'BookController@store');
});


Route::group(["prefix" => "/favorites/user"], function () {
    Route::get('/', 'FavoriteController@getFavorites');
});

Route::group(["prefix" => "/cv/jwana"], function () {
    Route::get('/', function () {
        return view('cv');
    });
});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::group(['middleware' => 'auth'], function () {
//	Route::resource('user', 'UserController', ['except' => ['show']]);
//	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
//	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
//	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
//});

