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
        $a['created_at']=now();
        $a['updated_at']=now();
        $a['guide_id']=auth()->user()->id;

        DB::insert('insert into attractions(name,location,content,guide_id,created_at,updated_at) values (?,?,?,?,?,?)',
            [$a['name'],$a['location'],$a['content'],$a['guide_id'],$a['created_at'],$a['updated_at']]);

        return redirect()->route('attractions.index');
    }
    public function index()
    {
        $attractions=DB::select('select * from attractions order by id DESC ');
        $data=[
            'attractions'=>$attractions,
        ];
        return view('attractions.index',$data);
    }

    public function show($id)
    {
       $attraction = DB::select('select * from attractions where id=?',[$id]);

       $data=[
           'attraction'=>$attraction[0],
       ];

       return view('attractions.show',$data);
    }

    public function create()
    {
    return view('attractions.create');
    }

    public function edit($id)
    {
        $attraction = DB::select('select * from attractions where id=?',[$id]);
        $data=[
            'attraction'=>$attraction[0],
        ];

        return view('attractions.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $a['name']=$request->input('name');
        $a['location']=$request->input('location');
        $a['content']=$request->input('content');
        DB::update('update attractions set name=?,location=?,content=? where id=?',
            [$a['name'],$a['location'],$a['content'],$id]);

        return redirect()->route('attractions.index');
    }
    public function destroy($id)
    {
        DB::delete('delete from attractions where id=?', [$id]);
        return redirect()->route('attractions.index');
    }
}
