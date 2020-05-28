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
use Illuminate\Support\Facades\Route;

Route::auth();

Route::get('/', function () {
    return view('home');
});

//Route::get('index', ['as' => 'index',   'uses' => 'IndexController@index']);
//會員修改基本資料
Route::get('/index', 'IndexController@index');
Route::post('/index', 'IndexController@update')->name('store');


Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/travel', 'TravelController@destroy')->name('travel.destroy');
//跳轉平台業者畫面
//Route::get('/thome','ThomeController@index')->name('thome');

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

//顯示所有會員行程規劃
Route::post('/schedules', 'ScheduleController@index')->name('schedules.index');
Route::get('/reschedules/{id}', 'ScheduleController@reindex')->name('schedules.reindex');
Route::get('travels/{id}', 'TravelController@show')->name('travels.show');
//會員新增行程
Route::get('schedules/create/{id}', 'ScheduleController@create')->name('schedules.create');
Route::post('schedules/store/{id}', 'ScheduleController@store')->name('schedules.store');
//會員編輯行程
Route::post('schedules/edit','ScheduleController@edit')->name('schedules.edit');
Route::post('schedules/update','ScheduleController@update')->name('schedules.update');
//會員刪除行程
Route::post('schedules/destroy','ScheduleController@destroy')->name('schedules.destroy');
//會員觀看進行中的旅遊規劃
Route::post('schedules/show','ScheduleController@show')->name('schedules.show');


//確認旅遊規劃
Route::post('confirm','ConfirmController@index')->name('confirm.index');
//會員取消旅遊規劃
Route::post('travel/cancel','TravelController@cancel')->name('travel.cancel');
//旅遊歷史記錄
Route::get('history','historyController@index')->name('history');
//旅遊歷史記錄查看行程
Route::post('history/show','historyController@show')->name('history.show');
//複製旅遊歷史記錄
Route::post('history/create','historyController@create')->name('history.create');
//確認旅遊規劃-付款
Route::post('confirm/edit','ConfirmController@edit')->name('confirm.edit');


//會員觀看導遊的詳細資料
Route::get('scheduleguides/{id}', 'ScheduleGuideController@show')->name('scheduleguides.show');
Route::post('scheduleguides/{id}', 'ScheduleGuideController@show')->name('scheduleguides.show');
//會員媒合導遊
Route::post('/scheduleguides', 'ScheduleGuideController@index')->name('scheduleguides.index');
Route::get('/scheduleguides', 'ScheduleGuideController@index')->name('scheduleguides.index');
//會員觀看所有媒合到的導遊之返回鈕
Route::post('schedules/reedit','ScheduleController@reedit')->name('schedules.reedit');
//會員觀看導遊的詳細資料之返回鈕
Route::post('/rescheduleguides/index2', 'ScheduleGuideController@index2')->name('scheduleguides.index2');
//會員按下媒合導遊鈕
Route::post('/rescheduleguides', 'ScheduleGuideController@reindex')->name('scheduleguides.reindex');
//會員取消媒合導遊
Route::post('schedules/matchcancel', 'ScheduleController@matchcancel')->name('schedules.matchcancel');

//會員觀看進行中的專長景點
Route::post('schedules/attraction','ScheduleController@attraction')->name('schedules.attraction');

//導遊目前所有專長景點
Route::get('attractions', 'AttractionController@index')->name('attractions.index');
//導遊新增專長景點
Route::get('attractions/create', 'AttractionController@create')->name('attractions.create');
//導遊儲存專長景點
Route::post('attractions/store', 'AttractionController@store')->name('attractions.store');
//秀出指定的專長景點
Route::get('attractions/{attraction}', 'AttractionController@show')->name('attractions.show');
//導遊修改專長景點
Route::get('attractions/{attraction}/edit', 'AttractionController@edit')->name('attractions.edit');
//導遊儲存修改好的專長景點
Route::patch('attractions/{attraction}', 'AttractionController@update')->name('attractions.update');
//導遊暫停專長景點
Route::get('attractions/stop/{id}', 'AttractionController@stop')->name('attractions.stop');
//導遊啟用專長景點
Route::get('attractions_open/{id}', 'AttractionController@open')->name('attractions.open');
//導遊刪除專長景點
Route::delete('attractions/{attraction}', 'AttractionController@destroy')->name('attractions.destroy');

//導遊顯示基本資料
Route::get('guide', 'GuideController@index');
//上傳導遊資料頁面
Route::get('upload/index','UploadController@index')->name('upload.index');
Route::Post('upload/index','UploadController@index')->name('upload.index');
//上傳帶團經驗頁面
Route::get('upload2/index','UploadController@index2')->name('upload2.index');
Route::Post('upload2/index','UploadController@index2')->name('upload2.index');
//儲存上傳導遊資料
Route::Post('upload','UploadController@upload')->name('upload');
//儲存帶團導遊資料
Route::Post('upload2','UploadController@upload2')->name('experience');
//導遊修改基本資料
Route::post('guide', 'GuideController@edit')->name('edit');
//導遊查看歷史紀錄
Route::get('ghistory','GhistoryController@index')->name('ghistory.index');




//導遊啟用專長景點
//Route::get('Thome', 'AttractionController@open')->name('attractions.open');

//導遊顯示目前被預約景點
Route::get('reservation', 'ReservationController@index')->name('reservation.index');
Route::post('/file/update','FileController@update_descr')->name('update.file');
Route::get('/file','FileController@index')->name('view.file');
Route::get('/file/upload','FileController@create')->name('form.file');
Route::post('/file/upload','FileController@store')->name('upload.file');
Route::post('/files/{id}','FileController@destroy')->name('delete.file');//放在最下面，不然會跟file/後面的字重疊
Route::get('/file/download/{id}','AttractionController@show')->name('download.file');




