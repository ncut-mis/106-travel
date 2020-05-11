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
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <img class="card-img-bottom" src="..." alt="Card image cap">
                </div>
                <div class="card-footer">
                    附件:<br>
                    @foreach($files as $file)
                        <a href="{{route('attractions.download',['id'=>$attraction->id,'filename'=>$file])}}"> {{$file}}</a>><br>
                    @endforeach
                </div>
        </div>
    </div>
</div>
