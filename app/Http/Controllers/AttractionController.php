<?php

namespace App\Http\Controllers;

use App\User;
use App\Guide;
use App\Attraction;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use http\Env\Response;


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
        $a['price']=$request->input('price');
        $a['created_at']=now();
        $a['updated_at']=now();



        DB::insert('insert into attractions(name,location,content,guide_id,price,created_at,updated_at) values (?,?,?,?,?,?,?)',
            [$a['name'],$a['location'],$a['content'],$a['guide_id'],$a['price'],$a['created_at'],$a['updated_at']]);

        $b = Attraction::SELECT('id')->orderBy('id', 'desc')->first();


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

//處理檔案上傳
        if ($request->hasFile('files')) {
                $files = $request->file('files');
                foreach($files as $file){
                    $info = [
                        'mime-type' => $file->getMimeType(),
                        'original_filename' => $file->getClientOriginalName(),
                        'extension' => $file->getClientOriginalExtension(),
                        'size' => $file->getClientSize(),
                    ];
                    $file->storeAs('public/attractions/'.$b->id, $info['original_filename']);
                }
        }



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

        $b = Attraction::SELECT('id')->orderBy('id', 'desc')->first();
       $files = get_files(storage_path('app/public/attractions/'.$b->id));

       $data=[
           'attraction'=>$attraction[0],
           'files' =>$files,
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
    public function stop($id)
    {
        $att_id=Attraction::where('id', $id)->first();
        $att_id->status =0;
        $att_id->save();

        $attractions=DB::select('select * from attractions order by id DESC ');

        $data=[
            'attractions'=>$attractions,
        ];
        return view('attractions.index',$data);
    }
    public function start()
    {
        //
    }
    public function open($id)
    {
        $att_id=Attraction::where('id', $id)->first();
        $att_id->status = 1;
        $att_id->save();

        $attractions=DB::select('select * from attractions order by id DESC ');

        $data=[
            'attractions'=>$attractions,
        ];
        return view('attractions.index',$data);


    }

    public function download($id,$filename)
    {
        $file = storage_path('app/public/attractions/'.$id."/".$filename);
        return response()->download($file);
    }


}
