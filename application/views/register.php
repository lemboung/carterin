<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carterin - Car Rental Website</title>
    <?php include("head.php") ?>
</head> 

<body class="">
    <!-- MAIN -->
    <?php include("header.php") ?>

    <!-- ////////////////////////////////////////////////////////////// -->
    <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Register</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#"> pages </a></li>
                                <li class="active">Register</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        <div class="wheel-register-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 padd-l0">
                        <div class="wheel-register-log marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>Punya akun? Masuk</h5>
                            </div>
                            <form>
                                <label for="userName" class="fa fa-user"><input type="email" name="email" id="userName" placeholder='Email' required></label>
                                <label for="userPass" class="fa fa-lock"><input type="password" name="password" id="userPass" placeholder='Passsword' required></label>
                                
                                <label class="password-sing clearfix" for="input-val2">
                                <input type='checkbox' id='input-val2'> <span>Tetap masuk</span>
                                <button type="submit" class="wheel-btn">Masuk</button>
                                <a href="">lupa password?</a>
                                </label>
                            </form>
                            <div class="wheel-register-link">
                                <a href="" class="wheel-btn-link wheel-bg11">Masuk dengan Facebook</a>
                                <a href="" class="wheel-btn-link wheel-bg8">Masuk dengan Google</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 padd-r0">
                        <div class="wheel-register-sign marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>Daftarkan diri anda </h5>
                                <h3>Dapatkan <span>Kode Voucher</span></h3>
                            </div>
                            <form id="registform" method="post">
                                <input type="text" name="nama" placeholder="Nama" required>
                                <input type="text" name="kota" placeholder="Kota" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="text" name="username" placeholder="Username" required>
                                <input type="password" name="password" placeholder="Password" required>
                                <input type="password" placeholder="Confirm Password" required>
                                <label for="input-val1">
                                <input type="checkbox" id='input-val1' required> <span>Saya setuju dengan </span>
                                <a href="">Terms and Conditions</a>
                                </label>
                                <button class="wheel-btn">Daftar</button>
                            </form>
                            <div class="wheel-register-link">
                                <a href="" class="wheel-btn-link wheel-bg11">Daftar dengan Facebook</a>
                                <a href="" class="wheel-btn-link wheel-bg8">Daftar dengan Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /////////////////////////////// -->
    <!-- FOOTER -->
    
    <?php include("footer.php");
    include("footer-all.php");
    include("modallogin.php");?>
    <!-- ///////////////// -->

    <!-- Scripts project -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- count -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.countTo.js"></script>
    <!-- swiper -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/idangerous.swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/equalHeightsPlugin.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.datetimepicker.full.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/index.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
    <!-- sixth block end -->
    <?php include("script.php") ?>
</body>
</html>