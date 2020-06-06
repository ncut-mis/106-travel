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
use App\Attraction;
use App\Http\Controllers\TravelController;
use App\Photo;
use Illuminate\Support\Facades\Route;

Route::auth();

Route::get('/', function () {
        $user = Auth::user();
        while(true) {
            $attractionalastid = Attraction::all()->last()->id;
            $begin=1;
            $end=$attractionalastid;
            $limit=4;
            $rand_array = range($begin, $end);
            shuffle($rand_array);//呼叫現成的陣列隨機排列函式
            $random5=array_slice($rand_array, 0, $limit);//擷取前$limit個
            $attraction = Attraction::where('id', $random5[0])->first();
            if ($attraction != NULL)
                $attraction_id = $attraction->id;

            $attraction1 = Attraction::where('id', $random5[1])->first();
            if ($attraction1 != NULL)
                $attraction_id1 = $attraction1->id;

            $attraction2 = Attraction::where('id', $random5[2])->first();
            if ($attraction2 != NULL)
                $attraction_id2 = $attraction2->id;
            $attraction3 = Attraction::where('id', $random5[3])->first();
            if ($attraction3 != NULL)
                $attraction_id3 = $attraction3->id;
            $attraction4 = Attraction::where('id', $random5[4])->first();
            if ($attraction4 != NULL)
                $attraction_id4 = $attraction4->id;
            $attraction5 = Attraction::where('id', $random5[5])->first();
            if ($attraction5 != NULL)
                $attraction_id5 = $attraction5->id;
            $attraction6 = Attraction::where('id', $random5[6])->first();
            if ($attraction6 != NULL)
                $attraction_id6 = $attraction6->id;
            $attraction7 = Attraction::where('id', $random5[7])->first();
            if ($attraction7 != NULL)
                $attraction_id7 = $attraction7->id;
            $attraction8 = Attraction::where('id', $random5[8])->first();
            if ($attraction8 != NULL)
                $attraction_id8 = $attraction8->id;
            if ($attraction != NULL &&$attraction1 != NULL &&$attraction2 != NULL &&$attraction3 != NULL
                && $attraction4 != NULL && $attraction5 != NULL && $attraction6 != NULL && $attraction7 != NULL &&
                $attraction8 != NULL  &&$attraction->reservation!=1 && $attraction1->reservation!=1 && $attraction2->reservation!=1
                && $attraction3->reservation!=1 && $attraction4->reservation!=1 && $attraction5->reservation!=1
                && $attraction6->reservation!=1 && $attraction7->reservation!=1 && $attraction8->reservation!=1
               )
            {
                break;
            }
        }
        $photo=Photo::where('attraction_id',$attraction_id)->first();
        $photo1=Photo::where('attraction_id',$attraction_id1)->first();
        $photo2=Photo::where('attraction_id',$attraction_id2)->first();
        $photo3=Photo::where('attraction_id',$attraction_id3)->first();
        $photo4=Photo::where('attraction_id',$attraction_id4)->first();
        $photo5=Photo::where('attraction_id',$attraction_id5)->first();
        $photo6=Photo::where('attraction_id',$attraction_id6)->first();
        $photo7=Photo::where('attraction_id',$attraction_id7)->first();
        $photo8=Photo::where('attraction_id',$attraction_id8)->first();

//             dd($photo,$photo1,$photo2,$photo3);

        $content=$attraction->content;
        $content1=$attraction1->content;
        $content2=$attraction2->content;
        $content3=$attraction3->content;
        $content4=$attraction->content;
        $content5=$attraction1->content;
        $content6=$attraction2->content;
        $content7=$attraction3->content;
        $content8=$attraction3->content;
        $content4=mb_substr( $content, 0 , 30,"utf-8");
        $content5=mb_substr( $content1, 0 , 30,"utf-8" );
        $content6=mb_substr( $content2, 0 , 30 ,"utf-8");
        $content7=mb_substr( $content3, 0 , 30,"utf-8" );
        $content8=mb_substr( $content, 0 , 30,"utf-8");
        $content9=mb_substr( $content1, 0 , 30,"utf-8" );
        $content10=mb_substr( $content2, 0 , 30 ,"utf-8");
        $content11=mb_substr( $content3, 0 , 30,"utf-8" );
        $content12=mb_substr( $content3, 0 , 30,"utf-8" );
        $data=['user'=>$user,'attraction'=>$attraction,'attraction1'=>$attraction1,'attraction2'=>$attraction2,'attraction3'=>$attraction3,
            'attraction_id3'=>$attraction_id3,'attraction_id2'=>$attraction_id2,'attraction_id1'=>$attraction_id1,'attraction_id'=>$attraction_id
            ,'photo'=>$photo,'photo1'=>$photo1,'photo2'=>$photo2,'photo3'=>$photo3,'content4'=>$content4
            ,'content5'=>$content5,'content6'=>$content6,'content7'=>$content7,'content8'=>$content8,'content9'=>$content9,
            'content10'=>$content10,'content11'=>$content11,'content12'=>$content12,
        ];

        return view('home', $data);
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
Route::post('hometomatch/store','TravelController@hometomatchstore')->name('hometomatch.store');


//刪除旅遊計畫
//Route::delete('/travel/destroy' , ['as' => 'travel.destroy' , 'uses' => 'TravelController@destroy']);
Route::post('/travel/destroy' , ['as' => 'travel.destroy' , 'uses' => 'TravelController@destroy']);

//Route::delete('travel/destroy', 'TravelController@destroy')->name('travel.destroy');

//修改旅遊計畫
Route::post('travel/edit',['as'=>'travel.edit','uses'=>'TravelController@edit']);

//顯示所有會員行程規劃
Route::post('/schedules', 'ScheduleController@index')->name('schedules.index');
Route::get('/schedules', 'ScheduleController@index')->name('schedules.index');
Route::get('/reschedules', 'ScheduleController@reindex')->name('schedules.reindex');
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
//會員媒合後觀看導遊詳細資料
Route::post('scheduleguides/show1', 'ScheduleGuideController@show1')->name('scheduleguides.show1');
Route::get('scheduleguides/show1', 'ScheduleGuideController@show1')->name('scheduleguides.show1');
//會員媒合導遊
Route::post('/scheduleguides', 'ScheduleGuideController@index')->name('scheduleguides.index');
Route::get('/scheduleguides', 'ScheduleGuideController@index')->name('scheduleguides.index');
//會員觀看所有媒合到的導遊之返回鈕
Route::post('schedules/reedit','ScheduleController@reedit')->name('schedules.reedit');
//會員觀看導遊的詳細資料之返回鈕
Route::post('/rescheduleguides/index2', 'ScheduleGuideController@index2')->name('scheduleguides.index2');
//會員按下媒合導遊鈕
Route::post('/rescheduleguides', 'ScheduleGuideController@reindex')->name('scheduleguides.reindex');
//會員查看導遊資訊後按下返回鈕
Route::post('/rescheduleguides/rreindex', 'ScheduleGuideController@rreindex')->name('scheduleguides.rreindex');
//會員取消媒合導遊
Route::post('schedules/matchcancel', 'ScheduleController@matchcancel')->name('schedules.matchcancel');

//會員觀看進行中的專長景點
Route::post('schedules/attraction','ScheduleController@attraction')->name('schedules.attraction');
//會員從首頁直接觀看導遊景點
Route::post('travel/attraction','TravelController@attraction')->name('travelguide.attraction');
//會員從首頁觀看導遊後從已有旅遊規畫新增導遊
Route::post('schedule/hometomatch','ScheduleController@hometomatch')->name('hometomatch');
Route::get('schedule/hometomatch','ScheduleController@hometomatch')->name('hometomatch');
//會員首頁觀看規劃中後跳轉至schedule頁面
Route::post('schedule/showschedule','ScheduleController@showschedule')->name('showschedule');
//會員首頁首頁觀看規劃中後跳轉至schedule頁面裡加入導遊
Route::post('schedule/storechedule','ScheduleController@storechedule')->name('storechedule');



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
//導遊檔案
Route::post('/file/update','FileController@update_descr')->name('update.file');
Route::get('/file','FileController@index')->name('view.file');
Route::get('/file/upload','FileController@create')->name('form.file');
Route::post('/file/upload','FileController@store')->name('upload.file');
Route::post('/files/{id}','FileController@destroy')->name('delete.file');//放在最下面，不然會跟file/後面的字重疊
Route::get('/file/download/{id}','AttractionController@show')->name('download.file');




