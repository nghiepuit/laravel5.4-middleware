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
    return view('welcome');
});

Route::get('/index','PostController@index')->name('index');

Route::get('/signup','UserController@getSignup')->name('getSignup');
Route::post('/signup','UserController@postSignup')->name('postSignup');

Route::get('/login','UserController@getLogin')->name('getLogin');
Route::post('/login','UserController@postLogin')->name('postLogin');

Route::group(['prefix' => 'admin','middleware' => 'checkLogin'],function(){
	Route::get('/list','PostController@list')->name('list');
	Route::get('/add','PostController@create')->name('create');
	Route::post('/add','PostController@add')->name('add');
	Route::get('/update/{id}','PostController@edit')->name('edit');
	Route::post('/update/{id}','PostController@update')->name('update');
	Route::get('/delete/{id}','PostController@delete')->name('delete');
	Route::get('/detail/{id}','PostController@detail')->name('detail');
	Route::get('/ajax/{skip}','AjaxController@getDataIndex')->name('getDataIndex');
	Route::post('/comment','AjaxController@addComment')->name('addComment');
	Route::get('/logout','UserController@logout')->name('logout');
});	
