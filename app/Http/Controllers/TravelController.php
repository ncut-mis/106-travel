<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;
use App\Guide;
use App\File;
use App\Attraction;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{
    public function index()
    {
//        $travels=Travel::orderBy('id','ASC')->get();

//        $travels=Auth::user()->members;
//        $travels = Travel::orderBy('id', 'DESC')->get();

        $travels=Auth::user()->members->travels;
        $travels1=Auth::user()->members->travels;
        $chgpage=Auth::user()->members->travels()->paginate(3);
        $chgpage1=Auth::user()->members->travels()->paginate(3);
        $today = date('Y-m-d') ;

//        $a=Auth::user()->members->travels;
//        $q=1;
//        dd($a);
//        foreach ($a as $a){
//            $b=$travels->id;
//        }
//        dd($b);
//        $c=Travel::find(1)->schedule;
//dd($travels);
        $data=['travels'=>$travels,'chgpage'=>$chgpage,'today'=>$today,'travels1'=>$travels1,'chgpage1'=>$chgpage1];
        return view('travel',$data);


    }

    public function show($id)
    {
        $travel = DB:: select ('select * from travels where id=?',[$id]);

        $data=[
            'travel'=>$travel[0],
        ];

        return view('travels.show',$data);
    }


    public function destroy(Request $request)
    {
        $deletetra = Travel::where('id', $request->input("delete_id"))->delete();
        $deleteSch = Schedule::where('travel_id', $request->input("delete_id"))->delete();
        return redirect('/travel');
    }
    public function edit(Request $request)

    {
        $datecontnow=0;
        $datecontre=0;
        $i=0;
        $task2_travel_id=0;
            //刪掉修改後的Schedules及travel，並加入修改後的日期Travel,Schedules
//            $Travels=new \App\Travel();
//            $start=($request->input("update_start"));
//            $end=($request->input("update_end"));
//            $date=floor((strtotime($end)-strtotime($start))/86400+1);
//            $Travels->name=$request->input('update_name');
//            $Travels->start=$request->input('update_start');
//            $Travels->end=$request->input('update_end');
//            $Travels->total=0;
//            $Travels->pay=0;
//            $Travels->member_id=auth()->user()->members->id;
//            $Travels->save();
//
//            for($i=0;$i<$date;$i++) {
//                $schedules = [
//                     [
//                    'start' => $start,'end'=>$start]
//                    ];
//
//                    foreach($schedules as $schedule) {
//                         $Travels->schedules()->create(($schedule));
//                    };
//                $start = strtotime($start);
//                $start = strtotime("+1 day",$start);
//                $start= date("Y-m-d",$start);
//             }
        $start=$request->input('update_start');//start是現在天數
        $end=$request->input('update_end');//end是現在天數
        //新增旅遊
        $Travels=new \App\Travel();
        $Travels->name=$request->input('update_name');
        $Travels->start=$request->input('update_start');
        $Travels->end=$request->input('update_end');
        $Travels->total=0;
        $Travels->pay=0;
        $Travels->member_id=auth()->user()->id;
        $Travels->save();
        $travels=Travel::orderBy('id', 'desc')->first();
        $travels_id_new=$travels->id;
        $cont=0;
        $start1=($request->input("getstart"));//start1是之前天數
        $end1=($request->input("getend"));//end1是之前天數
        $date=floor((strtotime($end1)-strtotime($start1))/86400+1);//之前的天數總和
        $datecontre=floor((strtotime($end1)-strtotime($start1))/86400+1);//之前的天數總和
        $datecontnow=floor((strtotime($end)-strtotime($start))/86400+1);//現在的天數總和
        $travels_id=$request->input('update_id');
        $schedules1=Schedule::where('travel_id',$travels_id)->get();

        $task = $schedules1->first();//抓第一筆資料


        $newTask = $task->replicate();//複製
        $newTask->start=$request->input("update_start");
        $newTask->end=$request->input("update_start");
        $newTask->travel_id=$travels_id_new;
        $newTask->save();//儲存

        $cont++;
        while(true) {  //後面資料
            $i++;//迴圈跑完後+1 EX. 當第二列跑完後i=2
            $start = strtotime($start);
            $start = strtotime("+1 day",$start);
            $start= date("Y-m-d",$start);

            $task2_id = $task->id + 1;//下一列的id

            $task = Schedule::find($task2_id);//下一列的scheduls
            if($task==NULL && $i<$datecontnow)
            {
                $Schedules=new \App\Schedule();
                $Schedules->start=$start;
                $Schedules->end=$start;
                $Travels->save();
            }
            if($task==NULL && $i>=$datecontnow)
            {
                break;
            }
            if($task!=NULL) {
                $task2_travel_id = $task->travel_id;//下一列的travel_id
            }

            if ($task2_travel_id == $travels_id &&$cont<=$date && $i<$datecontnow &&$task!=NULL)
            {
                $newTask1 = $task->replicate();//複製該行
                $newTask1->start=$start;
                $newTask1->end=$start;//這邊要改
                $newTask1->travel_id=$travels_id_new;
                $newTask1->save();//儲存
                $cont++;
            }
            else
            {
                break;
            }

        }

        for($i;$i<$datecontnow;$i++) {
            $Schedules = new \App\Schedule();
            $Schedules->start = $start;
            $Schedules->end = $start;
            $Schedules->travel_id = $travels_id_new;
            $Schedules->save();
            $start = strtotime($start);
            $start = strtotime("+1 day",$start);
            $start= date("Y-m-d",$start);

        }
       $delschedule = Schedule::where('travel_id', $request->input("update_id"))->delete();
       $deltravel = Travel::where('id', $request->input("update_id"))->delete();
        return redirect('/travel');
    }
    public function update()
    {


    }
    public function store(Request $request)
    {
//        $lastid=0;
//        $userlast = Travel()::SELECT('id')->orderBy('id', 'desc')->first();
//        if($userlast==""){
//            $lastid=0;
//        }else{
//            $lastid=$userlast->id;
//        }
//        $a['id']=$lastid+1;
//        $a['name']=$request->input('name');
//        $a['start']=$request->input('start');
//        $a['end']=$request->input('end');
//        $a['total']=0;
//        $a['pay']=0;
//        $a['member_id']=auth()->user()->id;
//
//        DB::insert('insert into travels(name,start,end,total,pay,member_id) values (?,?,?,?,?,?)',
//            [$a['name'],$a['start'],$a['end'],$a['total'],$a['pay'],$a['member_id']]);
        //算出總共出遊幾天
        $start=($request->input("start"));
        $end=($request->input("end"));
        $date=floor((strtotime($end)-strtotime($start))/86400+1);

        //新增旅遊
        $Travels=new \App\Travel();
        $Travels->name=$request->input('name');
        $Travels->start=$request->input('start');
        $Travels->end=$request->input('end');
        $Travels->total=0;
        $Travels->pay=0;
        $Travels->member_id=auth()->user()->members->id;
        $Travels->save();

        for($i=0;$i<$date;$i++) {
            $schedules = [
                [
                    'start' => $start,'end'=>$start]
                ];

        foreach($schedules as $schedule) {
            $Travels->schedules()->create(($schedule));
        };

            $start = strtotime($start);
            $start = strtotime("+1 day",$start);
            $start= date("Y-m-d",$start);


        }

        return redirect()->route('travel');
    }
    public function cancel(Request $request)
    {
        $canceltravel= Travel::find($request->input("cancel_id"));
        $canceltravel->pay=0;
        $canceltravel->save();
        $cancelschedules=Schedule::where('travel_id',$request->input("cancel_id"))->get();

        foreach($cancelschedules as $cancelschedules) {
            $a=$cancelschedules->attraction_id;
            $array = array($a);
            $cancelschedules->guide_id ='';
            $cancelschedules->cost=0;
            $cancelschedules->match_time=NULL;
            $cancelschedules->attraction_id=NULL;
            $cancelschedules->save();
            $cancelattraction=Attraction::where('id',$array)->first();
            $cancelattraction->reservation='';
            $cancelattraction->member_name='';
            $cancelattraction->save();
        }
        return redirect('/travel');
    }
    public function attraction(Request $request)
    {
        $att_id=$request->input('att_id');
        $file=File::where('attraction_id',$att_id)->get();
        $attraction=Attraction::where('id',$att_id)->first();
        $guide_id=$attraction->guide_id;
        $guide=Guide::where('id',$guide_id)->first();
        $user_id=$guide->user_id;
        $user=User::where('id',$user_id)->first();
        $files=File::Where('attraction_id',$att_id)->orderBy('created_at','DESC')->paginate(30);
        $data=['files'=>$files,'attraction'=>$attraction,'user'=>$user,'file'=>$file,'att_id'=>$att_id];
        return view('/newtravel',$data);
    }

}
