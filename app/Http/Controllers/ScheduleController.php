<?php

namespace App\Http\Controllers;


use App\File;
use Illuminate\Http\Request;
use App\User;
use App\Travel;
use App\Schedule;
use App\Member;
use App\Guide;
use Auth;
use App\Attraction;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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


//        $schedule=schedule::where('id', $request->input("id"))->first();
        //$schedule_date=$b->start;
//        $today = date('Y-m-d') ;
//        dd(strtotime($start));
//        for($start=0;strtotime($start)<=strtotime($end);strtotime($start)++){
//            if(strtotime($today)<(strtotime($start)<=strtotime($end))){
//                $schedule= Schedule::where('id', $request->input("id"))->first();
//                $schedule->guide_id="";
//                $attraction_id=$schedule->attraction_id;
//                $attraction=Attraction::where('id',$attraction_id)->first();
//                $attraction->reservation="";
//                $attraction->member_name="";
//                $schedule->attraction_id="";
//                $schedule->cost=0;
//                $schedule->match_time=NULL;
//                $schedule->save();
//                $attraction->save();
//            }
//        }

        return view('schedules.index',$data);
    }
    public function reindex(Request $request    )
    {
//        $schedules=Schedule::orderBy('id','ASC')->get();
        //     $a=Auth::user()->members->travels;
//      dd($a);
//        foreach ($a as $a){
//            $b=$schedules;
//            dd($b);
//        }
//dd($request->input("id"));
//        $b=Travel::find($id)->schedules;
//        $cc=($id);
//        $data=['b1'=>$b,'cc'=>$cc];
//$b=Schedule::find($request->input('update_id'));
        $name=($request->input('name'));
        $start=($request->input('start'));
        $b =Schedule::where('id', $request->input("update_id"))->first();
        $travel_id=$b->travel_id;

        $b=Travel::find($travel_id)->schedules;
        $cc=($travel_id);//$b為屬於哪個travel_id 的所有行程  $cc為travel_id
        $data=['b1'=>$b,'cc'=>$cc,'name'=>$name,'start'=>$start,'travel_id'=>$travel_id];

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
        $attraction_id=$b->attraction_id;
        $name=($request->input('name'));
        $start=($request->input('start'));
        $match_id= $request->input("match_id");
        $travel_id=$request->input("travel_id");
        $total=$request->input("total");
        $data=['b1'=>$b,'name'=>$name,'start'=>$start,'match_id'=>$match_id,'travel_id'=>$travel_id,'total'=>$total
        ,'attraction'=>$attraction_id
        ];

        return view('schedules.edit',$data);
    } public function reedit(request $request)
{

    //dd($b1);
    //$b=Travel::schedules;
    $b=Schedule::find($request->input('schedule'));
    $attraction_id=$b->attraction_id;
    $name=($request->input('name'));
    $start=($request->input('start'));
    $total=$request->input("total");
    $match_id= $request->input("match_id");
    $travel_id=$request->input("travel_id");
    $data=['b1'=>$b,'name'=>$name,'start'=>$start,'match_id'=>$match_id,'travel_id'=>$travel_id,'total'=>$total,'attraction'=>$attraction_id];

    return view('schedules.edit',$data);
}

    public function update(request $request)
    {
        $name=($request->input('name'));
        $start=($request->input('start'));
        $b =Schedule::where('id', $request->input("update_id"))->first();
        $b->region = $request->input("select_region");
        $b->name = $request->input("update_name");
        $b->content = $request->input("update_content");
        $b->breakfast = $request->input("update_breakfast");
        $b->going= $request->input("update_going");
        $b->arriving = $request->input("update_arriving");
        $b->lunch = $request->input("update_lunch");
        $b->dinner = $request->input("update_dinner");
        $b->traffic = $request->input("update_traffic");
        $b->room = $request->input("update_room");
        $b->guide_id=$request->input("update_guide_id");
        $b->save();

        $b =Schedule::where('id', $request->input("update_id"))->first();
        $travel_id=$b->travel_id;
        $attraction_id=$b->attraction_id;
        $cc=($travel_id);//$b為屬於哪個travel_id 的所有行程  $cc為travel_id
        $data=['b1'=>$b,'cc'=>$cc,'name'=>$name,'start'=>$start,'travel_id'=>$travel_id,'attraction'=>$attraction_id];

        return view('schedules.edit',$data);
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
    $schedule->cost=0;
    $schedule->match_time=NULL;
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

    $attraction_id=$b->attraction_id;

    $data=['b1'=>$b,'name'=>$name,'start'=>$start,'match_id'=>$match_id,'travel_id'=>$travel_id,'attraction'=>$attraction_id];

    return view('schedules.edit',$data);

}
    public function show(Request $request)
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
//        $attraction_id=$b->attraction_id;
//        dd($attraction_id);
//        $attraction_select_attraction_id=$b->attraction_id;
//        dd($attraction_select_attraction_id);
//     $attraction=Attraction::find($attraction_id);
    $data=['b1'=>$b,'cc'=>$cc,'date'=>$date,'start'=>$start,'end'=>$end,'travel_id'=>$travel_id,'name'=>$name,];

    return view('schedules.show',$data);
}
    public function attraction(request $request)
    {
        $att_id=$request->input('att_id');
        $file=File::where('attraction_id',$att_id)->get();
        $attraction=Attraction::where('id',$att_id)->first();
        $guide_id=$attraction->guide_id;
        $guide=Guide::where('id',$guide_id)->first();
        $user_id=$guide->user_id;
        $user=User::where('id',$user_id)->first();
        $files=File::Where('attraction_id',$att_id)->orderBy('created_at','DESC')->paginate(30);
        $data=['files'=>$files,'attraction'=>$attraction,'user'=>$user,'file'=>$file];
        return view('schedules.attraction',$data);
    }
    public function hometomatch(request $request)
    {
        $att_id=$request->input('att_id');
        $travels=Auth::user()->members->travels;
        $travels1=Auth::user()->members->travels;
        $chgpage=Auth::user()->members->travels()->paginate(3);
        $chgpage1=Auth::user()->members->travels()->paginate(3);
        $today = date('Y-m-d') ;

        $data=['travels'=>$travels,'chgpage'=>$chgpage,'today'=>$today,'travels1'=>$travels1,'chgpage1'=>$chgpage1,'att_id'=>$att_id];
        return view('/hometomatch',$data);
    }
    public function showschedule(request $request)
    {
        $name=($request->input("name"));
        $start=($request->input("start"));
        $end=($request->input("end"));
        $date=floor((strtotime($end)-strtotime($start))/86400+1);
        $b=Travel::find($request->input("id"))->schedules;

        $cc=($request->input("id"));
        $travel_id=($request->input("id"));
        $total=($request->input("total"));
        $att_id=$request->input('att_id');
        $travels=Auth::user()->members->travels;
        $travels1=Auth::user()->members->travels;
        $chgpage=Auth::user()->members->travels()->paginate(3);
        $chgpage1=Auth::user()->members->travels()->paginate(3);
        $today = date('Y-m-d') ;

        $data=['travels'=>$travels,'chgpage'=>$chgpage,'today'=>$today,'travels1'=>$travels1,'chgpage1'=>$chgpage1,'att_id'=>$att_id,
            'b1'=>$b,'cc'=>$cc,'date'=>$date,'start'=>$start,'end'=>$end,'travel_id'=>$travel_id,'name'=>$name,'total'=>$total];
        return view('/schedulehometomatch',$data);
    }

    public function storechedule(request $request)
    {
        $user_name=Auth::user()->name;
        $nowtime=Carbon::now();
//        $name=$request->input('name');
        $att_id=$request->input('att_id');
        $attraction=Attraction::where('id',$att_id)->first();
        $attraction->reservation=1;
        $attraction->member_name=$user_name;

        $id=$request->input('this_id');
        $schedule=Schedule::where('id',$id)->first();
//        $travel_id=$schedule->travel_id;
//        $b=Travel::find($travel_id)->schedules;
//        $start=123;
//        $end=123;
        $schedule->region=$attraction->location;
        $schedule->name=$attraction->name;
        $schedule->match_time=$nowtime;
        $schedule->attraction_id=$att_id;
        $schedule->cost=$attraction->price;
        $schedule->guide_id=$attraction->guide_id;
        $schedule->save();
        $attraction->save();
//        $data=['name'=>$name,'b1'=>$b,'start'=>$start,'end'=>$end,'travel_id'=>$travel_id];
        return redirect('/travel');
    }
}
