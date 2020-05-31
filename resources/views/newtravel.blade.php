@extends('layouts.guide')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
</div>
<div class="col-12">
    <div class="card">
        <div class=out1 style='text-align:center'>
            <font size="10">
                <b>{{$attraction->name}}</b>
            </font>
        </div>

    </div>
    <div class="card-header">
        簡介
    </div>
    <div class="card-body">
        {{$attraction->content}}
    </div>

    <div class="card">
        <div class="card-header">
            行程介紹
        </div>
        <div class="row">
            @foreach($files as $file)
                <div class="col-md-4">
                    <div class="card">
                        @if($file!=NULL)
                            <img class="figure-img img-fluid rounded"  src="{{Storage::url($file->path)}}">

                            <div class="card-body">
                                <strong class="card-title"> <?php echo str_replace(".jpg","",$file->title);?> </strong>
                                <p class="card-text">{{$file->created_at->diffForHumans()}}</p>
                            <!-- <form action="{{route('delete.file',$file->id)}}" name="pay" id="pay" method="post"> -->
                                <form action="{{route('delete.file',$file->id)}}"  method="post">
                                    @csrf
                                    <textarea rows="3" type="text" name="content" id="content"  class="form-control" cols="20">{{$file->description}}</textarea>
                                    <input type = "hidden" id = "file_id" name = "file_id" value = "{{$file->id}}">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach

        </div>

    </div>

    <div class="card">
        <div class="card-header">
            影片
        </div>
        @if($file!=NULL)
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$attraction->video_path}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endif
        <br><br>
        <div class="card-header">
            導遊資訊
        </div>
        <div class="card-body">
            導遊名稱:{{$user->name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;導遊電話:{{$user->phone}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;導遊信箱:{{$user->email}}
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
