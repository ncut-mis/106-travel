<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;
use App\Attraction;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
//        $schedules=Schedule::orderBy('id','ASC')->get();
  //     $a=Auth::user()->members->travels;
//      dd($a);
//        foreach ($a as $a){
//            $b=$schedules;
//            dd($b);
//        }

        $name=($request->input("name"));
        $start=($request->input("start"));
        $end=($request->input("end"));
        $date=floor((strtotime($end)-strtotime($start))/86400+1);
        $b=Travel::find($request->input("id"))->schedules;

        $cc=($request->input("id"));
        $travel_id=($request->input("id"));
        $total=($request->input("total"));
        $data=['b1'=>$b,'cc'=>$cc,'date'=>$date,'start'=>$start,'end'=>$end,'travel_id'=>$travel_id,'name'=>$name,'total'=>$total];

        return view('schedules.index',$data);
    }
    public function reindex(Request $request,$id)
    {
//        $schedules=Schedule::orderBy('id','ASC')->get();
        //     $a=Auth::user()->members->travels;
//      dd($a);
//        foreach ($a as $a){
//            $b=$schedules;
//            dd($b);
//        }
dd($request->input("id"));
        $b=Travel::find($id)->schedules;
        $cc=($id);
        $data=['b1'=>$b,'cc'=>$cc];

//        dd($b);
        return view('schedules.index',$data);
    }
    public function create($id)
    {
        $cc=($id);
        $data=['cc'=>$cc];

        return view('schedules.create',$data);
    }
    public function store(Request $request,$id)
    {

        $a['region']=$request->input('region');
        $a['content']=$request->input('content');
        $a['cost']=0;
        $a['travel_id']=$id;

        DB::insert('insert into schedules(region,content,cost,travel_id) values (?,?,?,?)',
            [$a['region'],$a['content'],$a['cost'],$a['travel_id']]);
        $b=Travel::find($id)->schedules;
        $cc=($id);
        $data=['b1'=>$b,'cc'=>$cc];
        return view('schedules.index',$data);
    }
    public function edit(request $request)
    {
        //$b=Travel::schedules;
        $b=Schedule::find($request->input('update_id'));
        $name=($request->input('name'));
        $start=($request->input('start'));
        $match_id= $request->input("match_id");
        $travel_id=$request->input("travel_id");
        $total=$request->input("total");
        $data=['b1'=>$b,'name'=>$name,'start'=>$start,'match_id'=>$match_id,'travel_id'=>$travel_id,'total'=>$total
        ];

        return view('schedules.edit',$data);
    } public function reedit(request $request)
{

    //dd($b1);
    //$b=Travel::schedules;
    $b=Schedule::find($request->input('schedule'));
    $name=($request->input('name'));
    $start=($request->input('start'));
    $total=$request->input("total");
    $match_id= $request->input("match_id");
    $travel_id=$request->input("travel_id");
    $data=['b1'=>$b,'name'=>$name,'start'=>$start,'match_id'=>$match_id,'travel_id'=>$travel_id,'total'=>$total];

    return view('schedules.edit',$data);
}

    public function update(request $request)
    {
        $name=($request->input('name'));
        $start=($request->input('start'));
        $b =Schedule::where('id', $request->input("update_id"))->first();
        $b->region = $request->input("update_region");
        $b->name = $request->input("update_name");
        $b->content = $request->input("update_content");
        $b->breakfast = $request->input("update_breakfast");
        $b->lunch = $request->input("update_lunch");
        $b->dinner = $request->input("update_dinner");
        $b->traffic = $request->input("update_traffic");
        $b->room = $request->input("update_room");
        $b->guide_id=$request->input("update_guide_id");
        $b->save();

        $b =Schedule::where('id', $request->input("update_id"))->first();
        $travel_id=$b->travel_id;

        $b=Travel::find($travel_id)->schedules;
        $cc=($travel_id);//$b為屬於哪個travel_id 的所有行程  $cc為travel_id
        $data=['b1'=>$b,'cc'=>$cc,'name'=>$name,'start'=>$start,'travel_id'=>$travel_id];

        return view('schedules.index',$data);
    }
    public function destroy(request $request)
    {

        Schedule::where('id',$request->input('a2'))->delete();
        $b=Travel::find($request->input("travel_id"))->schedules;
        $cc=($request->input("travel_id"));
        $data=['b1'=>$b,'cc'=>$cc];

        return view('schedules.index',$data);
    }
    public function matchcancel(request $request)
{
    //這是將導遊id變為空值的步驟
    $schedule= Schedule::where('id', $request->input("id"))->first();
    $schedule->guide_id="";

    //將專長景點的id找到後把專長景點內的判斷式設為空值
    $attraction_id=$schedule->attraction_id;
    $attraction=Attraction::where('id',$attraction_id)->first();
    $attraction->reservation="";
    $attraction->member_name="";
    $schedule->attraction_id="";
    $schedule->save();
    $attraction->save();
    //將專長景點的預約資料 $attraction_id=Attraction::where('id', $request->input("attraction_id"))->first();
    //////    dd($attraction_id);
    //////    $attraction_id->reservation="";變為空值
//   ////    $attraction_id->save();
    //這是重新抓取頁面的值
    $b=Schedule::find($request->input('id'));
    $name=($request->input('name'));
    $start=($request->input('start'));
    $match_id= $request->input("match_id");
    $travel_id=$request->input("travel_id");
    $data=['b1'=>$b,'name'=>$name,'start'=>$start,'match_id'=>$match_id,'travel_id'=>$travel_id];

    return view('schedules.edit',$data);

}
}
