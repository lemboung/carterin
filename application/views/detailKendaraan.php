<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!-- [if gt IE 8]>     <html class="no-js"> <![endif] -->
<?php require('css.php'); ?>

<body>

    <!--Header-->
    <?php require('header.php');
    $judul ; $username; $jenis; $merek; $tipe; $harga; $timestamp; $seater; $warna; $deskripsi; $gambar; $kota;
    foreach ($kendaraan as $k) {
      $judul = $k->judul;
      $username = $k->username;
      $jenis = $k->jenis;
      $merek = $k->merek;
      $tipe = $k->tipe;
      $harga = $k->harga;
      $timestamp = $k->timestamp;
      $seater = $k->seater;
      $warna = $k->warna;
      $deskripsi = $k->deskripsi;
      $gambar = $k->gambar;
      $kota = $k->kota;
    }

    ?>
    <!-- /header -->

    <section id="about-us" class="container main">
        <div class="row-fluid">

            <aside class="span4">
                <div class="widget search">
                    <form>
                        <input type="text" class="input-block-level" placeholder="Search">
                    </form>
                </div>
        <!-- /.search -->
            </aside>

            <div class="span8">
                <div class="blog">
                    <div class="blog-item well">
                        <a href="#"><h2><?php echo $judul; ?></h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by <a href="#"><?php echo $username; ?></a> | <i class="icon-folder-close"></i> jenis kendaraan <a href="#"><?php echo $jenis; ?></a> | <i class="icon-calendar"></i> <?php echo $timestamp; ?>
                          </p>
                          <p class="pull-right"><i class="icon-comment pull"></i> kota <a href="blog-item.html#comments"><?php echo $kota; ?></a></p>
                      </div>
                      <p><img src="<?php echo base_url()."images/posting/".$gambar; ?>" width="100%" alt="" /></p>
                      <table>
                        <tr>
                          <td> merek : </td> <td> <?php echo $merek; ?><td>
                        </tr>
                        <tr>
                          <td>tipe : </td><td> <?php echo $tipe; ?></td>
                        </tr>
                        <tr>
                          <td>jumlah tempat duduk : </td> <td><?php echo $seater; ?></td>
                        </tr>
                        <tr>
                          <td>harga : </td> <td><?php echo $harga; ?></td>
                        </tr>
                        <tr>
                          <td>warna : </td> <td><?php echo $warna; ?></td>
                        </tr>
                        <tr>
                          <td>deskripsi : </td><td><?php echo $deskripsi; ?></td>
                        </tr>
                      </table>
                      <a href="<?php echo base_url(); ?>index.php/Cari/viewKendaraan"><button type="button" class="btn btn-primary">Booking</button></a>
                  </div>
                  <!-- End Blog Item -->


        </div>
    </div>

</div>

</section>

<!--Bottom-->
<?php require('footer.php'); ?>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<?php require('js.php'); ?>

</body>
</html>
