<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gardenia Resto</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, follow" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="<?php echo base_url("/style/image/icon.png") ?>" />

    <!-- CSS Files -->
    <link href="<?php echo base_url("/style/css/bootstrap.min.css"); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("/style/bootstrap-theme.min.css"); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("/style/jquery.reject.css"); ?>" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url("/style/css/general.css"); ?>" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url("/style/css/style.css"); ?>" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url("/style/css/responsive.css"); ?>" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/style/css/index.css"); ?>" media="screen" />
</head>

<body>
<div id="body" class="frontpage">
    <div id="body-inner">
        <header id="header">
            <div class="container">
                <div class="logo"><img src="<?php echo base_url("/style/image/logo.png") ?>" alt=""/></div>


                <div id="topmenu" style="margin-top:100px;">
                    <div class="left-side"></div>
                    <div class="right-side "></div>

                    <nav class="navbar" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="navbar-brand visible-xs">Gardenia</span>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav left">
                                <li class="id1"><a href="<?php echo base_url("")."home_gardenia"; ?>">Home</a></li>
                                <li class="id2"><a href="<?php echo base_url("")."about"; ?>">About</a></li>
                                <li class="id3"><a href="<?php echo base_url("")."menu"; ?>">Menu</a></li>
                            </ul>
                            <ul class="nav navbar-nav right">
                                <li class="id4"><a href="<?php echo base_url("")."service"; ?>">Service</a></li>
                                <li class="id5"><a href="<?php echo base_url("")."gallery"; ?>">Gallery</a></li>
                                <li class="id6"><a href="<?php echo base_url("")."contacts"; ?>">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <section>
            <div class="container <!--hidden-xs hidden-sm--> hideOnLoad showOnLoad">
                <div id="carousel-main-wrapper">
                    <div id="carousel" class="main-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo base_url("/style/image/gallery/banner1.jpg") ?>" alt="" />
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url("/style/image/gallery/banner2.jpg") ?>" alt="" />
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url("/style/image/gallery/banner3.jpg") ?>" alt="" />
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url("/style/image/gallery/banner4.jpg") ?>" alt="" />
                            </div>
                        </div>

                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active hideOnLoad showOnLoad1">
                                <div class="carousel-caption">
                                    <h2>Indonesian Food</h2>
                                    <h3>Soto Betawi, Nasi Empal, Semur Lidah Sapi, dll. </h3>
                                </div>
                            </li>
                            <li data-target="#carousel" data-slide-to="1" class="hideOnLoad showOnLoad2">
                                <div class="carousel-caption">
                                    <h2>Western Food</h2>
                                    <h3>Fish & Chips, Sweet Sour Dory, Dipping Fries, dll.</h3>
                                </div>
                            </li>
                            <li data-target="#carousel" data-slide-to="2" class="hideOnLoad showOnLoad3">
                                <div class="carousel-caption">
                                    <h2>Mid-East cuisine</h2>
                                    <h3>Canay Curry / Keju, Roti Tisu, Nasi Kebuli, dll</h3>
                                </div>
                            </li>
                            <li data-target="#carousel" data-slide-to="3" class="hideOnLoad showOnLoad4">
                                <div class="carousel-caption">
                                    <h2>Malay Food</h2>
                                    <h3>Kwe Teow Goreng, Crab Foo Yong, Cap Cay, dll.</h3>
                                </div>
                            </li>
                        </ol>

                        <a class="left carousel-control" href="#carousel" data-slide="prev"></a>
                        <a class="right carousel-control" href="#carousel" data-slide="next"></a>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>
        </section>

        <section>
            <div id="content-home" class="container">
                <div class="separator h40"></div>

                <div class="kotak1 hideOnLoad showOnLoad1">
                    <div class="inner-border">
                                              <div class="menu-image col-md-5">
                                                        <div id="carousel" class="main-carousel" data-ride="carousel">
                                                            <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <a href="image/gallery/index1.jpg"><img src="<?php echo base_url("/style/image/gallery/index1.jpg") ?>"></a>
                                                        </div>
                                                        <div class="item">
                                                            <a "image/gallery/index2.jpg"><img src="<?php echo base_url("/style/image/gallery/index2.jpg") ?>"></a>
                                                        </div>
                                                        <div class="item">
                                                            <a "image/gallery/index3.jpg"><img src="<?php echo base_url("/style/image/gallery/index3.jpg") ?>"></a>
                                                        </div>
                                                        <div class="item">
                                                            <a "image/gallery/index4.jpg"><img src="<?php echo base_url("/style/image/gallery/index4.jpg") ?>"></a>
                                                        </div>
                                                         <div class="item">
                                                            <a "image/gallery/index5.jpg"><img src="<?php echo base_url("/style/image/gallery/index5.jpg") ?>"></a>
                                                        </div>
                                                         <div class="item">
                                                            <a "image/gallery/index5.jpg"><img src="<?php echo base_url("/style/image/gallery/index6.jpg") ?>"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                    <div>
                        <h1>Gardenia Resto</h1>
                       
                        <h2 style="text-align: right;"><p>
                            Gardenia resto memberikan konsep restoran bernuansa fresh garden modern dan terdiri dari dua lantai yang di dalamnya terdapat ruangan indoor maupun outdoor. Mengusung tema masakan peranakan, Gardenia Resto menyediakan berbagai menu indonesian food, western food, middle eastern food, malay food, dan juga chinese food yang tentunya pas di lidah anda. Gardenia memberikan fasilitas live music dan juga area bermain untuk anak yang menambah kenyamanan dan cocok untuk anda nikmati bersama keluarga ataupun orang terdekat. Gardenia juga menyediakan paket-paket istimewa yang dapat melengkapi setiap event dan moment berharga anda seperti birthday pary, wedding party, romantic dinner, paket prasmanan, paket keluarga, dan lain sebagainya.
                           </p></h2>
                    </div>
                    </div>
                </div>


               

                <hr class="clear"/>

                <div class="row kotak3 hideOnLoad showOnLoad3">
                    <div class="col-md-4">
                        <h3>Location</h3>
                        <p>
                        <img src="<?php echo base_url("/style/image/loc.png"); ?>"><br>

                        <strong>Jalan Bandung Nomor 28</strong><br/>
                            Malang, Jawa Timur</p>
                    </div>
                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3713269803557!2d112.62038421437845!3d-7.960523481533901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629d51ee73c0b%3A0x860be58fbebfdb77!2sGardenia+Resto!5e0!3m2!1sid!2sid!4v1452853004772" width="100%" height="250" frameborder="0" style="border:3px solid #fa7d31; margin-top:-20px" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

              <footer id="footer-wide">
            <div id="footer" class="container" style="margin-bottom:50px;">
                <div class="kotak4 ">
                    <div class="inner-border clearfix">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 0; padding-bottom: 0;">
                                <div class="col-md-3">
                                    <img src="<?php echo base_url("/style/image/logo1.png") ?>" style="width:200px">
                                </div>
                                   
                                        <p style="float: right; font-family: oswald;  font-size: 14px; text-align:right">
                                        <br style="margin-bottom:20px">Jalan Bandung Nomor 28
                                      
                                        <br/> Malang, Jawa Timur<br/>
                                        gardeniarestomalang@gmail.com<br/>
                                        (0341)551949 / 0813-3581-1168<br/>
                                    </p>
                                    <div class="copyright">
                                        <div class="logo left hidden-xxs"><img src="<?php echo base_url("/style/image/pita.png") ?>" alt=""/></div>

                                        <p style="margin-top:3px;">© All rights reserved |</span> 2016</p>

                                        <div class="addthis_toolbox addthis_default_style hidden-xs hidden-sm">
                                            <a href="https://www.facebook.com/" class="addthis_button_facebook"><span><span></span></span></a>
                                            <a class="addthis_button_email"><span><span></span></span></a>
                                            <a href="https://twitter.com/"class="addthis_button_twitter"><span><span></span></span></a>
                                            <a class="addthis_button_google_plusone_share"><span><span></span></span></a>
                                            <a href="https://www.instagram.com/gardeniaresto/"class="addthis_button_in"><span><span></span></span></a>
                                            <a href="https://www.google.co.id/maps/place/Gardenia+Resto/@-7.9608635,112.6210172,17z/data=!4m2!3m1!1s0x2dd629d51ee73c0b:0x860be58fbebfdb77"class="addthis_button_rss"><span><span></span></span></a>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>               
            </div>
            <a href="#" class="btn-top glyphicon glyphicon-chevron-up hidden-xxs" title='Back to top...'></a>
        </footer>

    </div>
</div>

<!-- JS Files -->
<script src="<?php echo base_url("/style/js/jquery-1.9.1.js") ?>"></script>
<script src="<?php echo base_url("/style/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("/style/js/jquery.reject.js") ?>"></script>
<script src="<?php echo base_url("/style/js/general.js") ?>"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</body>
</html>