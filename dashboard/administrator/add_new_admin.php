<?php
session_start();
error_reporting(0);
if($_SESSION['Hak_Akses'] == 'Administrator')
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel Administrator :: Tambah Admin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>
    <body class="skin-blue">
      <header class="header">
            <a href="index.php" class="logo">
                Panel Administrator
            </a>
          	<nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar -->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['Username'];?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <?php if($_SESSION['Jenis_Kelamin']== 'Laki - Laki') { ?>
                                    <img src="img/avatar5.png" class="img-circle" alt="User Image" />
                                    <?php } 
									else{ ?>
                                    <img src="img/avatar2.png" class="img-circle" alt="User Image" />
                                    <?php } ?>
                                    <p>
                                       <?php echo $_SESSION['Username'];?>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                       <a href="../../process/logout.php" onClick="return confirm('Apakah Anda akan keluar dari Panel Administrator?')" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                           <?php if($_SESSION['Jenis_Kelamin']== 'Laki - Laki') { ?>
                                    <img src="img/avatar5.png" class="img-circle" alt="User Image" />
                                    <?php } 
									else{ ?>
                                    <img src="img/avatar2.png" class="img-circle" alt="User Image" />
                                    <?php } ?>
                        </div>
                        <div class="pull-left info">
                            Selamat Datang, <br> 
                          <p style="font-weight:bold; color:#00F;"> <?php echo $_SESSION['Username'];?></p>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>Tambah</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu active">
                                <li class="active"><a href="add_new_admin.php"><i class="fa fa-angle-double-right"></i> Admin</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Lihat Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="data_admin.php"><i class="fa fa-angle-double-right"></i> Laporan Admin</a></li>
                                <li><a href="data_album.php"><i class="fa fa-angle-double-right"></i> Laporan Album Foto</a></li>
                                <li><a href="data_photo.php"><i class="fa fa-angle-double-right"></i> Laporan Foto</a></li>
                                <li><a href="data_place.php"><i class="fa fa-angle-double-right"></i> Laporan Tempat</a></li>
                                <li><a href="data_hotel.php"><i class="fa fa-angle-double-right"></i> Laporan Hotel atau Tempat Penginapan</a></li>
                                <li><a href="data_polling.php"><i class="fa fa-angle-double-right"></i> Laporan Polling</a></li>
                            </ul>
                        </li>
                    </ul>
                </section><!-- /.sidebar -->
            </aside>

            <!-- Right side column -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Tambah Admin
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Tambah Admin</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                     <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="../../process/create_new_admin.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                        </div>
                                         <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="jk">Jenis Kelamin</label>
                                            <select class="form-control" required name="jk" id="jk">
                                            	<option selected> - SIlakan Pilih -</option>
                                                <option value="Laki - Laki"> Laki - Laki</option>
                                                <option value="Perempuan"> Perempuan</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control ckeditor" rows="4" placeholder="Masukkan Alamat Anda" required name="address" id="address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="akses">Hak Akses</label>
                                            <select class="form-control" required name="akses" id="akses">
                                            	<option selected> - SIlakan Pilih -</option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="Petugas">Petugas</option>
                                            </select>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                    	<button type="reset" class="btn btn-primary">Reset</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
       
    </body>
</html>
<?php
}
else
{
	include("error.php");
}?>