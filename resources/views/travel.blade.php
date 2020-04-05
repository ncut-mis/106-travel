<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Creative - Start Bootstrap Theme</title>
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger"href="{{ url('home') }}">回首頁</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger"href="{{ url('travel') }}">旅遊歷史</a></li>
            </ul>
        </div>
</nav>

<!-- 資料表-->
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
                            <th width="120"  style="text-align: center"><font color="white">名稱</font></th>
                            <th width="120"  style="text-align: center"><font color="white">出遊日期</font></th>
                            <th width="150"  style="text-align: center"><font color="white">導遊費用</font></th>
                            <th width="50"  style="text-align: center"><font color="white">備註</font></th>
                        </tr>

                            @foreach($travels as $travels)
                                <tr>
                                <td>{{$travels->id}}</td>
                                <td>{{$travels->name}}</td>
                                <td>{{$travels->stat}}</td>
                                <td>{{$travels->total}}元</td>
                                <td>
                                        <button type="button" class="btnSelect btn btn-primary" data-toggle="modal" data-target="#exampleModal2" >
                                            修改行程
                                        </button>
                                        /
                                        <button type="button" class="deleteSelect btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
                                            刪除行程
                                        </button>
                                </td>
                            @endforeach
                        </thead>
                     </table>
                            </div>
                            </div>
                     </div>
                </h1>
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
                            <form action="{{ route('home1') }}" method="POST">POST
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



        </div>
                <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5"></p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ url('travel') }}">新增旅遊規劃</a>
                </div>
         </div>
</header>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
</footer>
</body>
</html>


