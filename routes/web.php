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


Route::get('/search', 'SearchController@index');

Route::get('/', 'HotelsController@index');

Auth::routes();

Route::get('/{lang?}', function ($lang=null) {

	App::setlocale($lang);

	return view('welcome');
});



Route::resource('hotels', 'HotelsController');
Route::resource('rooms', 'RoomsController');
Route::resource('facilities', 'FacilitiesController');
Route::resource('galleries', 'GalleriesController');
Route::resource('reviews', 'ReviewsController');
Route::resource('users', 'UsersController');
