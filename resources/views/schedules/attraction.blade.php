@extends('layouts.guide')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
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
