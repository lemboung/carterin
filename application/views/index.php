<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
require('css.php');
 ?>

<body>

    <!--Header-->
   <?php require('header.php'); ?>
    <!-- /header -->

    <!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">
            <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
    </nav>
    <!--/Slider Next Prev button-->
        <!--Slider Items-->
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <div class="row">
                            <div class="span5 search">
                                <form class="form-search" action="<?php echo base_url(); ?>/Cari" method="post" id="form-login">
                                    <h2>Cari Mobil</h2>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jenis">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="merek">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tipe">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="warna">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tempat duduk">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tahun">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="kota">
                                    <br>driver  <input type="checkbox" class="form-checkbox" id="exampleInputEmail1" name="driver">
                                    <br>jemput  <input type="checkbox" class="form-chceckbox" id="exampleInputEmail1" name="jemput">
                                    <br>antar  <input type="checkbox" class="form-chceckbox" id="exampleInputEmail1" name="antar">
                                    <br><br><br><br>

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </form>

                            </div>
                            <div class="span7">
                                <img src="<?php echo base_url(); ?>style/images/sample/slider/img1.png" alt="" />
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <!-- <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img2.png" alt="" />
                        <h2>Planning &amp; Analysis</h2>
                        <h3 class="gap">Aenean ultricies mi vitast</h3>
                        <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                    </div>
                </div>
            </div> -->
            <!--Slider Item2-->

            <!--Slider Item3-->

        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->



</div>
<!-- /slider-wrapper -->
</section>
<!--/Slider-->



<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Get A Big Discount</h3>
            <p class="lead">Iklan Kendaraan</p>
        </div>
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url(); ?>style/images/portfolio/thumb/item1.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>

            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url(); ?>style/images/portfolio/thumb/item1.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>
            <!--/Item 1-->

            <!--Item 2-->
            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url(); ?>style/images/portfolio/thumb/item2.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item2.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url(); ?>style/images/portfolio/thumb/item3.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-3" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item3.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>
            <!--/Item 3-->

            <!--Item 4-->
            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url(); ?>style/images/portfolio/thumb/item4.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>

            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url(); ?>style/images/portfolio/thumb/item4.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>

            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url(); ?>style/images/portfolio/thumb/item4.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>

            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url(); ?>style/images/portfolio/thumb/item4.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>
            <!--/Item 4-->

        </ul>
    </div>

</section>

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">OUR PARTNERS</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>style/images/sample/clients/client1.png"></a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>style/images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>style/images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>style/images/sample/clients/client4.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>style/images/sample/clients/client4.png"></a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>style/images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>style/images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>style/images/sample/clients/client1.png"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- /Carousel items -->

            </div>
        </div>
    </div>
</div>
</section>

<!--Bottom-->
<?php require('footer.php'); ?>
<!--/Footer-->

<!--  Login form -->
<div id="loginForm" class="modal hide fade in col-sm-3"  aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url();?>index.php/member/login" method="post" id="form-login">
            <input type="text" class="input-small" id="username" name="username" placeholder="username">
            <input type="password" class="input-small" id="password" name="password" placeholder="Password">
            <!-- <label class="checkbox">
                <input type="checkbox"> Remember me
            </label> -->
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <div class="register"><a data-toggle="modal" href="#registerForm">Register Now</a></div>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<!--  Register form -->
<div id="registerForm" class="modal hide fade in col-sm-3" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Register Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">

            <input type="email" class="form-control" id="email" placeholder="Email">
            <input type="text" class="form-control" id="username" placeholder="Username">
            <input type="password" class="form-control" id="password" placeholder="Password">
            <input type="password" class="form-control" id="confirm" placeholder="Confirm Password">
            <input type="text" class="form-control" id="nama" placeholder="Nama">
            <input type="text" class="form-control" id="Alamat" placeholder="Alamat">
            <input type="text" class="form-control" id="Kota" placeholder="Kota">
            <input type="number" class="form-control" id="notelp" placeholder="Nomor Telephone">
            <input type="number" class="form-control" id="noktp" placeholder="No KTP">

          <button type="submit" class="btn btn-default">Submit</button>

        </form>

        <!-- <form class="form" action="index.html" method="post">
            <input type="text" class="" placeholder="username">
            <input type="email" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <input type="password" class="input-small" placeholder="Konfirmasi Password">

            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Register Now</a> -->
    </div>
    <!--/Modal Body-->
</div>
<!--  /Register form -->
<?php require('js.php'); ?>

<!-- /Required javascript files for Slider -->

<script type="text/javascript">
    $(function(){
        $(".register").on('click',function(){
        // alert();
        $('#loginForm').hide();
        });
    });
</script>
<!-- SL Slider -->
<script type="text/javascript">
$(function() {

    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>
