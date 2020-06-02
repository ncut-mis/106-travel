<?php

namespace App\Http\Controllers;

use App\File;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Travel;
use App\Schedule;
use App\Member;
use App\Guide;
use App\Attraction;
use Illuminate\Support\Facades\DB;

class ScheduleGuideController extends Controller
{
    public function index(Request $request)
    {
        $schedule= Schedule::where('id', $request->input("id"))->first();
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $schedule_id=($request->input("id"));
        $total=$request->input("total");
        $attraction=DB::select('select * from attractions order by id DESC ');
        $last_attraction=Attraction::all()->last();
        $last_attraction_id=$last_attraction->id;
        //dd($last_attraction_id);
        for($i=0;$i<$last_attraction_id;$i++){
            $a=$attraction;
            $b=$a[$i];
            $guide_id=$b->guide_id;
            $guide= Guide::where('id',$guide_id)->first();
            $user_id=$guide->user_id;
            $user= User::where('id',$user_id)->first();
            $user_name=$user->name;
            $c[$i]=$user_name;//此陣列為抓導遊名字
        }
        $c=array_reverse($c);
        for($i=0;$i<$last_attraction_id;$i++){
            $a=$attraction;
            $b=$a[$i];
            $guide_id=$b->guide_id;
            $guide= Guide::where('id',$guide_id)->first();
            $user_id=$guide->user_id;
            $user= User::where('id',$user_id)->first();
            $user_phone=$user->phone;
            $d[$i]=$user_phone;//此陣列為抓導遊手機
        }
        $d=array_reverse($d);
        $travel_id=$request->input("travel_id");
        $name=$request->input('name');


        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,
            'schedule_id'=>$schedule_id,'travel_id'=>$travel_id,'schedule'=>$schedule,'total'=>$total,'name'=>$name
            ,'user_name'=>$user_name,'c'=>$c,'d'=>$d];
        return view('scheduleguideindex',$data);

    }
    public function index2(Request $request)
    {

        $schedule= Schedule::where('id', $request->input("schedule_id"))->first();
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $schedule_id=($request->input("id"));
        $name=$request->input('name');
        $travel_id=$request->input("travel_id");
        $total=$request->input("total");


        $attraction=DB::select('select * from attractions order by id DESC ');
        $last_attraction=Attraction::all()->last();
        $last_attraction_id=$last_attraction->id;
        for($i=0;$i<$last_attraction_id;$i++){
            $a=$attraction;
            $b=$a[$i];
            $guide_id=$b->guide_id;
            $guide= Guide::where('id',$guide_id)->first();
            $user_id=$guide->user_id;
            $user= User::where('id',$user_id)->first();
            $user_name=$user->name;
            $c[$i]=$user_name;//此陣列為抓導遊名字
        }
        $c=array_reverse($c);
        for($i=0;$i<$last_attraction_id;$i++){
            $a=$attraction;
            $b=$a[$i];
            $guide_id=$b->guide_id;
            $guide= Guide::where('id',$guide_id)->first();
            $user_id=$guide->user_id;
            $user= User::where('id',$user_id)->first();
            $user_phone=$user->phone;
            $d[$i]=$user_phone;//此陣列為抓導遊手機
        }
        $d=array_reverse($d);

        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,
            'total'=>$total,'schedule_id'=>$schedule_id,'travel_id'=>$travel_id,'schedule'=>$schedule,'schedule_id'=>$schedule_id,'name'=>$name,'c'=>$c,'d'=>$d];
        return view('scheduleguideindex',$data);

    }
    public function reindex(Request $request)
{

    $nowtime=Carbon::now();
    $schedule= Schedule::where('id', $request->input("schedule_id"))->first();
    $schedule_id=$schedule->id;
    $schedule_region=$schedule->region;
    $schedule_name=$schedule->name;
    $attraction=DB::select('select * from attractions order by id DESC ');
    $member_name=Auth::User()->name;
    $attraction_id=Attraction::where('id', $request->input("attraction_id"))->first();
    $attraction_id->member_name=$member_name;
    $attraction_id->reservation=1;
    $schedule->attraction_id=$request->input("attraction_id");
    $attraction_id->save();
    $reservation=$attraction_id->reservation;
    $guide_id=$attraction_id->guide_id;
    $travel_id=$request->input("travel_id");
    $travel=Travel::where('id', $request->input("travel_id"))->first();
    $travel_name=$travel->name;
    $travel_start=$travel->start;

    $schedule->guide_id=$request->input("match_id");
    $schedule->cost=$attraction_id->price;
    $schedule->match_time=$nowtime;
    $total=$travel->total+$schedule->cost;
    $travel->total=$total;
    $travel->save();
    $schedule->save();
    $name=$request->input('name');
    //總和計算


    $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
        ,'guide_id'=>$guide_id, 'travel_id' =>$travel_id,'name'=>$travel_name,'b1'=>$schedule,'start'=>$travel_start,'attraction_id'=>$attraction_id,
        'reservation'=>$reservation,'name'=>$name,'schedule'=>$schedule,'attraction'=>$schedule->attraction_id,'total'=>$total];


    return view('schedules.edit',$data);
}
    public function rreindex(Request $request)
    {
        $total=$request->input("total");
        $nowtime=Carbon::now();
        $schedule= Schedule::where('id', $request->input("schedule_id"))->first();
        $schedule_id=$schedule->id;
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $attraction=DB::select('select * from attractions order by id DESC ');
        $member_name=Auth::User()->name;
        $attraction_id=Attraction::where('id', $request->input("attraction_id"))->first();
        $attraction_id->member_name=$member_name;
        $attraction_id->reservation=1;
        $schedule->attraction_id=$request->input("attraction_id");
        $attraction_id->save();
        $reservation=$attraction_id->reservation;
        $guide_id=$attraction_id->guide_id;
        $travel_id=$request->input("travel_id");
        $travel=Travel::where('id', $request->input("travel_id"))->first();
        $travel_name=$travel->name;
        $travel_start=$travel->start;

        $schedule->guide_id=$request->input("match_id");
        $schedule->cost=$attraction_id->price;
        $schedule->match_time=$nowtime;

        $schedule->save();
        $name=$request->input('name');
        //總和計算


        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
            ,'guide_id'=>$guide_id, 'travel_id' =>$travel_id,'name'=>$travel_name,'b1'=>$schedule,'start'=>$travel_start,'attraction_id'=>$attraction_id,
            'reservation'=>$reservation,'name'=>$name,'schedule'=>$schedule,'attraction'=>$schedule->attraction_id,'total'=>$total];


        return view('schedules.edit',$data);
    }
    public function show(request $request,$id)
    {
        $travel_id=$request->input("travel_id");
        $total=$request->input("total");
        $name=$request->input('name');
        $schedule= Schedule::where('id', $request->input("schedule"))->first();
        $schedule_id=$schedule->id;
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $attraction=Attraction::where('id', $request->input("attraction_id"))->first();
        $attraction_id=$attraction->id;
        $reservation=$attraction->reservation;
        $guide_id=$attraction->guide_id;
        $user_id=Guide::find($guide_id)->user_id;
        $guide_name=User::find($user_id)->name;
        $guide_phone=User::find($user_id)->phone;
        $guide_email=User::find($user_id)->email;
        $schedule_guide_id=$schedule->guide_id;
        $b = Attraction::where('id', $id)->first();
//        $user_name=DB::select('select  id,name from users');
//        $guide_name=DB::select('select  id,user_id from guides');
//        $attraction_name=DB::select('select  id,guide_id from attractions');
//        $schedules_name=DB::select('select  id,attraction_id from schedules');


        $files=File::Where('attraction_id',$attraction_id)->orderBy('created_at','DESC')->paginate(30);
        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
                ,'files' =>$files,'guide_id'=>$guide_id,'travel_id'=>$travel_id,'schedule'=>$schedule,'reservation'=>$reservation,
            'total'=>$total,'name'=>$name,'guide_name'=>$guide_name,'schedule_guide_id'=>$schedule_guide_id,'guide_phone'=>$guide_phone,'guide_email'=>$guide_email];



        return view('scheduleguideshow',$data);
    }

}
