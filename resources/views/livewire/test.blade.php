<div>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">


        <!-- title of site -->
        <title>CarVilla</title>

        <!-- For favicon png -->
        <link rel="shortcut icon" type="image/icon" href="{{ asset('frontend/assets/logo/favicon.png') }}" />

        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">

        <!--linear icon css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/linearicons.css') }}">

        <!--flaticon.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">

        <!--animate.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

        <!-- bootsnav -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootsnav.css') }}">

        <!--style.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

        <!--responsive.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!--welcome-hero start -->
        <section id="home" class="welcome-hero">

            <!-- top-area Start -->
            <div class="top-area">
                <div class="header-area">
                    <!-- Start Navigation -->
                    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"
                        data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                        <div class="container">

                            <!-- Start Header Navigation -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbar-menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="index.html">carvilla<span></span></a>
                            </div><!--/.navbar-header-->
                            <!-- End Header Navigation -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                    <li class=" scroll active"><a href="#home">home</a></li>
                                    <li class="scroll"><a href="#service">service</a></li>
                                    <li class="scroll"><a href="#featured-cars">featured cars</a></li>
                                    <li class="scroll"><a href="#new-cars">new cars</a></li>
                                    <li class="scroll"><a href="#brand">brands</a></li>
                                    <li class="scroll"><a href="#contact">contact</a></li>
                                </ul><!--/.nav -->
                            </div><!-- /.navbar-collapse -->
                        </div><!--/.container-->
                    </nav><!--/nav-->
                    <!-- End Navigation -->
                </div><!--/.header-area-->
                <div class="clearfix"></div>

            </div><!-- /.top-area-->
            <!-- top-area End -->

            <div class="container">
                <div class="welcome-hero-txt">
                    <h2>get your desired car in resonable price</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.
                    </p>
                    <button class="welcome-btn" onclick="window.location.href='#'">contact us</button>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="model-search-content">



                            <div class="row">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-md-offset-1 col-md-2 col-sm-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Search Input</label>
                                                    <input type="search" placeholder="Tap to Search ..."
                                                        class="form-control" wire:model.live="search">
                                                </div>
                                                <div class="mb-3">
                                                    <select wire:model.live="type">
                                                        <option  value="" selected disabled>Select Type</option>
                                                        <option value="future">FUTURE</option>
                                                        <option value="new">NEW</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-offset-1 col-md-2 col-sm-12">
                                    <{{ asset('frontend//d') }}iv>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section><!--/.welcome-hero-->
        <!--welcome-hero end -->
        <!--featured-cars start -->
        <section id="featured-cars" class="featured-cars">
            <div class="container">
                <div class="section-header">
                    <p>checkout <span>the</span> featured cars</p>
                    <h2>featured cars</h2>
                </div><!--/.section-header-->
                <div class="featured-cars-content">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-featured-cars">
                                    <div class="featured-img-box">
                                        <div class="featured-cars-img">
                                            <img src="{{ $product->image }}" alt="cars">
                                        </div>
                                        <div class="featured-model-info">
                                            <p>
                                                model: {{ $product->model }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="featured-cars-txt">
                                        <h2><a href="#">{{ $product->name }}</a></h2>
                                        <h3>${{ $product->price }}</h3>
                                        <p>
                                            {{ $product->content }}
                                        </p>
                                        <h4>{{ $product->type }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!--/.container-->

        </section><!--/.featured-cars-->
        <!--featured-cars end -->
        <!--blog start -->
        <section id="blog" class="blog"></section><!--/.blog-->
        <!--blog end -->
        <!--contact start-->
        <footer id="contact" class="contact">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="single-footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">carvilla</a>
                                </div>
                                <p>
                                    Ased do eiusm tempor incidi ut labore et dolore magnaian aliqua. Ut enim ad minim
                                    veniam.
                                </p>
                                <div class="footer-contact">
                                    <p>info@themesine.com</p>
                                    <p>+1 (885) 2563154554</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="single-footer-widget">
                                <h2>about devloon</h2>
                                <ul>
                                    <li><a href="#">about us</a></li>
                                    <li><a href="#">career</a></li>
                                    <li><a href="#">terms <span> of service</span></a></li>
                                    <li><a href="#">privacy policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <div class="single-footer-widget">
                                <h2>top brands</h2>
                                <div class="row">
                                    <div class="col-md-7 col-xs-6">
                                        <ul>
                                            <li><a href="#">BMW</a></li>
                                            <li><a href="#">lamborghini</a></li>
                                            <li><a href="#">camaro</a></li>
                                            <li><a href="#">audi</a></li>
                                            <li><a href="#">infiniti</a></li>
                                            <li><a href="#">nissan</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 col-xs-6">
                                        <ul>
                                            <li><a href="#">ferrari</a></li>
                                            <li><a href="#">porsche</a></li>
                                            <li><a href="#">land rover</a></li>
                                            <li><a href="#">aston martin</a></li>
                                            <li><a href="#">mersedes</a></li>
                                            <li><a href="#">opel</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-offset-1 col-md-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h2>news letter</h2>
                                <div class="footer-newsletter">
                                    <p>
                                        Subscribe to get latest news update and informations
                                    </p>
                                </div>
                                <div class="hm-foot-email">
