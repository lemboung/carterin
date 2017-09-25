<?php $foto = '';
foreach ($member as $m) {
  $foto = $m->foto;
} ?>
<header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><center><b>C</b></center></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Carterin
          <img src="<?php echo base_url(); ?>style/images/logo ico.png">
          </b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-fixed-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
              <button data-toggle="modal" href="#tambahUnit" type="button" class="btn btn-block btn-danger">TAMBAH UNIT</button>
              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url()."images/member/".$foto ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url()."images/member/".$foto ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $this->session->userdata('username'); ?>
                      <small>Member</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a data-toggle="modal" href="<?php echo base_url()."Member/editAkun" ?>" class="btn btn-primary btn-flat">Edit Akun</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>/User/logout" class="btn btn-danger btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!--  Edit Unit -->
      <div id="editAkun" class="modal fade in col-sm-6"  aria-hidden="false">

          <!--Modal Body-->
          <div class="modal-body">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Akun</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="Email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">konfirmasi Password</label>
                  <input type="password" class="form-control" id="conf" placeholder="konfirmasi Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota</label>
                  <input type="text" class="form-control" id="kota" placeholder="Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomot Telepon</label>
                  <input type="text" class="form-control" id="notelp" placeholder="No Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor KTP</label>
                  <input type="text" class="form-control" id="noktp" placeholder="noktp">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">ukuran gambar maks 2 MB</p>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          </div>
          <!--/Modal Body-->
      </div>
      <!--  /Edit Unit -->
