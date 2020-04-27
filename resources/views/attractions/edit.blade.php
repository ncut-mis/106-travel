@extends('layouts.guide')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <h2>修改專長景點</h2>
            <a href="{{url('attractions')}}" class="btn btn-secondary btn-sm">返回</a>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('attractions.update',$attraction->id)}}" enctype="multipart/form-data" >
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-inline">
                    <label for="name">景點名稱</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$attraction->name}}">
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="location">地點</label>
                    <select type="text" class="selectpicker" name="location" id="location" value="" >
                        class="selectpicker">
                        <option value="基隆市">基隆市</option>
                        <option value="台北市">台北市</option>
                        <option value="新北市">新北市</option>
                        <option value="桃園縣">桃園縣</option>
                        <option value="新竹市">新竹市</option>
                        <option value="新竹縣">新竹縣</option>
                        <option value="苗栗縣">苗栗縣</option>
                        <option value="台中市">台中市</option>
                        <option value="彰化縣">彰化縣</option>
                        <option value="南投縣">南投縣</option>
                        <option value="雲林縣">雲林縣</option>
                        <option value="嘉義市">嘉義市</option>
                        <option value="嘉義縣">嘉義縣</option>
                        <option value="台南市">台南市</option>
                        <option value="高雄市">高雄市</option>
                        <option value="屏東縣">屏東縣</option>
                        <option value="台東縣">台東縣</option>
                        <option value="花蓮縣">花蓮縣</option>
                        <option value="宜蘭縣">宜蘭縣</option>
                        <option value="澎湖縣">澎湖縣</option>
                        <option value="金門縣">金門縣</option>
                        <option value="連江縣">連江縣</option>

                    </select>
                </div>
                <br>
                <br>
                <div class="form-inline ">
                    <label for="content">內容</label>
                    <input type="text" class="form-control " name="content" id="content" value="{{$attraction->content}}">
                </div>
                <br>
                <br>
                <div class="form-inline">
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
