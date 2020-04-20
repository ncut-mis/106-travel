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
//會員修改基本資料
Route::get('/index', 'IndexController@index');
Route::post('/index', 'IndexController@update')->name('store');


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/travel', 'TravelController@destroy')->name('travel.destroy');

//測試
Route::get('/travel','TravelController@index');

//導遊顯示基本資料
Route::get('guide', 'GuideController@index');
//導遊修改基本資料
Route::post('guide', 'GuideController@edit')->name('edit');

//導遊目前所有專長景點
Route::get('attractions', 'AttractionController@index')->name('attractions.index');
//導遊新增專長景點

Route::get('/attractions', 'AttractionController@index');
Route::get('/attraction', 'AttractionController@create');
Route::post('/attraction', 'AttractionController@store');
Route::delete('/attraction/{attraction}', 'AttractionController@destroy');

//顯示所有會員行程規劃
Route::post('/schedules', 'ScheduleController@index')->name('schedules.index');
Route::get('/reschedules/{id}', 'ScheduleController@reindex')->name('schedules.reindex');
Route::get('travels/{id}', 'TravelController@show')->name('travels.show');
//會員新增行程
Route::get('schedules/create/{id}', 'ScheduleController@create')->name('schedules.create');
Route::post('schedules/store', 'ScheduleController@store')->name('schedules.store');
//會員編輯行程
Route::post('schedules/edit','ScheduleController@edit')->name('schedules.edit');
Route::post('schedules/update','ScheduleController@update')->name('schedules.update');
//會員刪除行程
Route::post('schedules/destroy','ScheduleController@destroy')->name('schedules.destroy');


//導遊新增專長景點
Route::get('attractions/create', 'AttractionController@create')->name('attractions.create');
//導遊儲存專長景點
Route::post('attractions/store', 'AttractionController@store')->name('attractions.store');
//秀出指定的專長景點
Route::get('attractions/{id}', 'AttractionController@show')->name('attractions.show');
//導遊修改專長景點
Route::get('attractions/{id}/edit', 'AttractionController@edit')->name('attractions.edit');
//導遊刪除專長景點
Route::delete('attractions/{attraction}', 'AttractionController@destroy');

