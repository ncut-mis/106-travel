<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Creative - Start Bootstrap Theme</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
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
                            <th width="100"  style="text-align: center"><font color="white">名稱</font></th>
                            <th width="200"  style="text-align: center"><font color="white">出遊日期</font></th>
                            <th width="200"  style="text-align: center"><font color="white">導遊費用</font></th>
                            <th width="100"  style="text-align: center"><font color="white">備註</font></th>
                        </tr>

                            @foreach($travels as $travels)
                                <tr>
                                <td>{{$travels->id}}</td>
                                <td>{{$travels->name}}</td>
                                <td>{{$travels->stat}}</td>
                                <td>{{$travels->total}}元</td>
                                <td>
                                    <form action="{{route('schedules.index')}}" method="post">
                                        {{ csrf_field() }}
                                        <input type = "hidden" id = "id" name = "id" value = "{{$travels->id}}">

                                        <button type="submit" class="btn btn-danger">修改行程</button>
                                    </form>
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
                <!-- 刪除的Modal -->
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
                                確認是否要刪除該旅遊計畫
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



        </div>
                <div class="col-lg-8 align-self-baseline">
                    <button type="button" class="btnSelect btn btn-primary" data-toggle="modal" data-target="#exampleModal2" >
                        新增旅遊規劃
                    </button>
                    <!--'修改'彈出視窗的內容 Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">新增旅遊規劃</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
{{--                                <form action="{{ route('admin.account.update') }}" method="POST">--}}
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <label>旅遊名稱</label>
                                        <label >出遊日期</label>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                            <button type="submit" class="btn btn-primary">新增</button>
                                        </div>
{{--                                </form>--}}
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
                var col0=currentRow.find("td:eq(0)").html();
                var col1=currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value
                var col2=currentRow.find("td:eq(2)").html(); // get current row 3rd table cell  TD value
                var col3=currentRow.find("td:eq(4)").html();


                $('#update_id').val(col0.trim());
                $('#update_name').val(col1.trim());
                $('#update_email').val(col2.trim());
                $('#update_status').val(col3.trim());

            });
        });
    </script>
                </div>
                </div>
         </div>
</header>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>


