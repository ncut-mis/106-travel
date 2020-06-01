@extends('layouts.travelcase')

@section('content')


        <div class=out1 style='text-align:center'>
            <font size="10">
                <b>確認旅遊規劃~</b>
            </font>
        </div>
        <div  class="form-group" >
            <label class="control-label col-sm-2" >旅遊名稱:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_name" name="update_name" style="width:1550px; height:50px;" readonly="readonly"  value={{$name}}>
            </div>
        <div  class="form-group" >
            <label class="control-label col-sm-2" >費用為:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="update_total" name="update_total" style="width:1550px; height:50px;" readonly="readonly"  value={{$sum_total}}>
            </div>
        </div>
        <div  class="form-group" >
            <label class="control-label col" >付費方式:</label>
            <form action="{{ route('confirm.edit') }}" method="post">
                {{ csrf_field() }}
<form>
              <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
              <input type = "hidden" id = "total" name = "total" value = "{{$sum_total}}">
            &emsp;&emsp;<input  class="control-label" type="radio" name="paymethods" value="paypal" data-toggle="modal" data-target="#exampleModal4">Visa
            &emsp;&emsp;<input  class="control-label" type="radio" name="paymethods" value="line pay" data-toggle="modal" data-target="#exampleModal4">MasterCard
            &emsp;&emsp;<input  class="control-label" type="radio" name="paymethods" value="SmilePay" data-toggle="modal" data-target="#exampleModal4">JCB
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger" name="gopay" id="gopay">確認旅遊規劃並支付費用</button>
        </form>
</form>
        </div>
            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe4" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabe4">請填寫以下資料</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            {{ csrf_field() }}
                            <div class="modal-body">
                                    <div  class="form-group" >
                                        <label class="control-label col-sm-10" >信用卡卡號</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="1" name="1" value="">
                                        </div>
                                    </div>
                                <div  class="form-group" >
                                    <label class="control-label col-sm-10" >信用到期日</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="2" name="2" value="">
                                    </div>
                                </div>
                                <div  class="form-group" >
                                    <label class="control-label col-sm-10" >信用卡安全碼</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="3" name="3" value="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">確認</button>
                                </div>
                            </div>
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
