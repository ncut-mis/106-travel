@extends('layouts.guide')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <h2>{{$attraction->name}}</h2>
            <a href="{{route('attractions.index')}}" class="btn btn-secondary btn-sm">返回</a>
            <a href="{{route('attractions.edit',$attraction->id)}}" class="btn btn-primary btn-sm">編輯</a>
            <a href="{{route('attractions.open',$attraction->id)}}" class="btn btn-success btn-sm" >啟用</a>
            <a href="{{route('attractions.stop',$attraction->id)}}" class="btn btn-warning btn-sm">停用</a>
            <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete').submit()">刪除</a>


            <form method="post" action="{{route('attractions.destroy',$attraction->id)}}" id="delete">
                @csrf
                {{ method_field('DELETE') }}
            </form>

        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    內容
                </div>
                <div class="card-body">
                    {{$attraction->content}}
                </div>

                <div class="card">
                    <div class="card-header">
                        圖片
                    </div>
                    <div class="row">

                        @foreach($files as $file)


                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" width="200" height="300" src="{{Storage::url($file->path)}}">

                                    <div class="card-body">
                                        <strong class="card-title"> <?php echo str_replace(".jpg","",$file->title);?> </strong>
                                        <p class="card-text">{{$file->created_at->diffForHumans()}}</p>
                                        <!-- <form action="{{route('delete.file',$file->id)}}" name="pay" id="pay" method="post"> -->
                                        <form action="{{route('delete.file',$file->id)}}"  method="post">
                                            @csrf
                                            <textarea rows="3" type="text" name="content" id="content"  class="form-control" cols="20">{{$file->description}}</textarea>
                                            <input type = "hidden" id = "file_id" name = "file_id" value = "{{$file->id}}">
                                            <button  type="submit" class="btn btn-primary" onclick="return SubmitForm(this.form)" name="attraction_id" id="attraction_id" value="{{$attraction_id}}">儲存文字</button>
                                            <button type="submit" class="btn btn-danger" name="delete_button" id="delete_button" value="{{$attraction_id}}">刪除圖片</button>

                                        </form>


                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>

                <div class="card">
                    <div class="card-header">
                        影片
                    </div>

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
