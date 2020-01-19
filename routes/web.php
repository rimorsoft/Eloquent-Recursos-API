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

Route::get('/', 'PageController@index');

Route::group(['prefix' => 'api'], function () {

	//Route::apiResource('posts', 'Api\PostController');

	Route::apiResource('posts', 'Api\PostController')
		->names([
			'index'   => 'api.posts.index',
			'show'    => 'api.posts.show',
		])
		->only(['index', 'show']);

	Route::apiResource('posts', 'Api\PostController')
		->middleware('auth')
		->names([
			'store'   => 'api.posts.store',
			'update'  => 'api.posts.update',
			'destroy' => 'api.posts.destroy',
		])
		->only(['store', 'update', 'destroy']);

});

Auth::routes();

Route::middleware('auth')
	->resource('posts', 'Backend\PostController')
	->only(['index', 'create', 'edit']);

Route::get('/home', 'Backend\HomeController@index')->name('home');
