<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/components/responsive-nav.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
       
        <div class="wrapper">
            <?php
                include 'header.php';
            ?>

            <div class="site-main">
                <header class="page-header">
                    <div class="container">
                        <h1>Services</h1>
                        <ol class="breadcrumb">
                          <li><a href="#">Home</a></li>
                          <li><a href="">Services</a></li>
                          <li class="active">Post</li>
                        </ol>
                    </div>
                </header>
                <div class="container content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-10 post-body">
                                    <div class="post-thumbnail">
                                        <img src="http://placehold.it/700x525" alt="" class="img-responsive">
                                    </div>
                                    <h1 class="post-title">Post Title</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, accusantium, debitis maxime libero commodi unde molestias temporibus tempore illum dignissimos sunt itaque ducimus labore sit! Repudiandae, quam nihil exercitationem.</p>
                                    <p>In, nemo ullam amet vitae blanditiis quaerat dolores consequatur inventore odio nisi at perspiciatis officia corporis ratione nam ab earum vero sit praesentium beatae temporibus facere quam pariatur vel ea.</p>
                                    <p>In, nemo ullam amet vitae blanditiis quaerat dolores consequatur inventore odio nisi at perspiciatis officia corporis ratione nam ab earum vero sit praesentium beatae temporibus facere quam pariatur vel ea.</p>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-md-3 sidebar-container">
                            <div class="sidebar-box widget-search">
                                <form action="#" class="form-inline" role="form">
                                    <div class="form-group">
                                        <label class="sr-only" for="search-blog">Email address</label>
                                        <input type="search" class="form-control" id="search-blog" placeholder="Search..">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-theme">Go</button>
                                </form>
                            </div>
                            <div class="sidebar-box widget-recent-posts">
                                <h4>Recent Posts</h4>
                                <ul>
                                    <li><a href="">link-01</a></li>
                                    <li><a href="">link-02</a></li>
                                    <li><a href="">link-03</a></li>
                                    <li><a href="">link-04</a></li>
                                    <li><a href="">link-05</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-box widget-categorys">
                                <h4>Categorys</h4>
                                <ul>
                                    <li><a href="">link-01</a></li>
                                    <li><a href="">link-02</a></li>
                                    <li><a href="">link-03</a></li>
                                    <li><a href="">link-04</a></li>
                                    <li><a href="">link-05</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-box widget-text">
                                <h4>Example advertisment</h4>
                                <div class="text-widget"><img src="http://placehold.it/200x270" alt="" class="img-responsive"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <?php
                include 'footer.php';
            ?>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script> -->
    </body>
</html>
