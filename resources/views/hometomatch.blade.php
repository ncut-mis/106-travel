@extends('layouts.test')

@section('content')
<div class=out1 style='text-align:center'>
    <font size="10">
        <b>旅遊規劃</b>
    </font>
</div>
<style>
    .div-a{ float:left;width:49%;border:1px}
    .div-b{ float:right;}
    .div-c{ float:right;}

</style>
<div class="div-a"><b><font size="12">規劃中</font></b></div>
<div class="div-b">
    <form  action="{{route('home')}}" method="get">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-info">回首頁</button>
    </form>
</div>
<div class="div-c">
    <form  action="{{route('travelguide.attraction')}}" method="post">
        {{ csrf_field() }}
        <input type = "hidden" id = "att_id" name = "att_id" value = "{{$att_id}}">
        <button type="submit" class="btn btn-danger">返回</button>
    </form>
</div>
<!-- 資料表-->
                    <table class="table table-bordered table-hover" >
                        <thead>
                        <tr>
                            <th>&nbsp;&nbsp;名稱</th>
                            <th>出遊日期</th>
                            <th>回家日期</th>
                            <th>導遊費用</th>


                        </tr>
                        </thead>
                        <tbody id="Mytable">

{{--規劃中表格--}}
                                    @foreach($travels as $travels)
                                <tr>
                                    @if(strtotime($today)<=strtotime($travels->start)&&$travels->pay==0)
                                <td><form action="{{route('showschedule')}}" method="post">
                                        {{ csrf_field() }}
                                        <input type = "hidden" id = "id" name = "id" value = "{{$travels->id}}">
                                        <input type = "hidden" id = "name" name = "name" value = "{{$travels->name}}">
                                        <input type = "hidden" id = "start" name = "start" value = "{{$travels->start}}">
                                        <input type = "hidden" id = "end" name = "end" value = "{{$travels->end}}">
                                        <input type = "hidden" id = "total" name = "total" value = "{{$travels->total}}">
                                        <input type = "hidden" id = "att_id" name = "att_id" value = "{{$att_id}}">
                                        <button type="submit" class="btn btn-link"><font color="blue">{{$travels->name}}</font></button>
                                    </form></td>
                                    <td>{{$travels->start}}</td>
                                    <td>{{$travels->end}}</td>
                                <td>{{$travels->total}}元</td>
                                    <td  style="display:none">{{$travels->id}}</td>
                                    <td  style="display:none">{{$travels->name}}</td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                     </table>
        </div>
<div class="col-lg-8 align-self-baseline">
    <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#exampleModal1" >
        新增旅遊規劃
    </button>
</div>

<!--'新增'彈出視窗的內容 Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">新增旅遊規劃</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('hometomatch.store') }}" method="post">
                {{ csrf_field() }}
                <input type = "hidden" id = "att_id" name = "att_id" value =  "{{$att_id}}">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('旅遊名稱:') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control " name="name" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('出遊日期:') }}</label>
                    <div class="col-md-6">
                        <input id="start" type="date" class="form-control " name="start" value="" min="{{$today}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('結束日期:') }}</label>
                    <div class="col-md-6">
                        <input id="end" type="date" class="form-control " name="end" value="" min="{{$today}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">新增</button>
                </div>
            </form>
        </div>
    </div>
</div>

</header>



@endsection
