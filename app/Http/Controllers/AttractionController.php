<?php

namespace App\Http\Controllers;

use App\User;
use App\Guide;
use App\Attraction;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use http\Env\Response;
use App\File;


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
        $a['guide_id']=auth()->user()->guides->id;
        $a['price']=$request->input('price');
//        $a['created_at']=now();
//        $a['updated_at']=now();

        Attraction::create($a);

//        $b['attraction_id']=auth()->user()->guides->attractions->id;
//        File::create($b);

//       // DB::insert('insert into attractions(name,location,content,guide_id,price,created_at,updated_at) values (?,?,?,?,?,?,?)',
//            [$a['name'],$a['location'],$a['content'],$a['guide_id'],$a['price'],$a['created_at'],$a['updated_at']]);

//        $camip = new camip; camip資料表   新增的
//        $att_id=Attraction::where('id', $id)->first();  修改
//        $camip->id = $request->input("inputcamid);  inputcamid是textbox的id 或name"
//        $camip->name = $request->input("inputcamname");  前面的->是欄位
//        $camip->ip = trim($request->input("inputcamip"));//
//        $camip->picsite = 'campic/'.$request->input("inputcamid").'.jpg';
//        $camip->status = '已儲存';
//        $camip->save();

//        //把資料表內的資料抓出來
//        $camall=array();
//        $camall = camip::all();

        $attraction_last= Attraction::orderBy('id', 'DESC')->first();
        $attraction_id=$attraction_last->id;

        $files = $request->file('file');
        //$b['attraction_id']=auth()->user()->guides->id;


        foreach ($files as $file){
            File::create([
                'title'=>$file->getClientOriginalName(),
                'description'=>'',
                'attraction_id'=>$attraction_id,
                'path'=>$file->store('storage')
            ]);
        }



        return redirect()->route('attractions.index')->with('success','上傳成功');
    }
    public function index()
    {

        $attractions=auth()->user()->guides->attractions;

        $data=[
            'attractions'=>$attractions
        ];
        return view('attractions.index',$data);


    }


    public function show(Attraction $attraction)
    {
        $attraction_id=$attraction->id;

        $attraction = Attraction::Where('id',$attraction_id)->first();



        $files=File::Where('attraction_id',$attraction_id)->orderBy('created_at','DESC')->paginate(30);




       $data=[
           'attraction'=>$attraction,'attraction_id'=>$attraction_id,

           'files' =>$files,
       ];

       return view('attractions.show',$data);
    }

    public function create()
    {
    return view('attractions.create');
    }

    public function edit(Attraction $attraction,Request $request)
    {
       // $attraction = DB::select('select * from attractions where id=?',[$id]);


        $data=[
            'attraction'=>$attraction
        ];

        return view('attractions.edit',$data);
    }

    public function update(Request $request, Attraction $attraction)
    {
        $a['name']=$request->input('name');
        $a['location']=$request->input('location');
        $a['content']=$request->input('content');
        $a['price']=$request->input('price');
//        DB::update('update attractions set name=?,location=?,content=?,price=? where id=?',
//            [$a['name'],$a['location'],$a['content'],$a['price'],$id]);
        $attraction->update($a);

        $attraction_last= Attraction::orderBy('id', 'DESC')->first();
        $attraction_id=$attraction_last->id;

        $files = $request->file('file');
        //$b['attraction_id']=auth()->user()->guides->id;


        foreach ($files as $file) {
            File::create([
                'title' => $file->getClientOriginalName(),
                'description' => '',
                'attraction_id' => $attraction_id,
                'path' => $file->store('storage')
            ]);
        }


        return redirect()->route('attractions.index');
    }
    public function destroy(Attraction $attraction)
    {
       // DB::delete('delete from attractions where id=?', [$id]);
        $attraction->delete();
        return redirect()->route('attractions.index');
    }
    public function stop($id)
    {
        $att_id=Attraction::where('id', $id)->first();
        $att_id->status =0;
        $att_id->save();


        return redirect('attractions');
    }

    public function open($id)
    {
        $att_id=Attraction::where('id', $id)->first();
        $att_id->status = 1;
        $att_id->save();

        return redirect('attractions');


    }

    public function download($id,$filename)
    {
        $file = storage_path('app/public/attractions/'.$id."/".$filename);
        return response()->download($file);
    }

}
