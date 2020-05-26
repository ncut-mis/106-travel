@extends('layouts.test')
@section('content')
    <div class=out1 style='text-align:center'><font size="7">
            <b>{{$name}}</b>
        </font>
    </div>
    <div >
        <table class="table table-bordered table-hover" >
            <thead>
            <tr>

                <th>出遊日期</th>
                <th>區域</th>
                <th>飯店</th>
                <th>早餐</th>
                <th>午餐</th>
                <th>晚餐</th>
                <th>出發點</th>
                <th>目的地</th>
                <th>交通</th>
                <th>內容</th>
                <th>導遊費用</th>
                <th>已媒合導遊的景點</th>
            </tr>
            </thead>
            <div style="display:none">
            </div>
            @foreach($b1 as $b1)
                <tr>
                    <td>{{$b1->start}}</td>
                    <td>{{$b1->region}}</td>
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
                        @if($b1->attraction_id!=null)
                        <form action="{{route('schedules.attraction')}}" method="post">
                            {{ csrf_field() }}
                            <input type = "hidden" id = "att_id" name = "att_id" value = "{{$b1->attraction_id}}">
                            <button type="submit" class="btn btn-danger">觀看媒合的景點</button>
                        </form>
                        @endif
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
