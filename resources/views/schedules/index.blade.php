@extends('layouts.test')
@section('content')
{{--    <form action="{{ route('schedules.create') }}" method="get">--}}
{{--        <button type="submit" class="btn btn-success" value="{{$cc}}" name="cc" id="cc">新增行程</button>--}}
{{--    </form>--}}

{{--新增行程不在這新增了--}}
{{--<a href="{{route('schedules.create',$cc)}}" class="btn btn-secondary btn-sm">新增行程</a>--}}


{{--之後排版用--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col"><span>旅遊日期</span></div>--}}
{{--        <div class="col"><span>行程內容</span></div>--}}
{{--        <div class="col"><span>住宿</span></div>--}}

{{--    </div>--}}
{{--    <div class="col1"><span>11</span></div>--}}
{{--    <div class="col1"><span>11</span></div>--}}

<?php $sum_total=0;
?>
<div class=out1 style='text-align:center'><font size="7">
        <b>{{$name}}</b>
    </font>
</div>
<style>
    .div-b{ float:right;}
    .div-c{ float:right;}

</style>
<div class="div-b">
    <form  action="{{route('home')}}" method="get">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-info">回首頁</button>
    </form>
</div>
<div class="div-c">
    <form  action="{{route('travel')}}" method="get">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">回旅遊規劃</button>
    </form>
</div>

                    <div >
                        <table class="table table-bordered table-hover" >
                            <thead>
                            <tr>

                                <th>出遊日期</th>
                                <th>區域</th>
                                <th>景點</th>
                                <th>飯店</th>
                                <th>早餐</th>
                                <th>午餐</th>
                                <th>晚餐</th>
                                <th>出發點</th>
                                <th>目的地</th>
                                <th>交通</th>
                                <th>內容</th>
                                <th>導遊費用</th>
                                <th>操作鈕</th>
                            </tr>
                            </thead>
                                    <div style="display:none">
                                    </div>
                                @foreach($b1 as $b1)
                                    <?php  $sum_total=$sum_total+$b1->cost; ?>
                                <tr>
                                    <td>{{$b1->start}}</td>
                                    <td>{{$b1->region}}</td>
                                    <td>{{$b1->name}}</td>
                                    <td>{{$b1->room}}</td>
                                    <td>{{$b1->breakfast}}</td>
                                    <td>{{$b1->lunch}}</td>
                                    <td>{{$b1->dinner}}</td>
                                    <td>{{$b1->going}}</td>
                                    <td>{{$b1->arriving}}</td>
                                    <td>{{$b1->traffic}}</td>
                                    <td>{{$b1->content}}</td>
                                    <td>{{$b1->cost}}</td>
                                    <td>
                                        <form action="{{ route('schedules.edit') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type = "hidden" id = "update_id" name = "update_id" value = "{{$b1->id}}">
                                            <input type = "hidden" id = "name" name = "name" value = "{{$name}}">
                                            <input type = "hidden" id = "start" name = "start" value = "{{$start}}">
                                            <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
                                            <input type = "hidden" id = "total" name = "total" value = "{{$total}}">

{{--                                            <input type = "hidden" id = "region" name = "region" value = "{{$region}}">--}}

                                            <button type="submit" class="btn btn-success" name="id" id="id">編輯</button>
{{--                                    <form action="{{ route('schedules.destroy') }}" method="POST">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        {{ method_field('DELETE') }}--}}
{{--                                        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$cc}}>--}}
{{--                                        <button type="submit" class="btn btn-success" name="a2" id="a2" value={{$b1->id}}>刪除</button>--}}
{{--                                    </form>--}}
                                        </form>

                                    </td>
                                </tr>
                                    @endforeach

                        </table>
                        <form action="{{ route('confirm.index') }}" method="POST">
                            {{ csrf_field() }}

                            <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
                            <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
                            <input type = "hidden" id = "name" name = "name" value = "{{$name}}">
                            <input type = "hidden" id = "start" name = "start" value = "{{$start}}">
                            <input type = "hidden" id = "sum_total" name = "sum_total" value = "{{$sum_total}}">
                            <button type="submit" class="btn btn-danger" name="id" id="id">確認旅遊規劃</button>
                        </form>
                    </div>






