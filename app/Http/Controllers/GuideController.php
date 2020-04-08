<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Guide;
use App\Attraction;

class GuideController extends Controller
{
    public function edit()
    {
        $a=Auth::user();
        return view('guide',['a'=>$a]);
    }
}
