<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;

class ScheduleController extends Controller
{
    public function index()
    {

    }
    public function destroy()
    {
//        Travel::destroy();
//        return redirect('/travel');

    }
    public function update()
    {
        return view('schedule');
    }

}
