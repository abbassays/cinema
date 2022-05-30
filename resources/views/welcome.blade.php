<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Entro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div> -->
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">


                                    <!-- component logo -->
                                    <div class="logo">
                                        <a href="/"><img class="h-1" src="images/ic-logo.png" alt="#" /></a>
                                    </div>
                                    <!-- logo end -->


                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9 nav-section">


                            <div class="menu-area">
                                <div class="limit-box">

                                    @extends('layouts.footer')
                                    @section('content')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- end header -->
            <section class="slider_section">
                {{-- --}}

                <div class="abs">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">



                            {{-- start loop here --}}
                            
                            <div class="carousel-item active abs">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="text-bg">
                                                    <span>NOW SHOWING</span>
                                                    {{-- @foreach ($movies as $movie) --}}
                                                    {{-- {{$movies[0]['movie_poster']}} --}}
                                                    <h1>{{$movies[0]['title']}}</h1>
                                                    <p>{{$movies[0]['description']}}</p>
                                                    <img class="bg-img" src="{{$movies[1]['movie_poster']}}" alt="">

                                                    {{-- @endforeach --}}
                                                    <a href="#">Music & Entertainment</a> <a href="#">Buy Tickets </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- --}}


                            <div class="carousel-item">

                                <div class="container ">
                                    <div class="carousel-caption">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="text-bg">
                                                    <span>NOW SHOWING</span>
                                                    <h1>{{$movies[1]['title']}}</h1>
                                                    <p>{{$movies[1]['description']}}</p>
                                                    <a href="#">Music & Entertainment</a><a href="#">Buy Tickets </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="carousel-item">

                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="text-bg">
                                                    <span>NOW SHOWING</span>
                                                    <h1>{{$movies[2]['title']}}</h1>
                                                    <p>{{$movies[2]['description']}}</p>
                                                    <a href="#">Music & Entertainment</a> <a href="#">Buy Tickets </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>

                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </a>
                    </div>

                </div>

            </section>
        </div>
    </header>

    <!-- upcoming -->
    <div id="upcoming" class="upcoming">
        <div class="container-fluid padding_left3">
            <div class="row display_boxflex">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="box_text">
                        <div class="titlepage">
                            <h2>Upcoming Concerts</h2>
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of
                            letters, as opposed to using 'Content here, content here', making it lookIt is a long
                            established fact
                            that a reader will be distracted by the readable content of a page when looking at its
                            layout. The point
                            of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                            opposed to using
                            'Content here, content here', making it look</p>
                        <a href="Javascript:void(0)">Read More</a>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
                    <div class="upcomimg">
                        <figure><img src="images/up.jpg" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end upcoming -->

    @stop

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>