@extends('layouts.test')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <input type="text" class="form-control" id="update_start" name="update_start" style="width:120px; height:50px;"  value={{$b1->start}} readonly="readonly" >
            </div>
        </div>

        <div class="form-group">
            <label for="location">&nbsp;&nbsp;&nbsp;&nbsp;旅遊區域： </label>
            <select type="text" class="selectpicker" name="select_region" id="select_region" style="width:100px; height:50px;" value="">
                <option value="">請選擇縣市</option>
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
        <script type="text/javascript">
            //將下拉式選單的值抓出並顯示在inupt中
            $(document).ready(function() {
                var i = $('#select_region').change(function () {
                    $text=$('#select_region').val();
                    document.getElementById("update_region").value=$text
                })});
        </script>
            <div  class="form-group" >
                <label class="control-label col-sm-2" >目前選擇的旅遊區域為：</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="update_region" name="update_region" style="width:70px; height:50px;" readonly="readonly" value={{$b1->region}}>
                </div>
            </div>
        <script type="text/javascript">
            //取值再設值
            $(document).ready(function() {

                    $(".click").click(function(){
                        ($("#update_region").val());
                        $("#select_region").val($("#update_region").val())
                })
            });
        </script>
{{--        google地圖--}}
{{--        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1872629.7674644934!2d120.6786654!3d23.5511977!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1588430013281!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}

            <div  class="form-group" >
            <label class="control-label col-sm-2" >景點:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_name" name="update_name" style="width:500px; height:50px;" value={{$b1->name}}>
            </div>
        </div>
        <div  class="form-group" >
            &nbsp;&nbsp;&nbsp;<label class="control-label" >住宿：</label>
            <select type="text" class="selectpicker" name="select_room" id="select_room" style="width:120px; height:35px;" value="">
                <option value="">選擇住宿形式</option>
                <option value="民宿名稱為：">民宿</option>
                <option value="飯店名稱為：">飯店</option>
                <option value="旅館名稱為：">旅館</option>
                <option value="露營地點為：">露營</option>
                <option value="其他：">其他</option>
            </select>
            <script type="text/javascript">
                //將下拉式選單的值抓出並顯示在inupt中
                $(document).ready(function() {
                    var i = $('#select_room').change(function () {
                        $text=$('#select_room').val();
                        document.getElementById("update_room").value=$text
                    })});
            </script>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_room" name="update_room" style="width:300px; height:50px;" value={{$b1->room}}>
            </div>
        </div>
        <div  class="form-inline">

              <label class="control-label">&emsp;早餐：</label>
            <select type="text" class="selectpicker" name="select_breakfast" id="select_breakfast" style="width:120px; height:35px;" value="">
                <option value="">選擇餐點形式</option>
                <option value="中式：">中式</option>
                <option value="西式：">西式</option>
                <option value="其他：">其他</option>
            </select>
            <script type="text/javascript">
                //將下拉式選單的值抓出並顯示在inupt中
                $(document).ready(function() {
                    var i = $('#select_breakfast').change(function () {
                        $text=$('#select_breakfast').val();
                        document.getElementById("update_breakfast").value=$text
                    })});
            </script>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="update_breakfast" name="update_breakfast"  value={{$b1->breakfast}}>
                <label class="control-label">&emsp;午餐：</label>
            <select type="text" class="selectpicker" name="select_lunch" id="select_lunch" style="width:120px; height:35px;" value="">
                <option value="">選擇餐點形式</option>
                <option value="中式：">中式</option>
                <option value="西式：">西式</option>
                <option value="其他：">其他</option>
            </select>
            <script type="text/javascript">
                //將下拉式選單的值抓出並顯示在inupt中
                $(document).ready(function() {
                    var i = $('#select_lunch').change(function () {
                        $text=$('#select_lunch').val();
                        document.getElementById("update_lunch").value=$text
                    })});
            </script>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="update_lunch" name="update_lunch"  value={{$b1->lunch}}>
                <label class="control-label ">&emsp;晚餐：</label>
            <select type="text" class="selectpicker" name="select_dinner" id="select_dinner" style="width:120px; height:35px;" value="">
                <option value="">選擇餐點形式</option>
                <option value="中式：">中式</option>
                <option value="西式：">西式</option>
                <option value="其他：">其他</option>
            </select>
            <script type="text/javascript">
                //將下拉式選單的值抓出並顯示在inupt中
                $(document).ready(function() {
                    var i = $('#select_dinner').change(function () {
                        $text=$('#select_dinner').val();
                        document.getElementById("update_dinner").value=$text
                    })});
            </script>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="update_dinner" name="update_dinner"  value={{$b1->dinner}}>
        </div>
        <br>
        <div  class="form-group" >
            <label class="control-label" >&nbsp;&nbsp;&nbsp;交通：</label>
            <select type="text" class="selectpicker" name="select_traffic" id="select_traffic" style="width:120px; height:35px;" value="">
                <option value="">選擇交通方式</option>
                <option value="步行">步行</option>
                <option value="開車">開車</option>
            <option value="騎車">騎車</option>
            <option value="火車">火車</option>
            <option value="高鐵">高鐵</option>
            <option value="腳踏車">腳踏車</option>
            <option value="其他：">其他</option>
            </select>
            <script type="text/javascript">
                //將下拉式選單的值抓出並顯示在inupt中
                $(document).ready(function() {
                    var i = $('#select_traffic').change(function () {
                        $text=$('#select_traffic').val();
                        document.getElementById("update_traffic").value=$text
                    })});
            </script>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_traffic" name="update_traffic" style="width:300px; height:50px;" value={{$b1->traffic}}>
            </div>
        </div>

        <div  class="form-group" >
            <label class="control-label col-sm-2" >出發地點:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_going" name="update_going" style="width:300px; height:50px;" value={{$b1->going}}>
            </div>
        </div>
        <div  class="form-group" >
            <label class="control-label col-sm-2" >目的地:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_arriving" name="update_arriving" style="width:300px; height:50px;" value={{$b1->arriving}}>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">內容描述:</label>
            <div class="col-sm-10">
                <textarea rows="5" type="text" name="update_content" id="update_content"  class="form-control" cols="20"  >{{$b1->content}}</textarea>
{{--                <input type="text" class="form-control" id="update_content" name="update_content" style="width:1550px; height:100px;" value={{$b1->content}}>--}}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <input type="hidden" class="form-control" id="update_guide_id" name="update_guide_id" style="width:1550px; height:100px;" value={{$b1->guide_id}}>
            </div>
        </div>
        <button type="submit" name="store" class="click">儲存</button>

    </form>
    <form action="{{route('schedules.reindex')}}" method="get">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="update_id" name="update_id" value={{$b1->id}}>
        <input type="hidden" class="form-control" id="name" name="name" value={{$name}}>
        <input type="hidden" class="form-control" id="start" name="start" value={{$start}}>
        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>

        <button type="submit" class="btn btn-danger">返回</button>
    </form>
    @if($b1->guide_id != "")
        <form action="{{route('scheduleguides.show1')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction}}>
            <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$b1->id}}>
            <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
            <input type = "hidden" id = "schedule" name = "schedule" value ={{$b1->id}}>
            <input type = "hidden" id="name" name="name" value = {{$name}}>

            <button type="submit" class="btn btn-danger">查看目前媒合的導遊資訊</button>
        </form>
        <form action="{{route('schedules.matchcancel')}}" method="post">
            {{ csrf_field() }}
            <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">
            <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">

            <input type = "hidden" id = "name" name = "name" value = "{{$name}}">

            <button type="submit" class="btn btn-danger">取消目前媒合的導遊</button>
        </form>
    @else
        @if($b1->name == NUll || $b1->region==NUll)
            <form onclick="return false" id="form1" name="form1"  action="{{route('scheduleguides.index')}}" method="post">
                {{ csrf_field() }}
                <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">
                <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
                <input type = "hidden" id = "name" name = "name" value = "{{$name}}">
                <input type="submit" class="btn btn-danger" name="match" id="match" value="媒合導遊">
            </form>
            <script>
                $(document).ready(function(){
                    $("#match").click(function(){
                        if($("#update_region").val()==""){
                            alert("請先選擇縣市");
                            eval("document.form1['update_region'].focus()");
                        }else if($("#update_name").val()==""){
                            alert("請先填寫景點");
                            eval("document.form1['update_name'].focus()");
                        }else{
                            alert("請先按下儲存");
                        }
                    })
                })
            </script>
            @else
                <form  id="form1" name="form1"  action="{{route('scheduleguides.index')}}" method="post">
                    {{ csrf_field() }}
                    <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">
                    <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
                    <input type = "hidden" id = "name" name = "name" value = "{{$name}}">
                    <input type="submit" class="btn btn-danger" name="match" id="match" value="媒合導遊">
                </form>
            @endif

    @endif

