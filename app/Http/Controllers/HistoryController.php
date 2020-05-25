<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index()
    {

        $travels=Auth::user()->members->travels;
        if($travels->pay=1)
        $chgpage=Auth::user()->members->travels()->paginate(2);
        $today = date('Y-m-d') ;
        $data=['travels'=>$travels,'chgpage'=>$chgpage,'today'=>$today];
        return view('history.index',$data);
    }
    public function create(Request $request)
    {

        $datecontnow=0;
        $datecontre=0;
        $i=0;
        $task2_travel_id=0;
        $start=$request->input('start');//start是現在天數
        $end=$request->input('end');//end是現在天數
        //新增旅遊
        $Travels=new \App\Travel();
        $Travels->name=$request->input('name');
        $Travels->start=$request->input('start');
        $Travels->end=$request->input('end');
        $Travels->total=0;
        $Travels->pay=0;
        $Travels->member_id=auth()->user()->id;
        $Travels->save();
        $travels_id=Travel::orderBy('id', 'desc')->first();
        $travels_id11=$travels_id->id;
       $cont=0;
        $start1=($request->input("getstart"));//start1是之前天數
        $end1=($request->input("getend"));//end1是之前天數
        $date=floor((strtotime($end1)-strtotime($start1))/86400+1);//之前的天數總和
        $datecontre=floor((strtotime($end1)-strtotime($start1))/86400+1);//之前的天數總和
        $datecontnow=floor((strtotime($request->input('end'))-strtotime($request->input('start')))/86400+1);//現在的天數總和
       $travels_id=$request->input('travels_id');

       $schedules1=Schedule::where('travel_id',$travels_id)->get();

       $task = $schedules1->first();//抓第一筆資料


           $newTask = $task->replicate();//複製
        $newTask->start=$request->input("start");
        $newTask->end=$request->input("start");
        $newTask->travel_id=$travels_id11;
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
                   $newTask1->travel_id=$travels_id11;
               $newTask1->save();//儲存
                   $cont++;
               }
           else
               {
                   break;
               }

       }
       for($z=$i;$i<$datecontnow;$i++) {
           $Schedules = new \App\Schedule();
           $Schedules->start = $start;
           $Schedules->end = $start;
           $Schedules->travel_id = $travels_id11;
           $Schedules->save();
           $start = strtotime($start);
           $start = strtotime("+1 day",$start);
           $start= date("Y-m-d",$start);

       }




//        $newdate=floor((strtotime($request->input('end'))-strtotime($request->input('start')))/86400+1);
//        for($i=0;$i<$newdate;$i++) {
//            $schedules = [
//                [
//                    'start' => $start,'end'=>$start]
//            ];
//
//            foreach($schedules as $schedule) {
//                $Travels->schedules()->create(($schedule));
//            };
//
//            $start = strtotime($start);
//            $start = strtotime("+1 day",$start);
//            $start= date("Y-m-d",$start);
//        }
//        foreach($schedules as $schedules) {
//            $region=$schedules->region;
//            $content=$schedules->content;
//            $room=$schedules->room;
//        }

        return redirect()->route('travel');
    }
    public function show(Request $request)
    {
        $name=($request->input("name"));
        $start=($request->input("start"));
        $end=($request->input("end"));
        $date=floor((strtotime($end)-strtotime($start))/86400+1);
        $b=Travel::find($request->input("id"))->schedules;

        $cc=($request->input("id"));
        $travel_id=($request->input("id"));
        $total=($request->input("total"));
        $data=['b1'=>$b,'cc'=>$cc,'date'=>$date,'start'=>$start,'end'=>$end,'travel_id'=>$travel_id,'name'=>$name,'total'=>$total];

        return view('history.show',$data);
    }

}

