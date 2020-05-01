@extends('layouts.travelcase')

@section('test')
<!-- 資料表-->

                            <div >
                    <table class="table table-bordered table-hover" >
                        <thead>
                        <tr>

                            <th>名稱</th>
                            <th>出遊日期</th>
                            <th>回家日期</th>
                            <th>導遊費用</th>

                        </tr>
                        </thead>
                        <tbody id="Mytable">
                            @foreach($chgpage as $travels)
                                <tr>

                                <td><form action="{{route('schedules.index')}}" method="post">
                                        {{ csrf_field() }}
                                        <input type = "hidden" id = "id" name = "id" value = "{{$travels->id}}">
                                        <input type = "hidden" id = "name" name = "name" value = "{{$travels->name}}">
                                        <input type = "hidden" id = "start" name = "start" value = "{{$travels->start}}">
                                        <input type = "hidden" id = "end" name = "end" value = "{{$travels->end}}">
                                        <button type="submit" class="btn btn-danger">{{$travels->name}}</button>
                                    </form></td>
                                    <td>{{$travels->start}}</td>
                                    <td>{{$travels->end}}</td>
                                <td>{{$travels->total}}元</td>

                                <td>

                                    <form action="{{route('schedules.index')}}" method="post">
                                        {{ csrf_field() }}
                                        <input type = "hidden" id = "id" name = "id" value = "{{$travels->id}}">
                                        <input type = "hidden" id = "name" name = "name" value = "{{$travels->name}}">
                                        <input type = "hidden" id = "start" name = "start" value = "{{$travels->start}}">
                                        <input type = "hidden" id = "end" name = "end" value = "{{$travels->end}}">
                                        <button type="submit" class="btn btn-danger">修改行程</button>
                                    </form>


                                </td>

                                    <td> <button type="button" class="btnSelect btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                            修改旅遊
                                        </button>


                                        <button type="button" class="deleteSelect btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
                                            刪除旅遊
                                        </button></td>
                                    <td  style="display:none">{{$travels->id}}</td>
                                    <td  style="display:none">{{$travels->name}}</td>
                                </tr>

                            @endforeach
                            </tbody>
                     </table>
                      {{$chgpage->links()}}
                            </div>
                            </div>
                     </div>
                </h1>
        </div>
                <div class="col-lg-8 align-self-baseline">
                    <button type="button" class="btn btn btn-primary" data-toggle="modal" data-target="#exampleModal1" >
                        新增旅遊規劃
                    </button>
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
                                                <input id="start" type="date" class="form-control " name="start" value="">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('結束日期:') }}</label>
                                                <div class="col-md-6">
                                                    <input id="end" type="date" class="form-control " name="end" value="">
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
                        <label >編號</label>
                        <input type="text" class="form-control" name="update_id" id="update_id"    readonly="readonly">
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
                var col6=currentRow.find("td:eq(6)").html();
                var col7=currentRow.find("td:eq(7)").html();
                var col1=currentRow.find("td:eq(1)").html();
                var col2=currentRow.find("td:eq(2)").html();

                $('#update_id').val(col6.trim());
                $('#update_name').val(col7.trim());
                $('#update_start').val(col1.trim());
                $('#update_end').val(col2.trim());
            });
        });
    </script>

{{--    //修改部分--}}

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

                var col6=currentRow.find("td:eq(6)").html();

                $('#delete_id').val(col6.trim());
            });
        });
    </script>

</header>

@endsection
