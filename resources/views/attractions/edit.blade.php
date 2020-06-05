@extends('layouts.guide')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content">
    <div class="form-group">
        <div class="col-12">
            <h2>修改專長景點</h2>
            <a href="{{url('attractions')}}" class="btn btn-secondary btn-sm">返回</a>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('attractions.update',$attraction->id)}}"   enctype="multipart/form-data" >
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="name">景點名稱</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$attraction->name}}">
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="location">旅遊區域：</label>
                    <select type="text" class="selectpicker"  onChange="renew(this.selectedIndex);" name="location" id="location" style="width:100px; height:50px;" value="" >
                        <option value="{{$attraction->location}}">請選擇縣市</option>
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
                        var i = $('#location').change(function () {
                            $text=$('#location').val();
                            document.getElementById("update_location").value=$text
                        })});
                </script>

                <div  class="form-group" >
                    <label class="control-label col-sm-2" >目前選擇的旅遊區域為：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="update_location" name="update_location" style="width:70px; height:50px;" readonly="readonly" value={{$attraction->location}}>
                    </div>
                </div>
                <script type="text/javascript">
                    //取值再設值
                    $(document).ready(function() {

                        $(".click").click(function(){
                            ($("#update_location").val());
                            $("#location").val($("#update_location").val())
                        })
                    });
                </script>

                <br>
                <br>
                <div class="form-group ">
                    <label for="content">內容</label>
{{--                    //<input type="text" class="form-control " name="content" id="content" value="{{$attraction->content}}">--}}
                    <textarea rows="5" type="text" name="content" id="content"  class="form-control" cols="20"  >{{$attraction->content}}</textarea>
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
                    <label for="files">影片上傳</label>

                    <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="utf-8">
                        <script>
                            function myFunction(){
                                alert("進入Youtube→上方網址=後面的值複製起來→貼上到欄位");
                            }
                        </script>
                    </head>
                    <body>

                    <input type="button" onclick="myFunction()" value="如何複製Youtube影片網址" />

                    </body>
                    </html>

                    <div class="form-group">
                        <input type="text" class="form-control" name="video_path" id="video_path"  value="{{$attraction->video_path}}">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="photos">主圖片上傳</label>
                    <div class="form-group">
                        <input type="file" name="photo[]" multiple >
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="files">圖片上傳</label>
                    <div class="form-group">
                        <input type="file" name="file[]" multiple>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">儲存</button>
            </form>

        </div>
    </div>

</div>


