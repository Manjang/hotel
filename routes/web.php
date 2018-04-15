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

Route::resource('hotels', 'HotelsController');
Route::resource('rooms', 'RoomsController');
Route::resource('facilities', 'FacilitiesController');
Route::resource('galleries', 'GalleriesController');
Route::resource('reviews', 'ReviewsController');

Auth::routes();

Route::get('{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::middleware(['auth'])->group(function () {
	Route::resource('users', 'UsersController');

	Route::get('hotels/like/{id}', ['as' => 'hotel.like', 'uses' => 'LikeController@likeHotel']);

});

