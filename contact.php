<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ziara Adventures #TWENDEZIARA</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">


    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">


    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/mstile-150x150.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/mstile-150x150.png">
    <link rel="icon" sizes="16x16" href="assets/img/mstile-150x150.png">
    <link rel="manifest" href="assets/img/manifest.json">
    <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">


    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />


    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap core js | Do not Delete -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Bootstrap progressbar JS -->
    <script src="assets/js/bootstrap-progressbar.min.js"></script>

    <!-- Count To JS -->
    <script src="assets/js/jquery.countTo.min.js"></script>

    <!-- Easing JS -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Shuffle JS -->
    <script src="assets/js/jquery.shuffle.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="assets/js/slick.min.js"></script>

    <!-- Touchswipe JS -->
    <script src="assets/js/touchswipe.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

    <script src="assets/js/sweetalert.min.js"></script>


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>
<body>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>



    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation" data-spy="affix">
            <div class="container main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Name -->
                    <div class="page -scroll site-logo">
                        <a href="#top"><img src="assets/img/mstile-150x150.png" width="100" height="80" alt="logo"></a>
                    </div>

                </div><!-- /.navbar-header -->

                <!-- Navigation -->
                <ul class="nav navbar-nav navbar-right">

                    <li class="page-scroll"><a href="home.php">Home</a></li>
                    <li class="page-scroll"><a href="about.php">About</a></li>
                    <li class="dropdown">
                        <a  class="navbar-link dropdown-toggle" data-toggle="dropdown" href="#">Products</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-header" href="adventure_travel.php">Adventure travel</a><br>
                            <a class="dropdown-header" href="team_building.php">Team Building</a><br>
                            <a class="dropdown-header" href="beach_adventure.php">Beach Adventure</a><br>
                            <a class="dropdown-header" href="bush_adventure.php">Bush Adventure</a><br>
                        </div>
                    </li>
                    <li class="page-scroll"><a href="portfolio.php">Portfolio</a></li>
                    <li class="page-scroll"><a href="blog.php">Blog</a></li>
                    <li class="page-scroll"><a href="contact.php">Contact</a></li>

                </ul><!-- /.navbar-nav -->

            </div><!-- /.navbar-collapse -->
        </nav><!-- /.primary-navigation -->
    </header>

<main id="main" class="site-main">

    <!-- start contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>ZIARA ADVENTURES </span>TODAY</h2>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                    <form action="https://formsubmit.co/travel@ziaraadventures.com" target="_blank" rel="noopener noreferrer" name="form_contact" method="post">

                        <input type="text" name="honey" style="display: none;">

                        <input type="hidden" name="_captcha" value="false">

                        <input type="hidden" name="next" value="http://localhost/phpmyadmin/index.php?route=/database/structure&db=ziara_adventures/reach_us.php">

                        <label>NAME</label>

                        <input name="fullname" required=required type="text" class="form-control da" id="fullname">

                        <label>EMAIL</label>
                        <input name="email" required=required type="email" class="form-control" id="email">

                        <label>CONTACT</label>
                        <input name="contact" required=required type="tel" class="form-control" id="contact">

                        <label>MESSAGE</label>
                        <textarea name="message" rows="4" class="form-control" id="message"></textarea>

                        <input type="submit" name="submit" class="form-control">
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                    <address>
                        <p class="address-title">OUR ADDRESS</p>
                        <span>Communicate and access our in-house team today. For support, please write your message; we'll respond as soon as possible.</span>
                        <br>
                        <p><i class="fa fa-phone"></i> +254711715835/+254729471295</p> <br>
                        <p><i class="fa fa-whatsapp"></i> +254113579573</p><br>
                        <p><i class="fa fa-envelope-o"></i> travel@ziaraadventures.com</p> <br>
                        <p><i class="fa fa-map-marker"></i> Scenic Apartments, Block 6, Rose Avenue</p> <br>
                    </address>
                    <ul class="social-icon">
                        <h3>WE ARE SOCIAL:</h3> <h4>CONNECT WITH US TODAY</h4>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->

    <section class="section-networks blue-bg">
        <div class="container">
            <a href="https://www.facebook.com/ZiaraAdventures" target="_blank" rel="noopener noreferrer" class="rectangle">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="https://bit.ly/2Oi1tyN" target="_blank" rel="noopener noreferrer" class="rectangle">
                <i class="fa fa-instagram"></i>
            </a>
            <a href="#" class="rectangle">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="rectangle">
                <i class="fa fa-youtube-play"></i>
            </a>

        </div>
    </section><!-- /.section-networks-->

</main>

    <footer id="colophon" class="site-footer">

        <div class="container-fluid">

            <div class="page-scroll">
                <a href="#top" class="rectangle">
                    <i class="fa fa-angle-double-up"></i>
                </a>
            </div>

        </div>

        <div class="container text-center">
            <p class="copyright">&copy; <a href="">ZiaraAdventures</a> - 2022</p>
        </div>

    </footer><!-- /#footer -->



</body>
</html>
