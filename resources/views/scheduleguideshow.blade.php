@extends('layouts.guide')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <h2><center>{{$attraction->name}}</h2>
            @if($schedule_guide_id==NULL)
                <form action="{{route('scheduleguides.index2',$schedule_id)}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
                    <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
                    <input type = "hidden" id = "name" name = "name" value = {{$name}}>
                    <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
                    <input type = "hidden" id = "total" name = "total" value = "{{$total}}">
                    <button type="submit" class="btn btn-danger">返回</button>
                </form>
            @endif
            <nav id="navbar-example2" class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#"></a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#guide_name">導遊姓名</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guide_phone">聯絡電話</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guide_email">信箱</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fat">簡介</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guide_price">導遊費用</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mdo">行程介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#video">影片</a>
                    </li>
                </ul>
            </nav>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" id="guide_name">
                            導遊姓名
                        </div>
                        <div class="card-body">
                            {{$guide_name}}
                        </div>
                        <div class="card-header" id="guide_phone">
                            聯絡電話
                        </div>
                        <div class="card-body">
                            {{$guide_phone}}
                        </div>
                        <div class="card-header" id="guide_email">
                            信箱
                        </div>
                        <div class="card-body">
                            {{$guide_email}}
                        </div>
                        <div class="card-header" id="fat">
                            簡介
                        </div>
                        <div class="card-body">
                            {{$attraction->content}}
                        </div>
                        <div class="card-header" id="guide_price">
                            導遊費用
                        </div>
                        <div class="card-body">
                            新台幣 ${{$attraction->price}} 元
                        </div>
                        <div class="card">
                            <div class="card-header" id="mdo">
                                行程介紹
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
                        <div class="card">
                            @if($attraction->video_path==NULL)
                            <div class="card-header" id="video">
                                影片
                            </div>
                                <div class="card-body">
                                    無
                                </div>
                            @else
                                <div class="card-header" id="video">
                                    影片
                                </div>
                                <center><iframe width="560" height="315" src="https://www.youtube.com/embed/{{$attraction->video_path}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @endif
                        </div>
                @if($schedule_guide_id==NULL)
                    <form action="{{route('scheduleguides.reindex',$schedule_id)}}" method="post">
                        {{ csrf_field() }}
                        <input type = "hidden" id = "reservation" name = "reservation" value = "{{$reservation}}">
                        <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
                        <input type="hidden" class="form-control" id="match_id" name="match_id" value={{$guide_id}}>
                        <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
                        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
                        <input type = "hidden" id = "schedule" name = "schedule" value = "{{$schedule->id}}">
                        <input type = "hidden" id = "name" name = "name" value = {{$name}}>
                        <input type = "hidden" id = "total" name = "total" value = "{{$total}}">
                        <center><button type="submit" class="btn btn-danger">媒合導遊</button></center>
                    </form>
                @else
                    <form action="{{route('scheduleguides.rreindex',$schedule_id)}}" method="post">
                        {{ csrf_field() }}
                        <input type = "hidden" id = "reservation" name = "reservation" value = "{{$reservation}}">
                        <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
                        <input type="hidden" class="form-control" id="match_id" name="match_id" value={{$guide_id}}>
                        <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
                        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
                        <input type = "hidden" id = "schedule" name = "schedule" value = "{{$schedule->id}}">
                        <input type = "hidden" id = "name" name = "name" value = {{$name}}>
                        <input type = "hidden" id = "total" name = "total" value = "{{$total}}">
                        <center><button type="submit" class="btn btn-danger">返回</button></center>
                    </form>
                 @endif
            </div>
        </div>
    </div>
</div>
