@extends('layouts.test')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2>新增行程</h2>
                <a href="{{url('schedules')}}" class="btn btn-secondary btn-sm">返回</a>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('schedules.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="region">旅遊區域</label>
                        <input type="text" class="form-control" name="region" id="region" value="">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="start">出發時間</label>
                        <input type="datetime-local" class="form-control" name="start" id="start" value="">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="end">結束時間</label>
                        <input type="datetime-local" class="form-control" name="end" id="end" value="">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="content">內容描述</label>
                        <input type="text" class="form-control" name="content" id="content" value="">
                    </div>
                    <br>
                    <br>


                    <button type="submit" class="btn btn-primary btn-sm">儲存</button>
                </form>

            </div>
        </div>
    </div>
