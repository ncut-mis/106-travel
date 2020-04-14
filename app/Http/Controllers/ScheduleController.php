<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('attractions.index');
    }
    public function create()
    {
        return view('schedules.create');
    }
    public function store(Request $request)
    {
        $a['region']=$request->input('region');
        $a['start']=$request->input('start');
        $a['end']=$request->input('end');
        $a['content']=$request->input('content');
        $a['cost']=Null;
        $a['guide_id']=Null;
        $a['travel_id']=auth()->user()->id;
        DB::insert('insert into schedules(region,start,end,content,cost,guide_id,travel_id) values (?,?,?,?,?,?,?)',
            [$a['region'],$a['start'],$a['end'],$a['content'],$a['cost'],$a['guide_id'],$a['travel_id']]);

        return redirect()->route('schedules.create');
    }


}
