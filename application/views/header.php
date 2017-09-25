
<div class="wheel-menu-wrap ">
    <div class="container-fluid wheel-bg1">
        <div class="row">
            <div class="col-sm-3">
                <div class="wheel-logo">
                    <a href="index.html"><img src="<?php echo base_url() ?>images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-sm-9 col-xs-12 padd-lr0">
                <div class="wheel-top-menu clearfix">
                    <div class="wheel-top-menu-info">
                        <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+62) 123123123</span></a></div>
                        <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>contact@carterin.com</span></a></div>
                    </div>
                    <div class="wheel-top-menu-log">
                        <div class="top-menu-item">
                            <div class="dropdown wheel-user-ico">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <?php if ($this->session->has_userdata('username')) {
                                        echo $this->session->userdata('username');
                                    }else {
                                        echo "Account";
                                    } ?>
                                    <span class="caret"></span>
                                    </button>
                                <ul class="dropdown-menu">
                                    <?php if ($this->session->has_userdata('username')) {
                                        if ($this->session->userdata('level')==2) {
                                            echo "<li><a href=\"".base_url('Admin')."\" >Kelola kendaraan</a></li>";
                                            echo "<li><a href=\"".base_url('User/logout')."\" >Logout</a></li>";
                                        }else{
                                        echo "<li><a href=\"".base_url('Member')."\" >Kelola kendaraan</a></li>";
                                        echo "<li><a href=\"".base_url('User/logout')."\" >Logout</a></li>";
                                        }
                                    } else{
                                        echo "<li><a data-toggle=\"modal\" data-target=\"#myModal\">Login</a></li>";
                                        echo "<li><a data-toggle=\"modal\" data-target=\"#myModal\">Register</a></li>";
                                    }?>
                                </ul>
                            </div>
                        </div>
                        <div class="top-menu-item">
                            <div class="dropdown wheel-lang-ico">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Id
                                    <span class="caret"></span>
                                    </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Eng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="top-menu-item">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    IDR
                                    <span class="caret"></span>
                                    </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 ">
                <div class="wheel-navigation">
                    <nav id="dl-menu">
                        <!-- class="dl-menu" -->
                        <ul class="main-menu dl-menu">
                            <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                <a href="<?php echo base_url() ?>">Beranda</a>
                            </li>
                            <li class="menu-item current-menu-parent menu-item-has-children  ">
                                <a href="#">Cara Kerja</a>
                                <!--class=" dl-submenu "-->
                            </li>
                            <li class="menu-item   ">
                                <a href="<?php echo base_url("halaman/daftar") ?>">Gabung</a>
                            </li>
                            <li class="menu-item menu-item-has-children  ">
                                <a href="#">Testimonial</a>
                            </li>
                            <li class="menu-item menu-item-has-children  ">
                                <a href="<?php echo base_url("halaman") ?>">Blog</a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url("halaman/about"); ?>">Tentang</a>
                            </li>
                        </ul>
                        <div class="nav-menu-icon"><i></i></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>