<head>
<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Title  -->
<title>1234</title>

<!-- Favicon  -->
<link rel="icon" href="img/core-img/favicon.ico">

<!-- Style CSS -->
<link rel="stylesheet" href="style.css">

</head>

<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="preload-content">
        <div id="sonar-load"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Grids -->
<div class="grids d-flex justify-content-between">
    <div class="grid1"></div>
    <div class="grid2"></div>
    <div class="grid3"></div>
    <div class="grid4"></div>
    <div class="grid5"></div>
    <div class="grid6"></div>
    <div class="grid7"></div>
    <div class="grid8"></div>
    <div class="grid9"></div>
</div>

<!-- ***** Main Menu Area Start ***** -->
<div class="mainMenu d-flex align-items-center justify-content-between">
    <!-- Close Icon -->
    <div class="closeIcon">
        <i class="ti-close" aria-hidden="true"></i>
    </div>
    <!-- Logo Area -->
    <div class="logo-area">
        <font color="white" size="25" >歡迎{{$a->name}}</font>
    </div>
    <!-- Nav -->
    <div class="sonarNav wow fadeInUp" data-wow-delay="1s">
        <nav>
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('guide') }}">修改基本資料</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('attractions.index') }}">編輯專長景點</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation.index') }}">顯示目前被預約行程</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">查詢帶團歷史紀錄</a>
                </li>

                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        登出<span class="caret"></span>
                    </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>


                </li>
            </ul>
        </nav>
    </div>
    <!-- Copwrite Text -->
    <div class="copywrite-text">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
</div>
<!-- ***** Main Menu Area End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="menu-area d-flex justify-content-between">
                    <!-- Logo Area  -->
                    <div class="logo-area">
                        <a href="index.html">{{$a->name}}首頁</a>
                    </div>

                    <div class="menu-content-area d-flex align-items-center">

                        <span class="navbar-toggler-icon" id="menuIcon"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Hero Area Start ***** -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>Sand Storm</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>New York View</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>The Desert</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide4.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>Mountains Hike</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>Sand Storm</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>New York View</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>The Desert</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide4.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>Mountains Hike</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>Sand Storm</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>New York View</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>The Desert</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/slide4.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <div class="line"></div>
                            <h2>Mountains Hike</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Hero Area End ***** -->

<!-- ***** Portfolio Area Start ***** -->
<div class="portfolio-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-title">
                    <h2>“In photography there is a reality so subtle that it becomes more <span>real</span> than reality.”</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-5">
                <div class="single-portfolio-item mt-100 portfolio-item-1 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                        <h2>Reality</h2>
                    </div>
                    <div class="portfolio-thumb">
                        <img src="img/bg-img/p1.png" alt="">
                    </div>
                    <div class="portfolio-meta">
                        <p class="portfolio-date">Feb 02, 2018</p>
                        <h2>Italy in the sunset</h2>
                    </div>
                </div>
            </div>
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-6">
                <div class="single-portfolio-item mt-230 portfolio-item-2 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                    </div>
                    <div class="portfolio-thumb">
                        <img src="img/bg-img/p2.png" alt="">
                    </div>
                    <div class="portfolio-meta">
                        <p class="portfolio-date">Feb 02, 2018</p>
                        <h2>Mountain Landscape</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-10">
                <div class="single-portfolio-item mt-100 portfolio-item-3 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                        <h2>Photography</h2>
                    </div>
                    <div class="portfolio-thumb">
                        <img src="img/bg-img/p3.png" alt="">
                    </div>
                    <div class="portfolio-meta">
                        <p class="portfolio-date">Feb 02, 2018</p>
                        <h2>Foggy sunset over the lake</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-6">
                <div class="single-portfolio-item portfolio-item-4 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                    </div>
                    <div class="portfolio-thumb">
                        <img src="img/bg-img/p2.png" alt="">
                    </div>
                    <div class="portfolio-meta">
                        <p class="portfolio-date">Feb 02, 2018</p>
                        <h2>Clouds on mountain top</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-5">
                <div class="single-portfolio-item portfolio-item-5 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                        <h2>Hope</h2>
                    </div>
                    <div class="portfolio-thumb">
                        <img src="img/bg-img/p5.png" alt="">
                    </div>
                    <div class="portfolio-meta">
                        <p class="portfolio-date">Feb 02, 2018</p>
                        <h2>Over the canion</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-4">
                <div class="single-portfolio-item portfolio-item-6 wow fadeIn">
                    <div class="portfolio-thumb">
                        <img src="img/bg-img/p6.png" alt="">
                    </div>
                    <div class="portfolio-meta">
                        <p class="portfolio-date">Feb 02, 2018</p>
                        <h2>Mirror lake</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-4">
                <div class="single-portfolio-item portfolio-item-7 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                        <h2>Future</h2>
                    </div>
                    <div class="portfolio-thumb">
                        <img src="img/bg-img/p7.png" alt="">
                    </div>
                    <div class="portfolio-meta">
                        <p class="portfolio-date">Feb 02, 2018</p>
                        <h2>Mirror lake</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Portfolio Area End ***** -->

<!-- ***** Call to Action Area Start ***** -->
<div class="sonar-call-to-action-area section-padding-0-100">
    <div class="backEnd-content">
        <h2>Dream</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="call-to-action-content wow fadeInUp" data-wow-delay="0.5s">
                    <h2>I am an experienced photographer</h2>
                    <h5>Let’s talk</h5>
                    <a href="#" class="btn sonar-btn mt-100">contact me</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Call to Action Area End ***** -->

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Copywrite Text -->
                <div class="copywrite-text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

</body>

</html>
