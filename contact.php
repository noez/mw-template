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
                        <h1>Contact</h1>
                    </div>
                </header>
                <div class="container content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-10 get-in">
                                    <div class="map-container">
                                    </div>
                                    <div class="form-body">
                                        <h3>Leave us a message – we’d love to hear from you!</h3>
                                        <form role="form" id="get-in-touch">
                                            <div class="form-group">
                                                <label for="name">Your Name:</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                       placeholder="Enter your name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Your Email address:</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="comments">Comments</label>
                                                <textarea class="form-control" rows="4" cols="50" name="comments" id="comments" ></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-default btn-theme" value="Send"/>
                                        </form>
                                    </div>
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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
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
