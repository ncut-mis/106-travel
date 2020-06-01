@extends('layouts.test')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class=out1 style='text-align:center'><font size="7">
            <b>{{$name}}</b>
        </font>
    </div>
    <form action="{{route('schedules.reindex')}}" method="get">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction}}>
        <input type="hidden" class="form-control" id="update_id" name="update_id" value={{$b1->id}}>
        <input type="hidden" class="form-control" id="name" name="name" value={{$name}}>
        <input type="hidden" class="form-control" id="start" name="start" value={{$start}}>
        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
        &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger">返回</button>
    </form>
    <script>
        department=new Array();
        department[1]=["選擇景點","九份", "野柳", "十分瀑布", "金瓜石", "黃金博物館","基隆廟口夜市","和平島","無耳茶壺山登山步道","國立海洋科技博物館","平溪老街"];
        department[2]=["選擇景點","台北101", "國立故宮博物院", "中正紀念堂", "陽明山國家公園", "龍山寺","西門町","士林夜市","台北市立動物園","象山","國立國父紀念館"];
        department[3]=["選擇景點","淡水漁人碼頭", "紅毛城", "福隆海水浴場", "林本源園邸","碧潭","朱銘美術館","烏來水岸溫泉","鶯歌陶瓷博物館","三峽老街","富貴角"];
        department[4]=["選擇景點","小人國主題樂園", "石門水壩", "慈湖陵寢","小烏來瀑布","永安漁港","大溪老街","中壢觀光夜市","拉拉山自然保護區","龍潭大池","三民蝙蝠洞"];
        department[5]=["選擇景點","六福村主題遊樂園", "新竹市立動物園", "新竹都城隍廟", "小叮噹科學主題樂園", "香山濕地","青青草原","豆腐岩","新竹市眷村博物館","竹塹城迎曦門","新竹17公里海岸風景區"];
        department[6]=["選擇景點","六福村主題遊樂園", "新竹市立動物園", "新竹都城隍廟", "小叮噹科學主題樂園", "香山濕地","青青草原","豆腐岩","新竹市眷村博物館","竹塹城迎曦門","新竹17公里海岸風景區"];
        department[7]=["選擇景點","雪霸國家公園", "魚藤坪斷橋", "飛牛牧場", "三義木雕博物館","獅頭山","火炎山","好望角","觀霧國家森林遊樂區","台灣客家文化館","西湖渡假村"];
        department[8]=["選擇景點","逢甲夜市", "一中街", "921地震教育園區","彩虹村","高美野生動物保護區","麗寶樂園","臺中國家歌劇院","臺中公園","國立台灣美術館","秋紅谷景觀生態公園"];
        department[9]=["選擇景點","鹿港天后宮", "彰化扇形車庫", "臺灣玻璃館", "猴探井天空之橋", "鹿港民俗文物館","八卦山大佛風景區","鹿港龍山寺","田尾公路花園","溪湖糖廠","芳苑-王功燈塔"];
        department[10]=["選擇景點","日月潭", "清境農場", "合歡山", "九族文化村", "玉山","日月潭纜車","奧萬大","溪頭自然教育園區","向山行政暨遊客中心","中台禪寺"];
        department[11]=["選擇景點","劍湖山世界主題樂園", "國定古蹟-北港朝天宮", "古坑綠色隧道公園", "澄霖沉香味道森林館", "蜜蜂故事館","千巧谷牛樂園牧場","蘿莎玫瑰山莊","延平老街","五年千歲公園","雲林故事館"];
        department[12]=["選擇景點","國立故宮南院", "優遊吧斯-鄒族文化部落 ", "巨木群棧道", "二延平山步道","大塔山","阿里山山脈","曾文水庫","東石漁人碼頭","奮起湖老街","小笠原山觀景台"];
        department[13]=["選擇景點","國立故宮南院", "優遊吧斯-鄒族文化部落 ", "巨木群棧道", "二延平山步道","大塔山","阿里山山脈","曾文水庫","東石漁人碼頭","奮起湖老街","小笠原山觀景台"];
        department[14]=["選擇景點","赤崁樓", "安平古堡", "奇美博物館","臺南孔廟","花園夜市","台江國家公園","台灣開拓史料蠟像館","安平老街","國立臺灣文學館","億載金城"];
        department[15]=["選擇景點","愛河", "龍虎塔", "六合觀光夜市", "駁二藝術特區", "高雄85大樓","佛光山佛陀紀念館","義大遊樂世界","壽山","瑞豐夜市","新堀江商圈"];
        department[16]=["選擇景點","琉球嶼", "國立海洋生物博物館", "鵝鑾鼻燈塔", "大鵬灣國家風景區", "墾丁白沙灣","貓鼻頭公園","墾丁大街","風吹砂","涼山瀑布","社頂自然公園"];
        department[17]=["選擇景點","台灣史前文化博物館", "臺東森林公園", "知本溫泉", "鐵道藝術村","小野柳","海濱公園","琵琶湖","卑南遺址","富岡漁港","台東月世界"];
        department[18]=["選擇景點","清水斷崖", "遠雄海洋公園", "七星潭","鯉魚潭","砂卡礑步道","錐麓古道","東大門夜市","松園別館","石梯坪","瑞穗牧場"];
        department[19]=["選擇景點","龜山島", "冬山河親水公園", "羅東夜市", "蘇澳冷泉公園", "幾米公園","羅東運動公園","明池","五峰旗瀑布","礁溪溫泉公園","冬山伯朗大道"];
        department[20]=["選擇景點","澎湖跨海大橋", "奎壁山摩西分海", "雙心石滬", "大菓葉柱狀玄武岩", "藍洞","吉貝島水上活動","西瀛虹橋","澎湖天后宮","後寮天堂路","海洋牧場"];
        department[21]=["選擇景點","中堡藍曬圖", "慈湖", "翟山坑道", "建功嶼","莒光樓","得月樓","瓊林戰鬥坑道 ","新湖漁港","太武山風景區 ","復國墩觀景台"];
        department[22]=["選擇景點","馬港天后宮", "媽祖宗教文化園區", "四維夫人村","津沙聚落","大漢據點","雲臺山","親民步道","福山照壁","福澳港","馬祖故事館"];
        function renew(index){
            for(var i=0;i<department[index].length;i++)
                document.myForm.select_name.options[i]=new Option(department[index][i], department[index][i]);	// 設定新選項
            document.myForm.select_name.length=department[index].length;	// 刪除多餘的選項
        $(document).ready(function() {
            var i = $('#select_name').change(function () {
                $text=$('#select_name').val();
                document.getElementById("update_name").value=$text
            })});
        }
    </script>
    {{$b1->start}}123
    <form name="myForm" class="form-horizontal" action="{{ route('schedules.update') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="update_id" name="update_id" value={{$b1->id}}>
        <input type="hidden" class="form-control" id="name" name="name" value={{$name}}>
        <input type="hidden" class="form-control" id="start" name="start" value={{$start}}>
        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
        <div  class="form-group" >
            <label class="control-label col-sm-2" >日期：</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_start" name="update_start" style="width:120px; height:50px;"  value={{$b1->start}} readonly="readonly" >
            </div>
        </div>
        <div class="form-group">
            <label for="location">&nbsp;&nbsp;&nbsp;&nbsp;旅遊區域： </label>
            <select type="text" class="selectpicker"  onChange="renew(this.selectedIndex);" name="select_region" id="select_region" style="width:100px; height:35px;" value="">
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
                &nbsp;&nbsp;&nbsp;<label class="control-label" >景點：</label>
                <select type="text" class="selectpicker" name="select_name" id="select_name" style="width:120px; height:35px; value="">
                    <option value="">請先選擇縣市
                </select>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_name" name="update_name" style="width:300px; height:50px;" value={{$b1->name}}>
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
        &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="store" class="click">儲存</button>

    </form>
    @if($b1->guide_id != "")
        <table class="table table-bordered table-hover" >
            <form action="{{route('scheduleguides.show1')}}" method="post">
                {{ csrf_field() }}

                <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction}}>
                <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$b1->id}}>
                <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
                <input type = "hidden" id = "schedule" name = "schedule" value ={{$b1->id}}>
                <input type = "hidden" id="name" name="name" value = {{$name}}>
                &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger">查看目前媒合的導遊資訊</button>
            </form>
            <form action="{{route('schedules.matchcancel')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction}}>
                <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">
                <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
                <input type = "hidden" id = "name" name = "name" value = "{{$name}}">
                &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger">取消目前媒合的導遊</button>
            </form>
        <table>
    @else
        @if($b1->name == NUll || $b1->region==NUll)
            <form onclick="return false" id="form1" name="form1"  action="{{route('scheduleguides.index')}}" method="post">
                {{ csrf_field() }}
                <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">
                <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
                <input type = "hidden" id = "name" name = "name" value = "{{$name}}">
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-danger" name="match" id="match" value="媒合導遊">
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
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-danger" name="match" id="match" value="媒合導遊">
                </form>
            @endif

    @endif

