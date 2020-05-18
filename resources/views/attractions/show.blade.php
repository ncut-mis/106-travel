@extends('layouts.guide')

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
                                    <img class="card-img-top" src="{{Storage::url($file->path)}}">
                                    <div class="card-body">
                                        <strong class="card-title">{{$file->title}}</strong>
                                        <p class="card-text">{{$file->created_at->diffForHumans()}}</p>
                                        <form action="{{route('delete.file',$file->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" name="delete_button" id="delete_button" value="{{$attraction_id}}">刪除</button>
                                            <a href="{{route('download.file',$file->id)}}" class="btn btn-primary">下載</a>
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
