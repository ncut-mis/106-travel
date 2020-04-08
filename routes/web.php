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
Route::get('/schedule', 'ScheduleController@update');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/travel', 'TravelController@destroy')->name('travel.destroy');

//測試
Route::get('/travel','TravelController@index');

//導遊編輯基本資料
Route::get('/guide', 'GuideController@edit');

//導遊編輯專長景點
Route::get('/attractions', 'AttractionController@index');
Route::get('/attraction', 'AttractionController@create');
Route::post('/attraction', 'AttractionController@store');
Route::delete('/attraction/{attraction}', 'AttractionController@destroy');
