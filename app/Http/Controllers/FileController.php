<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Guide;
use App\Attraction;
use Auth;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=File::orderBy('created_at','DESC')->paginate(30);

        return view('file.index',['files'=>$files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request,[
//            'file' => 'required|file|mimes:png,jpg,webp,gif,pdf,xps,odt,docx|max:20000'
//        ]);
        $files = $request->file('file');
        foreach ($files as $file){
             File::create([
                'title'=>$file->getClientOriginalName(),
                'description'=>'',
                'path'=>$file->store('storage')
             ]);

        }
        return redirect('/file')->with('success','上傳成功');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dl=File::find($id);
        return Storage::download($dl->path,$dl->title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_descr(Request $request)
    {
        //
        
        $attraction_id=$request->input('attraction_id');
        $file=File::where('id', $request->input("file_id"))->first(); 
        $file->description = $request->input("content");
        $file->save();
        
        return redirect('/attractions/'.$attraction_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $attraction_id=$request->input('delete_button');

        $del=File::find($id);
        Storage::delete($del->path);
        $del->delete();
        return redirect('/attractions/'.$attraction_id);
    }
}