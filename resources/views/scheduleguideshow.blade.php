@extends('layouts.guide')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <form action="{{route('scheduleguides.reindex',$schedule_id)}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
                <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
                <button type="submit" class="btn btn-danger">返回</button>
            </form>
            <h2>{{$attraction->name}}</h2>

        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">

                    {{$attraction->content}}
                </div>
                <div class="card-footer">
                    附件:<br>
                    @foreach($files as $file)
                        <a href="{{route('attractions.download',['id'=>$attraction->id,'filename'=>$file])}}"> {{$file}}</a>><br>
                        @endforeach
                </div>
                <form action="{{route('scheduleguides.reindex',$schedule_id)}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
                    <input type="hidden" class="form-control" id="match_id" name="match_id" value={{$guide_id}}>
                    <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
                    <button type="submit" class="btn btn-danger">媒合導遊</button>
                </form>
            </div>
        </div>
    </div>
</div>
