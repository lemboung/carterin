<!--  Login form -->
<div id="loginForm" class="modal hide fade in col-sm-3"  aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url(); ?>index.php/Login/login" method="post" id="form-login">
            <input type="text" name="username" class="input-small" placeholder="Username" required>
            <input type="password" name="password" class="input-small" placeholder="Password" required>
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
        <!-- <form class="form-inline" action="<?php echo base_url(); ?>index.php/Login/register" method="post" id="form-login"> -->
        <?php echo form_open_multipart('Login/register');?>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
            <input type="password" name="pass" class="form-control" id="password" placeholder="Password">
            <input type="password" class="form-control" id="confirm" placeholder="Confirm Password">
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
            <input type="text" name="alamat" class="form-control" id="Alamat" placeholder="Alamat">
            <input type="text" name="kota" class="form-control" id="Kota" placeholder="Kota">
            <input type="number" name="no_telp" class="form-control" id="notelp" placeholder="Nomor Telephone">
            <input type="number" name="noktp" class="form-control" id="noktp" placeholder="No KTP">
            <br>Foto <input type="file" name="foto" />
          <button type="submit" class="btn btn-default" value="upload">Submit</button>

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



<script src="<?php echo base_url(); ?>style/js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>style/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>style/js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url(); ?>style/js/jquery.ba-cond.min.js"></script>
<script src="<?php echo base_url(); ?>style/js/jquery.slitslider.js"></script>
