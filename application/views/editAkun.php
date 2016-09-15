<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo base_url("/style/image/icon.png") ?>" />
  <title>carterin Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url()."style/admin/" ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()."style/admin/" ?>plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."style/admin/" ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."style/admin/" ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php require('headerMember.php');
    $foto = '';
    $username = '';
    foreach ($member as $m) {
      $foto = $m->foto;
      $username = $m->username;
    } ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url()."images/membet".$foto ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $username ?></p>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">---</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span><b>UNIT SAYA</b></span>
            </a>
          </li>
          <li >
            <li class="treeview">
              <a href=<?php echo base_url()."/member/viewKelolaMobil";?>
                <i class="fa fa-laptop"></i> <span>Mobil</span>
              </a>
            </li>
            <li class=" treeview">
              <a href=<?php echo base_url()."/member/viewKelolaMotor"; ?>
                <i class="fa fa-files-o"></i> <span>Motor</span>
              </a>
            </li>
            <li class="active treeview">
              <a href=<?php echo base_url()."/member/viewKelolaKb"; ?>
                <i class="fa fa-th"></i> <span>Kendaraan Besar</span>
              </a>
            </li>

          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Daftar Mobil
          <small>KelolaMobil</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Kelola Mobil</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Edit Akun</h3>
              </div><!-- /.box-header -->
              <?php echo form_open_multipart('Member/updateAkun');
              foreach ($member as $m) {?>
              <div class="box-body">
                <input type="text" name="id_member" value="<?php echo $m->id_member; ?>" hidden/>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $m->username; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">no. Telepon</label>
                  <input type="number" name="no_telp" class="form-control" value="<?php echo $m->no_telp; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $m->email; ?>">
                </div>
                <div class="form-group">
                  <p class="help-block">jika anda tidak ingin ganti password, kosongkan saja</p>
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Konfirmasi Password</label>
                  <input type="password" name="pass" class="form-control" placeholder="Konfirmasi Password">
                </div>
                <div class="form-group">
                  <label>Foto Profil</label>
                  <?php
                    if ($m->foto != "no image") { ?>
                      <br><img src="<?php echo base_url("/images/member/$m->foto"); ?>" style="height: 100px; width: 100px"><br><small>preview image</small><br>
                      <input type="file" id="exampleInputFile" name="foto">
                      <p class="help-block">ukuran file max 2MB</p>
                      <?php
                    } elseif ($m->foto == "no image") { ?>
                      <center><br>no image<br><small>preview image</small><br></center>
                      <input type="file" id="exampleInputFile" name="foto">
                      <p class="help-block">ukuran file max 2MB</p>
                      <?php } ?>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php } ?>
              </form>
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.0
      </div>
      <!-- <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved. -->
      <b>carterin  2016</b>
    </footer>

    <!-- Control Sidebar -->

    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->


</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Control Sidebar -->

<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!--  Tambah Unit -->
<div id="tambahUnit" class="modal fade in col-sm-6"  aria-hidden="false">

  <!--Modal Body-->
  <?php Include 'formTambahKendaraan.php'; ?>
</div>
<!--  /Tambah Unit -->

<!--  Edit Unit -->
<div id="editUnit" class="modal fade in col-sm-6"  aria-hidden="false">

  <!--Modal Body-->
  <?php Include 'formEditKendaraan.php'; ?>
</div>
<!--  /Edit Unit -->

<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url()."style/admin/" ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url()."style/admin/" ?>bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()."style/admin/" ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()."style/admin/" ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."style/admin/" ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."style/admin/" ?>plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."style/admin/" ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."style/admin/" ?>dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function () {
  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });
});
</script>
</body>
</html>
