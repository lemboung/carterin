<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php require('css.php'); ?>

<body>

    <!--Header-->
    <?php require('header.php'); ?>
    <!-- /header -->

<!-- 
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Blog</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!-- / .title -->         

    <section id="about-us" class="container main">
        <div class="row-fluid">

          <aside class="span4">
                  <!-- <div class="widget search">
                      <form>
                          <input type="text" class="input-block-level" placeholder="Search">

                      </form>
                  </div> -->

                  <div class="widget widget-popular search">
                      <h2>Cari Mobil</h2>
                      <div class="side-bar">
                      <!-- <form class="form-inline form-search" action="index.html" method="post" id="form-login">
                    
                                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                                              <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                              
                                              <br>
                                              <br>
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                        
                                          </form> -->
                      <form class="form-search" action="<?php echo base_url(); ?>/Cari/prosesPencarian" method="post" id="form-login">
                                    <div class="form-group">
                                        <input type="text" name="cari" class="input-block-level" placeholder="Search..." style="width:98%; margin-left:2%; margin-right:10%;">
                                      </div>
                                    <div class="form-group tes">
                                        <input type="date" name="awal" class="input-block-level" placeholder="Tanggal Ambil" style="width:100%;">
                                      </div>
                                      <div class="form-group tes">
                                        <input type="date" name="akhir" class="input-block-level" placeholder="Tanggal" style="width:100%;">
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
                                              
                  </div>

                  <!-- <div class="widget ads">
                      <h3>Some Search</h3>
                      <div class="row-fluid">

                          <div class="span6">
                              <a href="#"><img src="images/ads/ad1.png" alt=""></a>
                          </div>

                          <div class="span6">
                              <a href="#"><img src="images/ads/ad2.png" alt=""></a>
                          </div>
                      </div>
                      <p> </p>
                      <div class="row-fluid">
                          <div class="span6">
                              <a href="#"><img src="images/ads/ad3.png" alt=""></a>
                          </div>

                          <div class="span6">
                              <a href="#"><img src="images/ads/ad4.png" alt=""></a>
                          </div>
                      </div>
                  </div> -->
              </aside>

            <div class="span8">
                <div class="blog">

                <?php foreach ($hasil as $data) {
                  # code...
                 ?>
                <div class="span5">
                    <div class="blog-item well">
                        <a href="#"><h4><b><?php echo $data['judul'];?></b></h4></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by <a href="#"><?php echo $data['username'];?></a> | <i class="icon-folder-close"></i> Jenis <a href="#"><?php echo $data['jenis'];?></a> | <i class="icon-calendar"></i> post <?php echo $data['timestamp']; ?>
                          </p>
                          <p class="pull-right"><i class="pull"></i> Rp <?php echo $data['harga'];?> / Hari </a></p>
                      </div>
                      <p><img src="<?php echo base_url().'images/posting/'.$data['gambar']; ?>" width="100%" alt="" /></p>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, </p>
                      <!-- <a class="btn btn-link" href="#">Read More <i class="icon-angle-right"></i></a> -->
                      <button type="button" class="btn btn-primary">Booking</button>
                      <a href="<?php echo base_url(); ?>index.php/Cari/detailKendaraan/<?php echo $data['id_posting'];?>"><button type="button" class="btn btn-primary">Detail</button></a>

                  </div>
                  </div>
                  <?php } ?>



                                    <!-- End Blog Item -->

              
              <!-- End Blog Item -->

              <div class="gap"></div>

              <!-- Paginationa -->
              <div class="pagination">
                <ul>
                    <li><a href="#"><i class="icon-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i></a></li>
                </ul>
            </div>


        </div>
    </div>
    
</div>

</section>

<!--Bottom-->
<?php require('footer.php'); ?>
<!--/Footer-->


<?php require('js.php'); ?>
<!-- <script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script> -->

</body>
</html>
