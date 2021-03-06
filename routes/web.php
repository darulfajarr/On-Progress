<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/chat', 'GuestsController@chat');
Route::get('/', 'GuestsController@index');

// Route::get('login', 'AdminController@error');
Route::get('/home', 'AdminController@index');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
//route halaman admin
	Route::resource('About', 'AboutController');
	Route::resource('kategori', 'KategoriController');
	Route::resource('Product', 'ProductController');
	Route::resource('Home', 'HommeController');
	Route::resource('Store', 'StoreController');
	Route::resource('Lainnya', 'LainnyaController');
		Route::resource('discont', 'DiscontController');
		Route::resource('artikel', 'ArtikelContoller');
});
//route halaman user
Route::resource('about', 'GuestsController@about');
Route::resource('products', 'GuestsController@products');
Route::resource('store', 'GuestsController@store');
Route::resource('admin', 'GuestsController@admin');
Route::resource('news', 'GuestsController@news');
Route::resource('artikells', 'GuestsController@artikells');
Route::get('/artikels/{artikel}', 'GuestsController@show');
Route::get('/model/{kategori}', array('as' => 'showperkategori', 'uses' =>'GuestsController@showperkategori'));