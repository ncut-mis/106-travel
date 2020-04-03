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
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger"href="{{ url('home') }}">回首頁</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger"href="{{ url('travel') }}">旅遊歷史</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">

                    <table class="table table-bordered table-hover" >
                        <thead>
                        <tr>
                            <th style="text-align: center"><font color="white">編號</font></th>
                            <th style="text-align: center"><font color="white">名稱</font></th>
                            <th style="text-align: center"><font color="white">出遊日期</font></th>
                            <th style="text-align: center"><font color="white">導遊費用</font></th>
                            <th style="text-align: center"><font color="white">刪除</font></th>
                        </tr>

                            @foreach($travels as $travels)
                                <tr>
                                <td>{{$travels->id}}</td>
                                <td>{{$travels->name}}</td>
                                <td>{{$travels->stat}}</td>
                                <td>{{$travels->total}}元</td>
                                <td>刪除建未設
                                </td>
                            @endforeach


                        </thead>
                    </table>


                </h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5"></p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ url('travel') }}">新增旅遊規劃</a>
            </div>
        </div>
    </div>
</header>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
</footer>
</body>
</html>


