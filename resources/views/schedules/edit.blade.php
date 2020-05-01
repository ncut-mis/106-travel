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

        <div  class="form-group" >
            <label class="control-label col-sm-2" >日期:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_region" name="update_region"  value={{$start}} readonly="readonly" >
            </div>
        </div>
        <div  class="form-group" >
            <label class="control-label col-sm-2" for="email">旅遊區域:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_region" name="update_region" value={{$b1->region}}>
            </div>
        </div>
{{--        <div class="form-group">--}}
{{--            <label class="control-label col-sm-2" for="pwd">出發時間:</label>--}}
{{--            <div class="col-sm-10">--}}
{{--                <input type="datetime-local" class="form-control" id="update_start" name="update_start"  value={{$b1->start}}>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label class="control-label col-sm-2" for="pwd">結束時間:</label>--}}
{{--            <div class="col-sm-10">--}}
{{--                <input type="datetime-local" class="form-control" id="update_end" name="update_end"  value={{$b1->end}}>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">內容描述:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_content" name="update_content"  value={{$b1->content}}>
            </div>
        </div>

        <button type="submit" class="btn btn-default">儲存</button>
    </form>

        </div>
    </div>
