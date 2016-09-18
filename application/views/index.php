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
    <?php if ($this->session->flashdata('notification')!=null) {
        # code...
     ?>
    <div class="alert alert-warning alert-dismissible pull-right" role="alert" style="position:absolute; z-index:3;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> <?php echo $this->session->flashdata('notification')?>
    </div>
    <?php } ?>
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
                                <form class="form-search" action="<?php echo base_url(); ?>/Cari/prosesPencarian" method="post" id="form-login">
                                    <h3><b>Cari Mobil</b></h3>
                                    <div class="form-group">
                                        <input type="text" name="cari" class="input-block-level" placeholder="Search..." style="width:98%; margin-left:2%; margin-right:10%;">
                                      </div>
                                    <div class="form-group tes">
                                        <input type="date" name="awal" class="input-block-level" placeholder="Tanggal Ambil" style="width:100%;">
                                      </div>
                                      <div class="form-group tes">
                                        <input type="date" name="akhir" class="input-block-level" placeholder="Tanggal" style="width:100%;">
                                      </div>
                                      <div class="form-group tes">
                                        <select name="jenis" class="form-control" style="width: 100%;">
                                          <option selected="selected">Jenis</option>
                                          <option>Kendaraan Besar</option>
                                          <option>Mobil</option>
                                          <option>Motor</option>
                                        </select>
                                      </div>
                                      <div class="form-group tes">
                                        <select name="kota" class="form-control" style="width: 100%;">
                                          <option selected="selected">Kota</option>
                                          
                                          <option>Surabaya</option>
                                          <option>Malang</option>
                                          <option>Jakarta</option>
                                          <option>Yogyakarta</option>
                                        </select>
                                      </div>
                                      <!-- <br>                   <br>
                                      <br>                                      <br>
                                      <br>
                                      <div class="form-group tes">
                                        driver  <input type="checkbox" class="form-checkbox" id="exampleInputEmail1" name="driver" style="float:none;">
                                        jemput  <input type="checkbox" class="form-chceckbox" id="exampleInputEmail1" name="jemput" style="float:none;">
                                        antar  <input type="checkbox" class="form-chceckbox" id="exampleInputEmail1" name="antar" style="float:none;">

                                      </div>
 -->
                                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jenis">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="merek">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tipe">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="warna">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tahun">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="kota">
                                    <br>driver  <input type="checkbox" class="form-checkbox" id="exampleInputEmail1" name="driver">
                                    <br>jemput  <input type="checkbox" class="form-chceckbox" id="exampleInputEmail1" name="jemput">
                                    <br>antar  <input type="checkbox" class="form-chceckbox" id="exampleInputEmail1" name="antar">
                                    <br><br><br><br> -->
                                    <br><br><br><br><br>

                                    <button type="submit" class="btn btn-primary btn-lg tes" style="float: left;">Cari</button>

                                </form>

                            </div>
                            <!-- <div class="span7">
                                <img src="<?php echo base_url(); ?>style/images/sample/slider/img1.png" alt="" />
                            </div> -->
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
            <?php foreach ($posting as $p) {
              # code...
             ?>
            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo base_url()."images/posting/".$p->gambar; ?>">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="<?php echo base_url()."Member/detailKendaraan/".$p->id_posting; ?>"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5><?php echo $p->judul ?></h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>

            <!-- <li>
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
            </li> -->
            <?php } ?>
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


<?php require('js.php'); ?>

<!-- /Required javascript files for Slider -->

// <script type="text/javascript">
//     $(function(){
//         $(".register").on('click',function(){
//         // alert();
//         $('#loginForm').hide();
//         });
//     });
// </script>
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
