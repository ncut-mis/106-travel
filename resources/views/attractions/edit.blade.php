@extends('layouts.guide')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <h2>新增專長景點</h2>
            <a href="{{url('attractions')}}" class="btn btn-secondary btn-sm">返回</a>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('attractions.update',$attraction->id)}}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="name">景點名稱</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$attraction->name}}">
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="location">地點</label>
                    <input type="text" class="form-control" name="location" id="location" value="{{$attraction->location}}">
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="content">內容</label>
                    <input type="text" class="form-control" name="content" id="content" value="{{$attraction->content}}">
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="price">價錢</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{$attraction->price}}">
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="files">附件</label>
                    <input type="file" class="form-group" name="files[]" id="files" multiple>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">儲存</button>
            </form>

        </div>
    </div>
</div>
