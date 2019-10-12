<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tech News - Laravel blog for Technical News</title>

    <!-- favicon -->
    <link href="{{asset('/img/favicon.png')}}" rel="icon" />

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css' />

    <!-- Bootstrap -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- font-awesome -->
    <link href="{{asset('/fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Mobile Menu Style -->
    <link href="{{asset('/css/mobile-menu.css')}}" rel="stylesheet" />

    <!-- Owl carousel -->
    <link href="{{asset('/css/owl.carousel.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <!-- Theme Style -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                                            <span class="date">
                                                <?php echo date('l'); ?>
                                            </span>
                        <!-- Date -->
                                            <span class="time">
                                                <?php echo date('d.M.Y') ?>
                                            </span>
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            <!--Pinterest-->
                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="/"><img src="{{asset('/img/logo.png')}}" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                            <li class="dropdown lang">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">En <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Bn</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Language Section -->

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                    class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                           placeholder="Type Something"> <span class="input-group-btn">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary">Search
                                                                            </button>
                                                                        </span></div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">
                            <li class="active"><a href="#">News</a></li>
                            <li><a href="/category/Mobile">Mobile</a></li>
                            <li><a href="/category/Tablet">Tablet</a></li>
                            <li><a href="/category/Gadget">Gadgets</a></li>
                            <li><a href="/category/Camera">Camera</a></li>
                            <li><a href="/category/Design">Design</a></li>
                        </ul>
                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->
@yield('content')
<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title"><h3><a href="/about-us" target="_self">About Tech</a></h3></div>
                <div class="logo footer-logo">
                    <a title="fontanero" href="/">
                        <img src="{{asset('/img/tech_about.jpg')}}" alt="technews">
                    </a>

                    <p>Competently conceptualize go forward testing procedures and B2B expertise. Phosfluorescently
                        cultivate principle-centered methods.of empowerment through fully researched.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Discover</a></h3>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <ul class="list-unstyled left">
                            <li><a href="/category/Mobile">Mobile</a></li>
                            <li><a href="/category/Tablet">Tablet</a></li>
                            <li><a href="/category/Gadget">Gadgets</a></li>
                            <li><a href="/category/Design">Design</a></li>
                            <li><a href="/category/Camera">Camera</a></li>
                            <li><a href="/category/Apps">Apps</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/job">Job</a></li>
                            <li><a href="sitemap">SiteMap</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                            <li><a href="/contact-us">Contact Us</a></li>
                            <li><a href="/newsletter-alerts">Newsletter Alerts</a></li>
                            <li><a href="/podcast">Podcast</a></li>
                            <li><a href="/sms-subscription">Sms Subscription</a></li>
                            <li><a href="/advertisement-policy">Advertisement Policy</a></li>
                            <li><a href="/report-technical-issue">Report Technical issue</a></li>
                            <li><a href="/complaints-and-corrections">Complaints and Corrections</a></li>
                            <li><a href="/terms-and-conditions">Terms and Conditions</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/cookie-policy">Cookie Policy</a></li>
                            <li><a href="/securedrop">Securedrop</a></li>
                            <li><a href="/archives">Archives</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="#" target="_self">Editor Picks</a></h3>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{asset('/img/editor_pic1.jpg')}}"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="/Mobile/Apple launches photo-centric wrist watch for Android.">Apple launches photo-centric wrist watch for Android</a>
                        </h3> 
                        <span class="rating">
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star-half-full"></i> 
                        </span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{asset('/img/editor_pic2.jpg')}}"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="/Mobile/Apple launches photo-centric wrist watch for Android.">Apple launches photo-centric wrist watch for Android</a>
                        </h3> 
                        <span class="rating">
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star-half-full"></i> 
                        </span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{asset('/img/editor_pic3.jpg')}}"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="/Mobile/Apple launches photo-centric wrist watch for Android.">Apple launches photo-centric wrist watch for Android</a>
                        </h3> 
                        <span class="rating">
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star-half-full"></i> 
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Tech Photos</a></h3>
                </div>
                <div class="widget_photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo1.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo2.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo3.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo4.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo5.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo6.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo7.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo8.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo9.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo10.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo11.jpg')}}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('/img/tech_photo12.jpg')}}" alt="Tech Photos">
                </div>

            </div>
        </div>
    </div>

    <div class="footer_bottom_Section">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="col-sm-3">
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            <!--Pinterest-->
                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>&copy; Copyright 2019-Laravel News . Developed by: <a href="#">Aarthna Maheshwari</a> </p>
                    </div>
                    <div class="col-sm-3">
                        <p>Technology News Magazine</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- #content-wrapper -->

</div>
<!-- .offcanvas-pusher -->

<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li class="active"><a href="#l">News</a></li>
                <li><a href="/category/Mobile">Mobile</a></li>
                <li><a href="/category/tablet">Tablet</a></li>
                <li><a href="/category/gadget">Gadgets</a></li>
                <li><a href="/category/camera">Camera</a></li>
                <li><a href="/category/design">Design</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->

<!-- jquery Core-->
<script src="{{asset('/js/jquery-2.1.4.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<!-- Theme Menu -->
<script src="{{asset('/js/mobile-menu.js')}}"></script>

<!-- Owl carousel -->
<script src="{{asset('/js/owl.carousel.min.js')}}"></script>

<!-- Theme Script -->
<script src="{{asset('/js/script.js')}}"></script>
</body>
</html>