
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>LIV DOC TAXI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('front/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('front/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('front/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: EstateAgency
      Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body >

<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    @guest
    <div class="title-box-d">
        <h3 class="title-d">ВХОД В СИСТЕМУ</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
     <div id="app">
         <login-component></login-component>
     </div>
    @else
        <div class="title-box-d">
            <h3 class="title-d">Перейти в личный кабиент</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <a href="/upanel">Личный кабинет</a>
        </div>
    @endguest
</div>
<!--/ Form Search End /-->

<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">

        <a class="navbar-brand text-brand" href="index.html">MyDoc<span class="color-b">Taxi</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false" >
            @guest
                Вход
            @else
               Личный кабиент
            @endguest
        </button>
    </div>
</nav>
<!--/ Nav End /-->

<!--/ Carousel Star /-->
<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(front/img/slaid1.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title mb-4">
                                        MyDocTaxi - легко и просто
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(front/img/slaid2.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title mb-4">
                                       MyDocTaxi - легко и просто
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--/ Carousel end /-->

<!--/ Services Star /-->
<section class="section-services section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">О сервисе</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-gamepad"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Простота</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                           Удобный и понятный интерфейс
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-usd"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Цена</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Использование сервиса бесплатно
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-home"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Дистационо</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Сформировать документы быстро и надежна не выходя из дома
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Services End /-->


<!--/ Testimonials Star /-->
<section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Отзывы</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
            <div class="carousel-item-a">
                <div class="testimonials-box">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="testimonial-img">
                                <img src="front/img/testimonial-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="testimonial-ico">
                                <span class="ion-ios-quote"></span>
                            </div>
                            <div class="testimonials-content">
                                <p class="testimonial-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                    debitis hic ber quibusdam
                                    voluptatibus officia expedita corpori.
                                </p>
                            </div>
                            <div class="testimonial-author-box">
                                <img src="front/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                                <h5 class="testimonial-author">Albert & Erika</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a">
                <div class="testimonials-box">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="testimonial-img">
                                <img src="front/img/testimonial-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="testimonial-ico">
                                <span class="ion-ios-quote"></span>
                            </div>
                            <div class="testimonials-content">
                                <p class="testimonial-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                    debitis hic ber quibusdam
                                    voluptatibus officia expedita corpori.
                                </p>
                            </div>
                            <div class="testimonial-author-box">
                                <img src="front/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                                <h5 class="testimonial-author">Pablo & Emma</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Testimonials End /-->

<!--/ footer Star /-->
<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">О сервисе</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            Сервис преднозначен для формирование
                            документов.
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Phone .</span> contact@example.com</li>
                            <li class="color-a">
                                <span class="color-text-a">Email .</span> +54 356 945234</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container"></div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="front/lib/jquery/jquery.min.js"></script>
<script src="front/lib/jquery/jquery-migrate.min.js"></script>
<script src="front/lib/popper/popper.min.js"></script>
<script src="front/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="front/lib/easing/easing.min.js"></script>
<script src="front/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="front/lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="front/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="front/js/main.js"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
