@extends('layouts.travelcase')

@section('test')
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
    <form  action="{{route('history')}}" method="get">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">旅遊歷史記錄</button>
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
                                    @if(strtotime($today)<strtotime($travels->start)&&$travels->pay==0)
                                <td><form action="{{route('schedules.index')}}" method="post">
                                        {{ csrf_field() }}
                                        <input type = "hidden" id = "id" name = "id" value = "{{$travels->id}}">
                                        <input type = "hidden" id = "name" name = "name" value = "{{$travels->name}}">
                                        <input type = "hidden" id = "start" name = "start" value = "{{$travels->start}}">
                                        <input type = "hidden" id = "end" name = "end" value = "{{$travels->end}}">
                                        <input type = "hidden" id = "total" name = "total" value = "{{$travels->total}}">
                                        <button type="submit" class="btn btn-link"><font color="blue">{{$travels->name}}</font></button>
                                    </form></td>
                                    <td>{{$travels->start}}</td>
                                    <td>{{$travels->end}}</td>
                                <td>{{$travels->total}}元</td>
                                    <td> <button type="button" class="btnSelect btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                            修改旅遊
                                        </button>
                                        <button type="button" class="deleteSelect btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
                                            刪除旅遊
                                        </button></td>
                                    <td  style="display:none">{{$travels->id}}</td>
                                    <td  style="display:none">{{$travels->name}}</td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                     </table>
{{--                      {{$chgpage->links()}}--}}


                <div class="col-lg-8 align-self-baseline">
                    <button type="button" class="btn btn btn-primary" data-toggle="modal" data-target="#exampleModal1" >
                        新增旅遊規劃
                    </button>
        </div>


<div class="div-a"><b><font size="12">確認的旅遊記劃</font></b></div>
<table class="table table-bordered table-hover" >
    <thead>
    <tr>

        <th>&nbsp;&nbsp;名稱</th>
                <th>出遊日期</th>
                <th>回家日期</th>
                <th>導遊費用</th>

            </tr>
    </thead>
    <tbody id="Mytable1">
    @foreach($travels1 as $travels1)
        <tr>
            @if(strtotime($today)<strtotime($travels1->start)&&$travels1->pay==1)
                    <td><form action="{{route('schedules.show')}}" method="post">
                            {{ csrf_field() }}
                            <input type = "hidden" id = "id" name = "id" value = "{{$travels1->id}}">
                            <input type = "hidden" id = "name" name = "name" value = "{{$travels1->name}}">
                            <input type = "hidden" id = "start" name = "start" value = "{{$travels1->start}}">
                            <input type = "hidden" id = "end" name = "end" value = "{{$travels1->end}}">
                            <input type = "hidden" id = "total" name = "total" value = "{{$travels1->total}}">
                            <button type="submit" class="btn btn-link"><font color="blue">{{$travels1->name}}</font></button>
                        </form>
                    </td>
                    <td>{{$travels1->start}}</td>
                    <td>{{$travels1->end}}</td>
                    <td>{{$travels1->total}}元</td>
                    <td> <button type="button" class="btnSelect btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
                            取消旅遊
                        </button>
                    <td  style="display:none">{{$travels1->id}}</td>
                    <td  style="display:none">{{$travels1->name}}</td>
                <td style="display:none">{{$travels1->pay}}</td>
                <td style="display:none">{{$travels1->total}}</td>
            </tr>
        @endif
        @endforeach
        </tbody>
    </table>
    {{--                      {{$chgpage->links()}}--}}
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
            <form action="{{ route('travel.store') }}" method="POST">
                {{ csrf_field() }}
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



{{--//修改部分--}}
<!--'修改'彈出視窗的內容 Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">修改旅遊計畫</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('travel.edit') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type = "hidden" id = "getstart" name = "getstart" value = "">
                        <input type = "hidden" id = "getend" name = "getend" value = "">
                        <input  type="hidden" class="form-control" name="update_id" id="update_id"    >
                        <label >名稱</label>
                        <input type="text" class="form-control" name="update_name" id="update_name"   >

                        <label >出遊日期</label>
                        <input id="update_start" type="date" class="form-control " name="update_start" >
                        <label >結束日期</label>

                            <input id="update_end" type="date" class="form-control " name="update_end"  >

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-primary">修改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <!-- 給'修改'彈出視窗資料的java script -->
    <script>
        $(document).ready(function(){
// code to read selected table row cell data (values).
            $("#Mytable").on('click','.btnSelect',function(){
                // get the current row
                var currentRow=$(this).closest("tr");
                var col5=currentRow.find("td:eq(5)").html();
                var col6=currentRow.find("td:eq(6)").html();
                var col1=currentRow.find("td:eq(1)").html();
                var col2=currentRow.find("td:eq(2)").html();

                $('#update_id').val(col5.trim());
                $('#update_name').val(col6.trim());
                $('#getstart').val(col1.trim());
                $('#getend').val(col2.trim());
            });
        });
    </script>

{{--    //刪除部分--}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">確認刪除</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    確認是否要刪除資料
                </div>
                <form action="{{ route('travel.destroy') }}" method="POST">
                    {{ csrf_field() }}
                    <input type = "hidden" id = "delete_id" name = "delete_id" value = "0">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-danger">確認刪除</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- 給'刪除'彈出視窗資料的java script -->
    <script>
        $(document).ready(function(){
// code to read selected table row cell data (values).
            $("#Mytable").on('click','.deleteSelect',function(){
                // get the current row
                var currentRow=$(this).closest("tr");

                var col5=currentRow.find("td:eq(5)").html();

                $('#delete_id').val(col5.trim());
            });
        });
    </script>

</header>



{{--//取消部分--}}
<!--'取消'彈出視窗的內容 Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe4" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabe4">確認取消</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('travel.cancel') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <input style="display:none" type="text" class="form-control" name="cancel_id" id="cancel_id"   >
                    <label >確定取消該旅遊</label>
                    <input style="display:none" type="text" class="form-control" name="cancel_name" id="cancel_name" readonly >
                    <input style="display:none" type="text" class="form-control " name="cancel_pay" id="cancel_pay"  readonly>
                    <input style="display:none" type="text" class="form-control " name="cancel_start" id="cancel_start"  readonly>
<div>
    <label></label>
    <br>
    <label>將退還:</label>
    <input  type="text" class="form-control" name="cancel_doller" id="cancel_doller"  readonly >
    <lavel>元(20%將當作手續費而不退回，並且將取消媒合的導遊)</lavel>
</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">確認取消</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- 給'取消'彈出視窗資料的java script -->
<script>
    $(document).ready(function(){
// code to read selected table row cell data (values).
        $("#Mytable1").on('click','.btnSelect',function(){
            // get the current row
            var currentRow=$(this).closest("tr");
            var col1=currentRow.find("td:eq(1)").html();
            var col5=currentRow.find("td:eq(5)").html();
            var col6=currentRow.find("td:eq(6)").html();
            var col7=currentRow.find("td:eq(7)").html();
            var col8=currentRow.find("td:eq(8)").html();

            $('#cancel_start').val(col1.trim());
            $('#cancel_id').val(col5.trim());
            $('#cancel_name').val(col6.trim());
            $('#cancel_pay').val(col7.trim());
            $('#cancel_doller').val(col8.trim()*0.8);
        });
    });
</script>
@endsection
