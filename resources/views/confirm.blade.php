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
                <input type="text" class="form-control" id="update_total" name="update_total" style="width:1550px; height:50px;" readonly="readonly"  value={{$total}}>
            </div>
        </div>
        <div  class="form-group" >
            <label class="control-label col" >付費方式:</label>
            <form action="{{ route('confirm.edit') }}" method="post">
                {{ csrf_field() }}
<form>
              <input type = "hidden" id = "travel_id" name = "travel_id" value = "{{$travel_id}}">
            &emsp;&emsp;<input  class="control-label" type="radio" name="paymethods" value="paypal">paypal
            &emsp;&emsp;<input  class="control-label" type="radio" name="paymethods" value="line pay">line pay
            &emsp;&emsp;<input  class="control-label" type="radio" name="paymethods" value="SmilePay">SmilePay
            &emsp;&emsp;<input  class="control-label" type="radio" name="@paymethods" value="PChomePay支付連">PChomePay支付連
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger" name="gopay" id="gopay">確認旅遊規劃並支付費用</button>
        </form>
</form>
        </div>
