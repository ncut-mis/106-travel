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
use App\Http\Controllers\TravelController;

Route::auth();

Route::get('/', function () {
    return view('home');
});

//Route::get('index', ['as' => 'index',   'uses' => 'IndexController@index']);

Route::get('/index', 'IndexController@index');
Route::post('/index', 'IndexController@update')->name('store');
Route::get('/schedule', 'ScheduleController@update');

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/travel', 'TravelController@destroy')->name('travel.destroy');

//測試
Route::get('/travel','TravelController@index')->name('travel');

//新增旅遊計畫
Route::post('travel/store','TravelController@store')->name('travel.store');
//刪除旅遊計畫
//Route::delete('/travel/destroy' , ['as' => 'travel.destroy' , 'uses' => 'TravelController@destroy']);
Route::post('/travel/destroy' , ['as' => 'travel.destroy' , 'uses' => 'TravelController@destroy']);

//Route::delete('travel/destroy', 'TravelController@destroy')->name('travel.destroy');

//修改旅遊計畫
Route::post('travel/edit',['as'=>'travel.edit','uses'=>'TravelController@edit']);



//導遊顯示基本資料
Route::get('/guide', 'GuideController@index');
//導遊修改基本資料
Route::post('/guide', 'GuideController@edit')->name('store');

//導遊顯示自己所有專長景點
Route::get('/attractions', 'AttractionController@index');

Route::get('/attraction', 'AttractionController@create');
Route::post('/attraction', 'AttractionController@store');
Route::delete('/attraction/{attraction}', 'AttractionController@destroy');

