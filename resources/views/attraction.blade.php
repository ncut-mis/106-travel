<header class="masthead">
    <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white font-weight-bold">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" >
    <thead>
    <tr>
        <th width="100"  style="text-align: center"><font color="white" >編號</font></th>
        <th width="100"  style="text-align: center"><font color="white">名稱</font></th>
        <th width="200"  style="text-align: center"><font color="white">出遊日期</font></th>
        <th width="200"  style="text-align: center"><font color="white">導遊費用</font></th>
        <th width="100"  style="text-align: center"><font color="white">備註</font></th>
    </tr>



@foreach($attractions as $attractions)
    <tr>
        <td>{{$attractions->id}}</td>
        <td>{{$attractions->name}}</td>


    </tr>
@endforeach

