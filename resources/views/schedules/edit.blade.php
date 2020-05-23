@extends('layouts.test')
@section('content')
    <div class=out1 style='text-align:center'><font size="7">
            <b>{{$name}}</b>
        </font>
    </div>
    <form class="form-horizontal" action="{{ route('schedules.update') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="update_id" name="update_id" value={{$b1->id}}>
        <input type="hidden" class="form-control" id="name" name="name" value={{$name}}>
        <input type="hidden" class="form-control" id="start" name="start" value={{$start}}>
        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
        <div  class="form-group" >
            <label class="control-label col-sm-2" >日期:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_region" name="update_region" style="width:120px; height:50px;"  value={{$b1->start}} readonly="readonly" >
            </div>
        </div>

        <div class="form-group">
            <label for="location">旅遊區域:</label>
            <select type="text" class="selectpicker" name="update_region" id="update_region" style="width:100px; height:50px;" value="">
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

        @if($b1->region == NUll)
        @else
        <div  class="form-group" >
            <label class="control-label col-sm-2" >目前選擇的旅遊區域為:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_name" name="update_name" style="width:100px; height:50px;" readonly="readonly"  value={{$b1->region}}>
            </div>
        </div>
        @endif
{{--        google地圖--}}
{{--        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1872629.7674644934!2d120.6786654!3d23.5511977!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1588430013281!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}

        <div  class="form-group" >
            <label class="control-label col-sm-2" >景點:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_name" name="update_name" style="width:600px; height:50px;" value={{$b1->name}}>
            </div>
        </div>
        <div  class="form-group" >
            <label class="control-label col-sm-2" >住宿:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_room" name="update_room" style="width:600px; height:50px;" value={{$b1->room}}>
            </div>
        </div>
        <div  class="form-inline">

              <label class="control-label">&emsp;早餐:</label>
                <input type="text" class="form-control" id="update_breakfast" name="update_breakfast"  value={{$b1->breakfast}}>
                <label class="control-label">&emsp;午餐:</label>
                <input type="text" class="form-control" id="update_lunch" name="update_lunch"  value={{$b1->lunch}}>
                <label class="control-label ">&emsp;晚餐:</label>
                <input type="text" class="form-control" id="update_dinner" name="update_dinner"  value={{$b1->dinner}}>
        </div>
        <br>
        <div  class="form-group" >
            <label class="control-label col-sm-2" >交通:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_traffic" name="update_traffic" style="width:600px; height:50px;" value={{$b1->traffic}}>
            </div>
        </div>

{{--        <div  class="form-group" >--}}
{{--            <label class="control-label col-sm-2" >出發地點:</label>--}}
{{--            <div class="col-sm-10">--}}
{{--                <input type="text" class="form-control" id="update_name" name="update_name" style="width:1550px; height:50px;" value={{$b1->name}}>--}}
{{--            </div>--}}
{{--        </div>
{{--        <div  class="form-group" >--}}
{{--            <label class="control-label col-sm-2" >目的地:</label>--}}
{{--            <div class="col-sm-10">--}}
{{--                <input type="text" class="form-control" id="update_name" name="update_name" style="width:1550px; height:50px;" value={{$b1->name}}>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">內容描述:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_content" name="update_content" style="width:1550px; height:100px;" value={{$b1->content}}>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <input type="hidden" class="form-control" id="update_guide_id" name="update_guide_id" style="width:1550px; height:100px;" value={{$b1->guide_id}}>
            </div>
        </div>
{{--        <input type = "hidden" id = "total" name = "total" value = "{{$total}}">--}}
        <button type="submit" class="btn btn-default">儲存</button>
    </form>
    @if($b1->guide_id != "")
        <label class="">目前已有媒合導遊</label>

        <form action="{{route('schedules.matchcancel')}}" method="post">
            {{ csrf_field() }}
            <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">
            <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
            <button type="submit" class="btn btn-danger">取消目前媒合的導遊</button>
        </form>
    @else
        <form action="{{route('scheduleguides.index')}}" method="post">
            {{ csrf_field() }}
            <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">
            <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
            <button type="submit" class="btn btn-danger">媒合導遊</button>
        </form>

    @endif



