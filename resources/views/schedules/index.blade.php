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
                                <th>內容</th>
                                <th>花費</th>
                                <th>操作鈕</th>
                            </tr>
                            </thead>
                                    <div style="display:none">
                                    </div>
                                @foreach($b1 as $b1)
                                <tr>
                                    <td>{{$b1->start}}</td>
                                    <td>{{$b1->region}}</td>
                                    <td>{{$b1->content}}</td>
                                    <td>{{$b1->cost}}</td>

                                    <td>
                                        <form action="{{ route('schedules.edit') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type = "hidden" id = "update_id" name = "update_id" value = "{{$b1->id}}">
                                            <input type = "hidden" id = "name" name = "name" value = "{{$name}}">
                                            <input type = "hidden" id = "start" name = "start" value = "{{$start}}">
                                            <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
{{--                                            <input type = "hidden" id = "region" name = "region" value = "{{$region}}">--}}
                                            <button type="submit" class="btn btn-success" name="id" id="id">編輯</button>
                                        </form>
{{--                                    <form action="{{ route('schedules.destroy') }}" method="POST">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        {{ method_field('DELETE') }}--}}
{{--                                        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$cc}}>--}}
{{--                                        <button type="submit" class="btn btn-success" name="a2" id="a2" value={{$b1->id}}>刪除</button>--}}
{{--                                    </form>--}}
                                    </td>
                                </tr>
                                    @endforeach
                        </table>
                    </div>






