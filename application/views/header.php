 <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="home"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="blog"><a href="<?php echo base_url(); ?>/Halaman">Blog</a></li>
                        <li class="about"><a href="<?php echo base_url(); ?>/Halaman/viewAbout">About Us</a></li>
                        <li class="bantuan"><a href="<?php echo base_url(); ?>/Halaman/viewBantuan">Bantuan</a></li>
                        <?php if ($this->session->userdata('level')==2) {
                            # code...
                         ?>
                        <li><a href="<?php echo base_url(); ?>/Admin">Kelola Admin</a></li>
                        <?php
                            }
                            if ($this->session->userdata('level')==1) {
                                # code...

                         ?><li><a href="<?php echo base_url(); ?>/Member/viewKelolaMobil">Kelola Bisnis</a></li>
                        <?php
                            }
                            if ($this->session->userdata('level')==null) {
                                # code...

                         ?>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"> login</i></a>
                        </li>
                        <?php }else { ?>
                        <li class="dropdown login">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('username'); ?>
                            <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>/login/logout">Logout</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
