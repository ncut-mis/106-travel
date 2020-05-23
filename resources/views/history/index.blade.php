@extends('layouts.test')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class=out1 style='text-align:center'>
        <font size="10">
            <b>旅遊歷史記錄</b>
        </font>
    </div>
    <div >
        <table class="table table-bordered table-hover" >
            <thead>
            <tr>

                <th>&nbsp;&nbsp;名稱</th>
                <th>出遊日期</th>
                <th>回家日期</th>
                <th>導遊費用</th>

            </tr>
            </thead>

            <tbody id="Mytable100" name="Mytable100">
            @foreach($travels as $travels)
                <tr>
                    @if(strtotime($today)>strtotime($travels->start)&&$travels->pay==1)

                    <td><form action="{{route('history.show')}}" method="post">
                            {{ csrf_field() }}
                            <input type = "hidden" id = "id" name = "id" value = "{{$travels->id}}">
                            <input type = "hidden" id = "name" name = "name" value = "{{$travels->name}}">
                            <input type = "hidden" id = "start" name = "start" value = "{{$travels->start}}">
                            <input type = "hidden" id = "end" name = "end" value = "{{$travels->end}}">
                            <button type="submit" class="btn btn-link"><font color="blue">{{$travels->name}}</font></button>
                        </form></td>
                    <td>{{$travels->start}}</td>
                    <td>{{$travels->end}}</td>
                    <td>{{$travels->total}}元</td>
                    <td> <button type="button" class="btnSelect btn btn-primary" data-toggle="modal" data-target="#exampleModal8">
                            複製該旅遊成為新的旅遊規劃
                        </button></td>
                    <td  style="display:none">{{$travels->id}}</td>
                    <td  style="display:none">{{$travels->name}}</td>
                </tr>
            @endif
            @endforeach
            </tbody>
        </table>
{{--        {{$chgpage->links()}}--}}

    </div>
    </div>
    </div>
    </h1>
    <!--'複製'彈出視窗的內容 Modal -->
    <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe8" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabe8">複製成為新的旅遊規劃</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('history.create') }}" method="POST">
                    {{ csrf_field() }}
                    <input  type="hidden" class="form-control" name="travels_id" id="travels_id" value="">
                    <input type = "hidden" id = "getstart" name = "getstart" value = "">
                    <input type = "hidden" id = "getend" name = "getend" value = "">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('旅遊名稱:') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control " name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('出遊日期:') }}</label>
                        <div class="col-md-6">
                            <input id="start" type="date" class="form-control " name="start" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('結束日期:') }}</label>
                        <div class="col-md-6">
                            <input id="end" type="date" class="form-control " name="end" value="">
                        </div>
                    </div>
                    如果新增日期少於原本日期，則只複製原本日期數中的行程

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">新增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <!-- 給'複製'彈出視窗資料的java script -->
    <script>
        $(document).ready(function(){
// code to read selected table row cell data (values).
            $("#Mytable100").on('click','.btnSelect',function(){
                // get the current row
                var currentRow=$(this).closest("tr");
                var col5=currentRow.find("td:eq(5)").html();
                var col1=currentRow.find("td:eq(1)").html();
                var col2=currentRow.find("td:eq(2)").html();

                $('#travels_id').val(col5.trim());
                $('#getstart').val(col1.trim());
                $('#getend').val(col2.trim());
            });
        });
    </script>

