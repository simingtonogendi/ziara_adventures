<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ziara Adventures #TWENDEZIARA</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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

    <script src="assets/js/sweetalert.min.js"></script>

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

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="true" >
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
                            <a class="dropdown-header" href="adventure_travel.php">Adventure Travel</a><br>
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



    <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            width: 100%;
            height: 70%;
            position: relative;
            margin: 0;
        }

        /* Caption text */
        .text {
            color: #eaff52;
            font-size: 100px;
            font-weight: bolder;
            font-family: Algerian;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 5s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 10s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 500px) {
            .text {font-size: 11px}
        }
    </style>

    <div class="slideshow-container">

        <div class="mySlides fade hero-content">
            <div class="numbertext">1 / 6</div>
            <img src="assets/img/safari.avif" style="width:100%">
            <div class="text">
            <h1>Bush Adventures</h1> <br>
            <h2>Encounter a thrilling atmosphere</h2> <br>
            <h3>EXPLORE: DISCOVER: ENJOY</h3>
            <h3>#TWENDEZIARA</h3>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <img src="assets/img/star.avif" style="width:100%">
            <div class="text">
                <h1>Beach Adventures</h1> <br>
                <h2>Experience the beauty offered beyond the beach</h2> <br>
                <h3>EXPLORE: DISCOVER: ENJOY</h3>
                <h3>#TWENDEZIARA</h3>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <img src="assets/img/abt-1.jpg" style="width:100%">
            <div class="text">
                <h1>Team Building</h1> <br>
                <h2>Make numerous strides towards your goal</h2> <br>
                <h3>EXPLORE: DISCOVER: ENJOY</h3>
                <h3>#TWENDEZIARA</h3>
            </div>
        </div>

        <div class="mySlides fade hero-content">
            <div class="numbertext">4 / 6</div>
            <img src="assets/img/weekend.jpg" style="width:100%">
            <div class="text">
                <h1>Weekend Getaway</h1> <br>
                <h2>Take sometime to connect with nature</h2> <br>
                <h3>EXPLORE: DISCOVER: ENJOY</h3>
                <h3>#TWENDEZIARA</h3>
            </div>
        </div>

        <div class="mySlides fade hero-content">
            <div class="numbertext">5 / 6</div>
            <img src="assets/img/hike.avif" style="width:100%">
            <div class="text">
                <h1>Hiking</h1> <br>
                <h2>You need special shoes for hiking—and a bit of a special soul as well</h2> <br>
                <h3>EXPLORE: DISCOVER: ENJOY</h3>
                <h3>#TWENDEZIARA</h3>
            </div>
        </div>

        <div class="mySlides fade hero-content">
            <div class="numbertext">6 / 6</div>
            <img src="assets/img/hb.avif" style="width:100%">
            <div class="text">
                <h1>Hotel Bookings</h1> <br>
                <h2>Have a wholesome time in a serene environment</h2> <br>
                <h3>EXPLORE: DISCOVER: ENJOY</h3>
                <h3>#TWENDEZIARA</h3>
            </div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text], .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
            opacity: 1;
        }
    </style>
    </main>
    <body>

    <a href="https://wa.me/254113579573" class="whatsapp_float" target="_blank" rel="noopener noreferrer"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>


    <button class="open-button btn-success" onclick="openForm()">Reach Us</button>

    <div class="form-popup" id="myForm">
        <form action="https://formsubmit.co/travel@ziaraadventures.com" target="_blank" rel="noopener noreferrer" name="reach_us" method="post" class="form-container text-primary">
            <input type="text" name="honey" style="display: none;">

            <input type="hidden" name="_captcha" value="false">

            <input type="hidden" name="next" value="http://localhost/phpmyadmin/index.php?route=/database/structure&db=ziara_adventures/reach_us.php">
            <h1>Contact Details</h1>

            <label for="email"><b>Email</b></label> <br>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Telephone Number</b></label> <br>
            <input type="tel" placeholder="Enter Phone Number" name="telephone" required> <br><br>

            <button type="submit" name="send" class="btn hero-content">Send</button>
            <button type="button" name="close" me class="btn cancel hero-content" onclick="closeForm()">Close</button>
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

    </body>
</html>


<section>
    <div class="row">
        <div class="col-md-2 text-info bg text-center">
            <h3>
                UPCOMING!
            </h3>
        </div>
        <div class="col-md-10">

            <marquee class="marq"
                 bgcolor="grey"
                 direction="left"
                 behavior=scroll
                 loop=""><img src="assets/img/mstile-150x150.png" width="100" height="60" alt="logo"> <span> Panorama Splash, Naivasha.</span> Sign Up today and be part of the adventure on 04th June 2022.
            </marquee>
        </div>
    </div>
</section>
    <section class="site-section section-about" id="about">
         <div class="container center-block">
            <h2>AS ZIARA ADVENTURES</h2>
             <div class="text-center text-info section-diff-title">
                 <h3>Our focus is showing you what you can achieve by focusing on the unknown and experiencing the world. This is what one would call "feeding the soul".</h3>
                 <br>
                 <h3>An active adventure liberates the soul in numerous ways.</h3>
             </div>

         </div>
    </section>
    <section class="site-section section-about container" id="about">
        <div class="row">
            <hr>
            <h2 class="section-subtitle text-info"><span>HOW TO ADVENTURE WITH US</span></h2>
            <hr>
            <div class="main">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumb">
                                <img src="assets/img/beachadv.jpg" alt="" class="img-res">
                                <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </div><!-- /.portfolio-item-thumb  -->
                            <div class="portfolio-info">
                                <h3>Beach Adventure</h3>
                            </div><!-- /.portfolio-info  -->
                        </div>
                    </div><!-- /.col-md-3  -->
                    <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumb">
                                <img src="assets/img/bushadv.jpg" alt="" class="img-res">
                                <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </div><!-- /.portfolio-item-thumb  -->
                            <div class="portfolio-info">
                                <h3>Bush Adventure</h3>
                            </div><!-- /.portfolio-info  -->
                        </div>
                    </div><!-- /.col-md-3  -->
                    <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumb">
                                <img src="assets/img/teamb.jpg" alt="" class="img-res">
                                <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </div><!-- /.portfolio-item-thumb  -->
                            <div class="portfolio-info">
                                <h3>Team Building</h3>
                            </div><!-- /.portfolio-info  -->
                        </div>
                    </div><!-- /.col-md-3  -->
                    <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumb">
                                <img src="assets/img/weekendg-1.jpg" alt="" class="img-res">
                                <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </div><!-- /.portfolio-item-thumb  -->
                            <div class="portfolio-info">
                                <h3>Weekend Get Away</h3>
                            </div><!-- /.portfolio-info  -->
                        </div>
                    </div><!-- /.col-md-3  -->
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumb">
                                <img src="assets/img/hote.jpg" alt="" class="img-res">
                                <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </div><!-- /.portfolio-item-thumb  -->
                            <div class="portfolio-info">
                                <h3>Hotel Booking</h3>
                            </div><!-- /.portfolio-info  -->
                        </div>
                    </div><!-- /.col-md-3  -->
                    <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumb">
                                <img src="assets/img/familyf.jpg" alt="" class="img-res">
                                <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </div><!-- /.portfolio-item-thumb  -->
                            <div class="portfolio-info">
                                <h3>Family Fun Days</h3>
                            </div><!-- /.portfolio-info  -->
                        </div>
                    </div><!-- /.col-md-3  -->
                    <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumb">
                                <img src="assets/img/romance.jpg" alt="" class="img-res">
                                <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </div><!-- /.portfolio-item-thumb  -->
                            <div class="portfolio-info">
                                <h3>Romantic Get Aways</h3>
                            </div><!-- /.portfolio-info  -->
                        </div>
                    </div><!-- /.col-md-3  -->
                    <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumb">
                                <img src="assets/img/hiking.jpg" alt="" class="img-res">
                                <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </div><!-- /.portfolio-item-thumb  -->
                            <div class="portfolio-info">
                                <h3>Hiking</h3>
                            </div><!-- /.portfolio-info  -->
                        </div>
                    </div><!-- /.col-md-3  -->
                </div>
            </div>
    </section>


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
<!-- End Footer -->

<!-- Modals -->



</body>
</html>