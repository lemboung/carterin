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

      <?php require('headerMember.php'); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()."style/admin/" ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>carterin</p>
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
                <a href=<?php echo base_url()."index.php/member/viewKelolaMobil";?>
                  <i class="fa fa-laptop"></i> <span>Mobil</span>
                </a>
            </li>
            <li class="active treeview">
                <a href=<?php echo base_url()."index.php/member/viewKelolaMotor"; ?>
                  <i class="fa fa-files-o"></i> <span>Motor</span>
                </a>
            </li>
            <li class=" treeview">
                <a href=<?php echo base_url()."index.php/member/viewKelolaKb"; ?>
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
                  <h3 class="box-title">Kelola Mobil</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Merk</th>
                  <th>Tahun</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Jadwal</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger">Available</button>
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Available</a></li>
                        <li><a href="#">Booked</a></li>
                        <li><a href="#">Not Available</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger">Action</button>
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a data-toggle="modal" href="#tambahUnit">edit</a></li>
                        <li><a href="#">Delete</a></li>
                      </ul>
                    </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>
                <tr>
                  <td>Motor Yamaha</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger">Available</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Available</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">Not Available</a></li>
                  </ul>
                </div>
                  </td>
                  <td><button class="btn btn-primary btn-sm">Kelola Jadwal</button></td>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <!-- <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div> -->
        <!-- <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved. -->
        <b>carterin  2016</b>
      </footer>

      <!-- Control Sidebar -->

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

          <!--  Tambah Unit -->
      <div id="tambahUnit" class="modal fade in col-sm-6"  aria-hidden="false">

          <!--Modal Body-->
          <div class="modal-body">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Unit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Merek</label>
                  <input type="text" class="form-control" id="merek" placeholder="Merek">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tipe</label>
                  <input type="text" class="form-control" id="tipe" placeholder="Tipe">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Warna</label>
                  <input type="text" class="form-control" id="warna" placeholder="Warna">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis</label>
                  <select id="jenis">
                    <option value="mobil">Mobil</option>
                    <option value="motor">Motor</option>
                    <option value="kendaraanbesar">Kendaraan Besar</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota</label>
                  <input type="text" class="form-control" id="kota" placeholder="Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Tempat Duduk</label>
                  <input type="number" class="form-control" id="seat">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Sopir <br>
                    <input type="checkbox"> Antar <br>
                    <input type="checkbox"> Jemput <br>
                  </label>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Kendaraan</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">ukuran file max 2MB</p>
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
      <!--  /Tambah Unit -->

      <!--  Edit Unit -->
      <div id="editUnit" class="modal fade in col-sm-6"  aria-hidden="false">

          <!--Modal Body-->
          <div class="modal-body">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Unit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Merek</label>
                  <input type="text" class="form-control" id="merek" placeholder="Merek">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tipe</label>
                  <input type="text" class="form-control" id="tipe" placeholder="Tipe">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Warna</label>
                  <input type="text" class="form-control" id="warna" placeholder="Warna">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis</label>
                  <select id="jenis">
                    <option value="mobil">Mobil</option>
                    <option value="motor">Motor</option>
                    <option value="kendaraanbesar">Kendaraan Besar</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota</label>
                  <input type="text" class="form-control" id="kota" placeholder="Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Tempat Duduk</label>
                  <input type="number" class="form-control" id="seat">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Sopir <br>
                    <input type="checkbox"> Antar <br>
                    <input type="checkbox"> Jemput <br>
                  </label>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Kendaraan</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">ukuran file max 2MB</p>
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
