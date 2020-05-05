<?php

namespace App\Http\Controllers;

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
        $attraction=DB::select('select * from attractions order by id DESC ');

        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id];
        return view('scheduleguideindex',$data);

    } public function reindex(Request $request)
{
    $schedule= Schedule::where('id', $request->input("schedule_id"))->first();
    $schedule_id=$schedule->id;

    $schedule_region=$schedule->region;
    $schedule_name=$schedule->name;
    $attraction=DB::select('select * from attractions order by id DESC ');

    $attraction_id=Attraction::where('id', $request->input("attraction_id"))->first();
    $guide_id=$attraction_id->guide_id;

    $schedule->guide_id=$request->input("match_id");
    $schedule->save();
    $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
        ,'guide_id'=>$guide_id];


    return view('scheduleguideindex',$data);
}
    public function show(request $request,$id)
    {
        $attraction = DB::select('select * from attractions where id=?',[$id]);

        $b = Attraction::where('id', $id)->first();
        $files = get_files(storage_path('app/public/attractions/'.$b->id));

        $schedule= Schedule::where('id', $request->input("schedule_id"))->first();
        $schedule_id=$schedule->id;
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $attraction=Attraction::where('id', $request->input("attraction_id"))->first();
        $guide_id=$attraction->guide_id;
        $b = Attraction::where('id', $id)->first();
        $files = get_files(storage_path('app/public/attractions/'.$b->id));

        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
                ,'files' =>$files,'guide_id'=>$guide_id];



        return view('scheduleguideshow',$data);
    }
}
