@extends('layouts.guide')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')

<div class="content">
    <div class="row">
        <div class="col-12">
            <h2>{{$attraction->name}}</h2>
            <a href="{{route('attractions.index')}}" class="btn btn-secondary btn-xl">返回</a>
            <a href="{{route('attractions.edit',$attraction->id)}}" class="btn btn-primary btn-xl">編輯</a>
            <a href="{{route('attractions.open',$attraction->id)}}" class="btn btn-success btn-xl" >啟用</a>
            <a href="{{route('attractions.stop',$attraction->id)}}" class="btn btn-warning btn-xl">停用</a>
            <a href="#" class="btn btn-danger btn-xl" onclick="document.getElementById('delete').submit()">刪除</a>
            <form method="post" action="{{route('attractions.destroy',$attraction->id)}}" id="delete">
                @csrf
                {{ method_field('DELETE') }}
            </form>

            <nav id="navbar-example2" class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#"></a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#fat">簡介</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mdo">行程介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#video">影片</a>
                    </li>
                </ul>
            </nav>
            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                <div class="col-12">
                    <div class="card">
                <div class="card-header" id="fat">
                    簡介
                </div>
                <div class="card-body">
                    {{$attraction->content}}
                </div>
                 <div class="card" >
                     <div class="card-header" id="mdo">
                         行程介紹
                     </div>
                     <div class="row">
                         @foreach($files as $file)
                             <div class="col-md-4">
                                 <div class="card">
                                     <img class="figure-img img-fluid rounded"  src="{{Storage::url($file->path)}}">

                                     <div class="card-body">
                                         <strong class="card-title"> <?php echo str_replace(".jpg","",$file->title);?> </strong>
                                         <p class="card-text">{{$file->created_at->diffForHumans()}}</p>
                                     <!-- <form action="{{route('delete.file',$file->id)}}" name="pay" id="pay" method="post"> -->
                                         <form action="{{route('delete.file',$file->id)}}"  method="post">
                                             @csrf
                                             <textarea rows="3" type="text" name="content" id="content"  class="form-control" cols="20">{{$file->description}}</textarea>
                                             <input type = "hidden" id = "file_id" name = "file_id" value = "{{$file->id}}">
                                             <button  type="submit" class="btn btn-primary btn-sm" onclick="return SubmitForm(this.form)" name="attraction_id" id="attraction_id" value="{{$attraction_id}}">儲存文字</button>
                                             &nbsp;&nbsp;&nbsp;&nbsp;
{{--                                             <button type="submit" class="btn btn-danger btn-sm" name="delete_button" id="delete_button" value="{{$attraction_id}}">刪除圖片</button>--}}

                                             <!DOCTYPE html>
                                             <html>
                                             <head>
                                                 <meta charset="utf-8">
                                                 <title>導遊</title>
                                             </head>
                                             <body>
                                             <button onclick="myFunction()"  class="btn btn-danger btn-sm" type="submit" name="delete_button" id="delete_button" >刪除照片</button>
                                             <p id="demo"></p>
                                             <script>
                                                 function myFunction(){
                                                     var x;
                                                     var r=confirm("是否刪除此張照片");
                                                     if (r==true){
                                                         x="你按下了\"确定\"按钮!";
                                                     }
                                                     else{
                                                         x="你按下了\"取消\"按钮!";
                                                     }
                                                     document.getElementById("demo").innerHTML=x;
                                                 }
                                             </script>

                                             </body>
                                             </html>

                                         </form>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                 </div>

               <div class="card">
                   <div class="card-header" id="video">
                       影片
                   </div>


                   <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$attraction->video_path}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        </div>
    </div>
</div>



<script>
    function SubmitForm(frm){
//      document.("表单的name值").action
//      document.("表单的name值").submit
//      frm.submit();
        frm.action="{{route('update.file')}}";
    }
</script>
    </div>
</div>
</div>
