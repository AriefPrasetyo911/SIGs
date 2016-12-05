<?php
session_start();
error_reporting(0);

if($_SESSION['Hak_Akses'] == 'Administrator')
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard :: Edit Profile</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="skin-blue">
        <!-- header logo -->
      <header class="header">
            <a href="index.php" class="logo">
                Panel Administrator
            </a>
            <!-- Header Navbar-->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
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
                <!-- sidebar-->
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
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>Tambah</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_new_admin.php"><i class="fa fa-angle-double-right"></i> Admin</a></li>
                                <li><a href="add_new_album_photo.php"><i class="fa fa-angle-double-right"></i> Album Foto</a></li>
                                <li><a href="add_new_photo.php"><i class="fa fa-angle-double-right"></i> Foto</a></li>
                                <li><a href="add_new_icon.php"><i class="fa fa-angle-double-right"></i> Ikon</a></li>
                                <li><a href="add_new_place.php"><i class="fa fa-angle-double-right"></i> Tempat</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Lihat</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="data_admin.php"><i class="fa fa-angle-double-right"></i> Admin</a></li>
                                <li><a href="data_album.php"><i class="fa fa-angle-double-right"></i> Album Foto</a></li>
                                <li><a href="data_photo.php"><i class="fa fa-angle-double-right"></i> Foto</a></li>
                                <li><a href="data_icon.php"><i class="fa fa-angle-double-right"></i> Ikon</a></li>
                            	<li><a href="data_place.php"><i class="fa fa-angle-double-right"></i> Tempat</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Profile</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="profile.php"><i class="fa fa-angle-double-right"></i> Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Edit Admin</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                     <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Admin</h3>
                                </div><!-- /.box-header -->
                                <?php
								require("../../process/db.php");
                                $Username = $_GET["Username"];
								//ambil data
								$queri = mysql_query("SELECT * FROM `sig_auth_user` WHERE Username='$Username'");
								//pecah
								while($urai = mysql_fetch_array($queri))
								{
                                ?>
                                <!-- form start -->
                                <form role="form" method="post" action="../../process/update_profil.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input type="hidden" name="Username" class="form-control" id="Username" value="<?php echo $Username;?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Username : <?php echo $urai['Username'];?></label>
                                        </div><hr/>
                                       <div class="form-group">
                                            <label>Password</label>
                                             <p class="help-block">Anda dapat mengubah password disini, <br>
                                            jika password berubah silakan isikan password tersebut</p>
                                            <input type="password" name="Password" class="form-control" id="Password"  value="<?php echo $urai['Password'];?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="Names" class="form-control" id="Names"  value="<?php echo $urai['Nama_Lengkap'];?>" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jk" id="jk" required>
                                            	<option selected> - Silakan Pilih -</option>
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="4" name="Alamat" id="Alamat" required><?php echo $urai['Alamat'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Hak Akses</label>
                                            <select class="form-control" name="Hak_Akses" id="Hak_Akses" required>
                                                <option value="Superadmin">Super Admin</option>
                                                <option value="Administrator">Administrator</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password Sekarang</label>
                                            <input type="password" name="Passwordnow" class="form-control" id="Passwordnow" placeholder="Masukkan Password Sekarang" required>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                <?php }?>
                            </div><!-- /.box -->

            

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


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