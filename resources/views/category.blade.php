<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel News - Tech blog for technical news</title>

    <!-- favicon -->
    <link href="{{asset('/img/favicon.png')}}" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{asset('/fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="{{asset('/css/mobile-menu.css')}}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{asset('/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">

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
                        <a href="/">
                            <img src="{{asset('/img/logo.png')}}" alt="Tech NewsLogo">
                        </a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
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
                            <li class="active"><a href="/">News</a></li>
                            <li><a href="/category/mobile">Mobile</a></li>
                            <li><a href="/category/tablet">Tablet</a></li>
                            <li><a href="/category/gadget">Gadgets</a></li>
                            <li><a href="/category/camera">Camera</a></li>
                            <li><a href="/category/design">Design</a></li>
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

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/">News</a></li>
                <li><a href="/category/tech">Tech</a></li>
                <li class="active"><a href="/category/{{$category}}">{{$category}}</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-transform: capitalize">{{$category}}</h2>
        </div>
    </div>
<div class="row">
<div class="col-md-8">
<div class="row">
    @foreach($posts as $post)
    <div class="col-md-6">
        <div class="category_article_body">
            <div class="top_article_img">
                <img class="img-fluid" src="{{asset('/img/category_img1.jpg')}}" alt="feature-top">
            </div>
            <!-- top_article_img -->

            <div class="category_article_title">
                <h5><a href="/{{$category}}/{{$title}}" target="_blank">{{$post->title}}</a></h5>
            </div>
            <!-- category_article_title -->

            <div class="article_date">
                <a href="#">10Aug- 2015</a>, by: <a href="#">Aarthna Maheshwari</a>
            </div>
            <!-- article_date -->

            <div class="category_article_content">
                {{$post->summary}}
            </div>
            <!-- category_article_content -->

            <div class="article_social">
                <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
            <!-- article_social -->

        </div>
        <!-- category_article_body -->

    </div>
    <!-- col-md-6 -->
@endforeach
</div>
<!-- row -->
</div>
<!-- col-md-8 -->

<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Popular News</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Canon launches photo centric 00214 Model supper shutter camera</a>
            </h3> <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_blank"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_blank"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Samsung galaxy note are the supper mobile of all products.</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_blank"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_blank"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Apple launches photo-centric wrist watch for Android</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_blank"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_blank"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Kodak Hi-Speed shutter double shot camera comming soon</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_blank"><i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_blank"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_blank">More News&nbsp;&raquo;</a></p>
</div>
<!-- Popular News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="assets/img/right_add1.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add2.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add3.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add4.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget reviews m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Reviews</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">DSLR is the most old camera at this time readmore about new
                    products</a>
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
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_blank">Samsung is the best
            mobile in the android market.</a></h3> <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Apple launches photo-centric wrist watch for Android</a>
            </h3> 
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Yasaki camera launches new generic hi-speed shutter camera.</a>
            </h3> 
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <p class="widget_divider"><a href="#" target="_blank">More News&nbsp;&raquo;</a></p>
</div>
<!-- Reviews News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add6.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Most Commented</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Yasaki camera launches new generic hi-speed shutter camera.</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Samsung is the best mobile in the android market.</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">Apple launches photo-centric wrist watch for Android</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_blank">DSLR is the most old camera at this time readmore about new
                    products</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_blank">More News&nbsp;&nbsp;&raquo; </a></p>
</div>
<!-- Most Commented News -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Editor Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="assets/img/editor.jpg"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!-- Editor News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive add_img" src="{{asset('/img/right_add7.jpg')}}" alt="add_one">
    <img class="img-responsive add_img" src="{{asset('/img/right_add7.jpg')}}" alt="add_one">
    <img class="img-responsive add_img" src="{{asset('/img/right_add7.jpg')}}" alt="add_one">
    <img class="img-responsive add_img" src="{{asset('/img/right_add7.jpg')}}" alt="add_one">
</div>
<!--Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Readers Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="{{asset('/img/reader.jpg')}}"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!--  Readers Corner News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="{{asset('/img/podcast.jpg')}}" alt="add_one">
</div>
<!--Advertisement-->
</div>
<!-- col-md-4 -->

</div>
<!-- row -->

</div>
<!-- container -->

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form action="#" method="post" class="form-horizontal">
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h1><span class="red-color">Sign up</span> for the latest news</h1>
                </label>

                <div class="col-sm-3">
                    <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Sign Up" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- Subscriber Section -->

<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title"><h3><a href="category.html" target="_blank">About Tech</a></h3></div>
                <div class="logo footer-logo">
                    <a title="fontanero" href="index.html">
                        <img src="{{asset('/img/tech_about.jpg')}}" alt="technews">
                    </a>

                    <p>Competently conceptualize go forward testing procedures and B2B expertise. Phosfluorescently
                        cultivate principle-centered methods.of empowerment through fully researched.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="/category/mobile" target="_blank">Discover</a></h3>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <ul class="list-unstyled left">
                            <li><a href="/category/mobile">Mobile</a></li>
                            <li><a href="/category/tablet">Tablet</a></li>
                            <li><a href="/category/gadget">Gadgets</a></li>
                            <li><a href="/category/design">Design</a></li>
                            <li><a href="/category/camera">Camera</a></li>
                            <li><a href="/category/apps">Apps</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/membership">Membership</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/job">Job</a></li>
                            <li><a href="/sitemap">SiteMap</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                            <li><a href="/contact-us">Contact Us</a></li>
                            <li><a href="/newsletter-alerts">Newsletter Alerts</a></li>
                            <li><a href="/podcast">Podcast</a></li>
                            <li><a href="/sms-subscription">Sms Subscription</a></li>
                            <li><a href="/advertisement-policy">Advertisement Policy</a></li>
                            <li><a href="/report-technical-issues">Report Technical issue</a></li>
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
                    <h3><a href="#" target="_blank">Editor Picks</a></h3>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{asset('/img/editor_pic1.jpg')}}" alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="/mobile/Apple launches photo-centric wrist watch for Android">Apple launches photo-centric wrist watch for Android</a>
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
                        <a href="#"><img class="media-object" src="{{asset('/img/editor_pic2.jpg')}}" alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="/mobile/Apple launches photo-centric wrist watch for Android">Apple launches photo-centric wrist watch for Android</a>
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
                        <a href="#"><img class="media-object" src="{{asset('/img/editor_pic3.jpg')}}" alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="/mobile/Apple launches photo-centric wrist watch for Android">Apple launches photo-centric wrist watch for Android</a>
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
                    <h3><a href="category.html" target="_blank">Tech Photos</a></h3>
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
                        <p>&copy; Copyright 2016-Tech News . Design by: <a href="https://uicookies.com">uiCookies</a>
                        </p></div>
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
                <li class="active"><a href="/">News</a></li>
                <li><a href="/category/mobile">Mobile</a></li>
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