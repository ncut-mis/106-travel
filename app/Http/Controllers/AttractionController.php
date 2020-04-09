<?php

namespace App\Http\Controllers;

use App\User;
use App\Guide;
use App\Attraction;
use Illuminate\Http\Request;
use Auth;

class AttractionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
//        $attractions = Attraction::where('attraction_id', $request->attraction()->id)->get();

        return view('attraction');
    }

    public function store(Request $request)
    {

    }

    public function index()
    {

//        $attractions=Attraction::orderBy('id','DESC')->get();

        $a = Auth::user()->guides->attractions;

     //   $data=['attractions'=>$attractions];

        return view('attraction',$a);
    }
}
