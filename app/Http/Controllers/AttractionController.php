<?php

namespace App\Http\Controllers;

use App\User;
use App\Guide;
use App\Attraction;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;


class AttractionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function store(Request $request)
    {
        $a['name']=$request->input('name');
        $a['location']=$request->input('location');
        $a['content']=$request->input('content');
        $a['guide_id']=auth()->user()->id;

        DB::insert('insert into attractions(name,location,content,guide_id) values (?,?,?,?)',
            [$a['name'],$a['location'],$a['content'],$a['guide_id']]);

        return redirect()->route('attractions.index');
    }
    public function index()
    {
        return view('attractions.index');
    }

    public function create()
    {
    return view('attractions.create');
    }

    public function edit(Request $request)
    {
        return view('/attractions.edit');
    }
}
