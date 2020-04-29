@extends('layouts.test')
@section('content')

    <form class="form-horizontal" action="{{ route('schedules.update') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="update_id" name="update_id" value={{$b1->id}}>
        <div class="form-group">
            <label for="location">旅遊區域:</label>
            <select type="text" class="selectpicker" name="update_region" id="update_region" style="width:100px; height:50px;" value="">
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
        <div  class="form-group" >
            <label class="control-label col-sm-2" >目前選擇的旅遊區域為:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_name" name="update_name" style="width:1550px; height:50px;" readonly="readonly"  value={{$b1->region}}>
            </div>
        </div>
        <div  class="form-group" >
            <label class="control-label col-sm-2" >旅遊地點:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_name" name="update_name" style="width:1550px; height:50px;" value={{$b1->name}}>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">內容描述:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_content" name="update_content" style="width:1550px; height:100px;" value={{$b1->content}}>
            </div>
        </div>

        <button type="submit" class="btn btn-default">儲存</button>
    </form>
    <form action="{{route('scheduleguides.index')}}" method="post">
        {{ csrf_field() }}
        <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">

        <button type="submit" class="btn btn-danger">媒合導遊</button>
    </form>

