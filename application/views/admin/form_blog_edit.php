<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url("/style/image/icon.png") ?>" />
    <title>Carterin Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()."style/admin/" ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()."style/admin/" ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()."style/admin/" ?>dist/css/skins/_all-skins.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url()."style/admin/" ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url("")."home_admin"; ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><center><b>G</b></center></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Carterin's</b> Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url()."style/admin/" ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Carterin Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url()."style/admin/" ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Carterin
                      <small>Admin</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo base_url()."login/proses_logout"; ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
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
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li >
            <li class=" treeview">
                <a href=<?php echo base_url()."index.php/Admin/viewTableMember";?>
                  <i class="fa fa-laptop"></i> <span>Kelola member</span>
                </a>
            </li>
            <li class=" treeview">
                <a href=<?php echo base_url()."index.php/Admin/viewTablePosting"; ?>
                  <i class="fa fa-files-o"></i> <span>Kelola Posting</span>
                </a>
            </li>
            <li class="active treeview">
                <a href=<?php echo base_url()."index.php/Admin/"; ?>
                  <i class="fa fa-th"></i> <span>Kelola Blog</span>
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
            Edit Blog
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- <li><a href="#">Edit & Hapus Blog</a></li> -->
            <li class="active">Edit Blog</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-push-3 col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Blog</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo base_url()."kelola_blog/do_update"; ?>" enctype="multipart/form-data">
                  <input type="text" name="id_paket" value="<?php echo "$data[id_paket]"; ?>" hidden/>
                  <div class="box-body">
                    <div class="form-group">
                      <label>Judul Blog</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Blog" name="nama_paket" value="<?php echo "$data[nama_paket]"; ?>" required>
                    </div>
                    <!-- <div class="form-group">
                      <label>Kategori Blog</label>
                      <br><small><?php echo "Kategori Blog sebelum diupdate: <b>".$data['kategori_paket']."</b>" ?></small>
                      <select class="form-control" name="kategori_paket">
                        <?php foreach ($data2 as $d) {
                          echo "<option value='$d[id_kategori_paket]'>$d[kategori_paket]</option>";
                        } ?>
                      </select>
                    </div> -->
                    <!-- Ganti CK Editor -->
                    <div class="form-group">
                      <label>Isi Blog</label>
                      <!-- <textarea class="form-control" rows="3" placeholder="Masukkan Isi Paket" name="isi_paket"><?php echo "$data[isi_paket]"; ?></textarea> -->
                      <textarea id="editor1" name="isi_paket" rows="10" cols="80">
                        <?php echo "$data[isi_paket]"; ?>
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label>Gambar Blog</label>
                      <?php
                      	$i = 0;
                      	foreach ($data3 as $d3) {
                      		if ($i == 0 && $d3["pict_paket"] != "no image") {
                      ?>
                      			<center><br><img src="<?php echo base_url("/style/image/gallery/$d3[pict_paket]"); ?>" style="height: 100px; width: 100px"><br><small>preview image</small><br></center>
                      			<input type="file" id="exampleInputFile" name="gambar_paket_ke<?php echo "$i"; ?>">
                      			<input type="text" name="id_pict_paket<?php echo $i; ?>" value="<?php echo "$d3[id_pict_paket]"; ?>" hidden/>
                      <?php
                      		} elseif ($i > 0 && $d3["pict_paket"] != "no image") {
                      ?>
                      			<center><br><img src="<?php echo base_url("/style/image/gallery/$d3[pict_paket]"); ?>" style="height: 100px; width: 100px"><br><small>preview image</small><br></center>
                      			<input type="file" id="exampleInputFile" name="gambar_paket_ke<?php echo "$i"; ?>">
                      			<input type="text" name="id_pict_paket<?php echo $i; ?>" value="<?php echo "$d3[id_pict_paket]"; ?>" hidden/>
                      <?php
                      		} elseif ($i > 0 && $d3["pict_paket"] == "no image") {
                      ?>
                      			<center><br>no image<br><small>preview image</small><br></center>
                      			<input type="file" id="exampleInputFile" name="gambar_paket_ke<?php echo "$i"; ?>">
                      			<input type="text" name="id_pict_paket<?php echo $i; ?>" value="<?php echo "$d3[id_pict_paket]"; ?>" hidden/>
                      <?php
                      		}
                      		$i++;
                      	}
                      ?>
                      <!--<?php for ($i=0; $i < 4; $i++) { ?>
                        <?php if ($i == 0) { ?>
                          <input type="file" id="exampleInputFile" name="gambar_paket_ke<?php echo "$i"; ?>" required>
                        <?php } else { ?>
                          <input type="file" id="exampleInputFile" name="gambar_paket_ke<?php echo "$i"; ?>">
                        <?php }?>
                      <?php } ?>-->
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <!-- <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div> -->
        <!-- <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved. -->
        <b>Carterin 2016</b>
      </footer>

      <!-- Control Sidebar -->

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()."style/admin/" ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url()."style/admin/" ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()."style/admin/" ?>plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()."style/admin/" ?>dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."style/admin/" ?>dist/js/demo.js"></script>
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url()."style/admin/" ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
  </body>
</html>
