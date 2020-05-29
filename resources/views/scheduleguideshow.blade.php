@extends('layouts.guide')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <form action="{{route('scheduleguides.index2',$schedule_id)}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
                <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
                <input type = "hidden" id = "name" name = "name" value = {{$name}}>
                <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
                <button type="submit" class="btn btn-danger">返回</button>
            </form>
            <h2>{{$attraction->name}}</h2>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            內容
                        </div>
                        <div class="card-body">

                            @if($attraction_name->guide_id==$guide_name->id && $guide_name->user_id == $user_name->id)
                                {{$user_name->name}}
                            @endif
{{--                            {{$attraction->content}}--}}
                        </div>
                        <div class="card-header">
                            導遊費用
                        </div>
                        <div class="card-body">
                            新台幣 ${{$attraction->price}} 元
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
                                                    <textarea rows="3" type="text" name="content" id="content"  class="form-control" readonly="readonly" cols="20">{{$file->description}}</textarea>
                                                    <input type = "hidden" id = "file_id" name = "file_id" value = "{{$file->id}}">

                                                </form>


                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>

                        </div>

                <form action="{{route('scheduleguides.reindex',$schedule_id)}}" method="post">
                    {{ csrf_field() }}
                    <input type = "hidden" id = "reservation" name = "reservation" value = "{{$reservation}}">
                    <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
                    <input type="hidden" class="form-control" id="match_id" name="match_id" value={{$guide_id}}>
                    <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
                    <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
                    <input type = "hidden" id = "schedule" name = "schedule" value = "{{$schedule->id}}">
                    <input type = "hidden" id = "name" name = "name" value = {{$name}}>
                    <button type="submit" class="btn btn-danger">媒合導遊</button>
                </form>
            </div>
        </div>
    </div>
</div>
