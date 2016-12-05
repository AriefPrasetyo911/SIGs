<?php
session_start();
error_reporting(0);

if($_SESSION['Hak_Akses'] == 'Petugas')
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel Petugas :: Cari Data Album</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<?php
		include( '../../process/function_resize_logo.php');
		// setting
		$max_file_size = 1600*900; 
		$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
		// thumbnail 
		$sizes = array(250 => 250);
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['logo'])) {
			if( $_FILES['logo']['size'] < $max_file_size ){
				// get file extension
				$ext = strtolower(pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION));
				if (in_array($ext, $valid_exts)) {
					/* resize image */
					foreach ($sizes as $w => $h) {
						$files[] = resize($w, $h);
					}
		
				} else {
					$msg = 'Jenis file tidak disupport';
				}
			} else{
				$msg = 'Tolong upload foto dengan resolusi tidak lebih dari 1600 x 900';
			}
		}
		?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo -->
        <header class="header">
            <a href="index.php" class="logo">
                Panel Petugas
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle -->
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
            <!-- Left side -->
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
                    <!-- sidebar menu -->
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
                                <li><a href="add_new_album_photo.php"><i class="fa fa-angle-double-right"></i>Tambah Album Foto</a></li>
                                <li><a href="add_new_photo.php"><i class="fa fa-angle-double-right"></i>Tambah Foto</a></li>
                                <li><a href="add_new_place.php"><i class="fa fa-angle-double-right"></i>Tambah Tempat</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Lihat</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="data_album.php"><i class="fa fa-angle-double-right"></i>Lihat Album Foto</a></li>
                                <li><a href="data_photo.php"><i class="fa fa-angle-double-right"></i>Lihat Foto</a></li>
                                <li><a href="data_place.php"><i class="fa fa-angle-double-right"></i>Lihat Tempat</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                    Data Album
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Data Album</li>
                    </ol>
                </section>
                            
				<!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                        	<form action="" method="post">
                            <div class="box">
                            	<div class="box-body no-padding">
                                    <div class="form-group">
                                            <label>Pencarian Album</label>
                                            <select class="form-control" name="album" id="album" required>
                                                <option>- Silakan Pilih -</option>
                                                <?php
												require('../../process/db.php');
												$query = mysql_query("SELECT * FROM `sig_album_photo` order by nama_album asc");
												if(mysql_num_rows($query) != 0)
												{
													while($ada = mysql_fetch_assoc($query))
													{
													echo "<option value='$ada[id_album]'>".$ada['nama_album']."</option>";
													}
												}
                                                ?>
                                            </select>
                                     </div>
                                     <div class="box-footer">
                            			<button type="submit" class="btn btn-primary">Cari</button>
                            		 </div>
                            	</div>
                            </div>
                            </form>
                            
                            <div class="box">
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>No</th>
                                            <th>ID Album</th>
                                            <th>Nama Album</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                         <?php
											require("../../process/db.php");

											$no = 1;
											$album = $_POST['album'];

											//queri
											$queri = "SELECT * FROM `sig_album_photo` WHERE id_album='$album'";
											$ambil = mysql_query($queri);
											if(mysql_num_rows($ambil) != 0 )
											{
												while($urai = mysql_fetch_assoc($ambil))
												{
										?>
                                        <tr>
                                           <td><?php echo $no++;?></td>
                                           <td><?php echo $urai['id_album'];?></td>
                                           <td><?php echo $urai['nama_album']?></td>
                                           <td><?php echo $urai['keterangan'];?></td>
                                           <td><a href="view_album.php?id_album=<?php echo $urai['id_album']?>"><button class="btn btn-primary" title="Lihat Album">Lihat</button></a> | <a href="edit_album.php?id_album=<?php echo $urai['id_album']?>" title="Edit Album"><button class="btn btn-info">Edit</button></a> | <a href="../../process/delete_album_for_admin.php?id_album=<?php echo $urai['id_album']?>" title="Hapus" onClick="return confirm('Apakah Anda yakin akan menghapus Album <?php echo $urai['nama_album']?> ?')"><button class="btn btn-danger">Hapus</button></a></td>
                                        </tr>
                                         <?php }
											}
										else
										{?>
											<tbody>
                                            	<tr>
                                                	<td colspan="5" align="center"> Tidak Ada Data </td>
                                                </tr>
                                            </tbody>
										<?php }?>
                                    </table>
                                </div><!-- /.box-body -->
                               
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                   
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