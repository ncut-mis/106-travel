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
Route::post('/index', 'IndexController@update')->name('store');
Route::get('/schedule', 'ScheduleController@update');

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
Route::get('attractions/create', 'AttractionController@create')->name('attractions.create');
//導遊儲存專長景點
Route::post('attractions/store', 'AttractionController@store')->name('attractions.store');
//秀出指定的專長景點
Route::get('attractions/{id}', 'AttractionController@show')->name('attractions.show');
//導遊修改專長景點
Route::get('attractions/{id}/edit', 'AttractionController@edit')->name('attractions.edit');
//導遊儲存修改好的專長景點
Route::patch('attractions/{id}', 'AttractionController@update')->name('attractions.update');
//導遊暫停專長景點
Route::get('attractions/stop/{id}', 'AttractionController@stop')->name('attractions.stop');
//導遊啟用專長景點
Route::get('attractions/start', 'AttractionController@start')->name('attractions.start');
//導遊刪除專長景點
Route::delete('attractions/{id}', 'AttractionController@destroy')->name('attractions.destroy');
////導遊新增狀態
//Route::get('attractions/status', 'AttractionController@status')->name('attractions.status');
Route::get('attractions_open/{id}', 'AttractionController@open')->name('attractions.open');

