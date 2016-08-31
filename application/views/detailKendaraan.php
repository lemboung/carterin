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
                        <a href="#"><h2>AVANZA 2007</h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by <a href="#">Carter Sby</a> | <i class="icon-folder-close"></i> Category <a href="#">Mobil</a> | <i class="icon-calendar"></i> 16 Sept 2009 - 20 Sept 2009
                          </p>
                          <p class="pull-right"><i class="icon-comment pull"></i> <a href="blog-item.html#comments">3 Comments</a></p>
                      </div>
                      <p><img src="<?php echo base_url(); ?>style/images/sample/team1.jpg" width="100%" alt="" /></p>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
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
