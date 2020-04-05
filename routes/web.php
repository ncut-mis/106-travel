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
//認證登入
Route::auth();

Route::get('/', function () {
    return view('home');
});

//Route::get('index', ['as' => 'index',   'uses' => 'IndexController@index']);

Route::get('/index', 'IndexController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home1');

//測試
Route::get('/travel','TravelController@index');
