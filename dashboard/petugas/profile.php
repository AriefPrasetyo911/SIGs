<?php
session_start();
error_reporting(0);

if($_SESSION['Hak_Akses'] == 'Petugas')
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel Petugas :: Profile</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		
        <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
         });
        </script>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Panel Petugas
            </a>
            <!-- Header Navbar: style can be found in header.less -->
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
                        <!-- User Account: style can be found in dropdown.less -->
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
                                       <a href="../../process/logout.php" onClick="return confirm('Apakah Anda akan keluar dari Panel Petugas?')" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column  -->
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
                    <!-- sidebar menu-->
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
                                <li><a href="add_new_place.php"><i class="fa fa-angle-double-right"></i> Tempat</a></li>
                                <li><a href="add_new_photo.php"><i class="fa fa-angle-double-right"></i> Foto</a></li>
                                <li><a href="add_new_album_photo.php"><i class="fa fa-angle-double-right"></i>Album Foto</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Lihat</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="data_place.php"><i class="fa fa-angle-double-right"></i> Daftar Tempat</a></li>
                                <li><a href="data_photo.php"><i class="fa fa-angle-double-right"></i> Foto</a></li>
                                <li><a href="data_album.php"><i class="fa fa-angle-double-right"></i> Album Foto</a></li>
                                <li><a href="data_hotel.php"><i class="fa fa-angle-double-right"></i>Lihat Hotel atau Penginapan</a></li>
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
                        <li class="active">Profil Admin</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                
                 <div class="row">
                        <div class="col-md-12">
                            
                            <div class="box">
                                <div class="box-body no-padding">
                                
                                	 <table id="example2"  class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Hak Akses</th>
                                                <th>Aksi</th>
                                            </tr>
                                         </thead>
                                         <?php
								require("../../process/db.php");
                                $Username = $_SESSION["Username"];
								//ambil data
								$queri = mysql_query("SELECT * FROM `sig_auth_user` WHERE Username='$Username'");
								//pecah
								while($urai = mysql_fetch_array($queri))
								{
								?>
                                         <tbody>
                                         	<tr>
                                            	<td><?php echo $urai['Username'];?></td>
                                                <td><?php echo $urai['Password'];?></td>
                                                <td><?php echo $urai['Nama_Lengkap'];?></td>
                                                <td><?php echo $urai['Jenis_Kelamin'];?></td>
                                                <td><?php echo $urai['Alamat'];?></td>
                                                <td><?php echo $urai['Hak_Akses'];?></td>
                                                <td><a href="edit_profile.php?Username=<?php echo $urai['Username'];?>" title="Edit"><button class="btn btn-primary btn-sm">Edit</button></a></td>
                                            </tr>
                                         </tbody>
                                       <?php };?>
                                 </table>
                                
                                </div>
                            </div>
                            
                         </div>
                  </div>          
                     
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
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
<?php
}
else
{
	include("error.php");
}?>