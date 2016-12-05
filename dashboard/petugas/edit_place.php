<?php
session_start();
error_reporting(0);

if($_SESSION['Hak_Akses'] == 'Petugas')
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel Petugas :: Edit Tempat</title>
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
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
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
                        <!-- User Account-->
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
                                <li><a href="data_album.php"><i class="fa fa-angle-double-right"></i>Lihat Album Foto</a></li>
                                <li><a href="data_photo.php"><i class="fa fa-angle-double-right"></i>Lihat Foto</a></li>
                                <li class="active"><a href="data_place.php"><i class="fa fa-angle-double-right"></i>Lihat Tempat</a></li>
                                <li><a href="data_hotel.php"><i class="fa fa-angle-double-right"></i>Lihat Hotel atau Penginapan</a></li>
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
                        Edit Tempat
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Edit Tempat</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                     <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div><!-- /.box-header -->
                                 <?php
								require("../../process/db.php");
                                $id_place 	= $_GET['id_place'];
								$name		= $_GET['name'];
								//ambil data
								$queri = mysql_query("SELECT * FROM `sig_data_place` WHERE id_place='$id_place' AND name='$name'");
								//pecah
								while($urai = mysql_fetch_array($queri))
								{
                                ?>
                                <!-- form start -->
                                <form role="form" method="post" action="../../process/update_data_place.php" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id_place;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nama Tempat</label>
                                            <input type="text" class="form-control" id="Nama_Tempat" name="Nama_Tempat" value="<?php echo $urai['name'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control ckeditor" rows="4" id="Alamat" name="Alamat" placeholder="Masukkan Alamat" required="required"><?php echo $urai['address'];?></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select class="form-control" name="kecamatan" id="kecamatan">
                                                <option selected value="<?php echo $urai['sub_district']?>">- Silakan Pilih Kecamatan -</option>
                                                <?php
													$cari = mysql_query("SELECT * FROM `sig_sub_district` ORDER BY kecamatan ASC");
													if(mysql_num_rows($cari) != 0)
													{
														while($ketemu = mysql_fetch_assoc($cari))
														{?>
															<option value='<?php echo $ketemu['kecamatan'];?>'><?php echo $ketemu['kecamatan'];?></option>;
														<?php }
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Latitude / Garis Lintang</label>
                                            <input type="text" class="form-control" id="Latitude" name="Latitude" value="<?php echo $urai['lat'];?>" required >
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Longitude / Garis Bujur</label>
                                            <input type="text" class="form-control" id="Longitude" name="Longitude" value="<?php echo $urai['lon'];?>" required >
                                        </div>
                                         <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control ckeditor" rows="4" id="Keterangan" name="Keterangan" required><?php echo $urai['description'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Fasilitas</label>
                                            <textarea class="form-control ckeditor" rows="4" name="Fasilitas" id="Fasilitas" required><?php echo $urai['facility'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Pengelola</label>
                                            <select class="form-control" name="pengelola" id="pengelola">
                                                <option selected>- Silakan Pilih Pengelola -</option>
                                                <?php
													$cari = mysql_query("SELECT * FROM `sig_manager` ORDER BY Pengelola ASC");
													if(mysql_num_rows($cari) != 0)
													{
														while($ketemu = mysql_fetch_assoc($cari))
														{?>
															<option value='<?php echo $ketemu['Pengelola'];?>'><?php echo $ketemu['Pengelola'];?></option>;
														<?php }
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" required name="kategori" id="kategori">
                                            	<option selected="selected">- Silakan Pilih Lokasi - </option>
                                                 <?php
													include("../../process/db.php");
													$cari = mysql_query("SELECT * FROM `sig_data_category` ORDER BY kategori ASC");
													if(mysql_num_rows($cari) != 0)
													{
														while($ketemu = mysql_fetch_assoc($cari))
														{?>
															<option value='<?php echo $ketemu['kategori'];?>'><?php echo $ketemu['keterangan'];?></option>;
														<?php }
													}
												?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Album Foto</label>
                                            <select class="form-control" name="album" id="album">
                                                <option selected>- Silakan Pilih Album Foto -</option>
                                                <?php
													include("../../process/db.php");
													$cari = mysql_query("SELECT * FROM `sig_album_photo` ORDER BY nama_album ASC");
													if(mysql_num_rows($cari) != 0)
													{
														while($ketemu = mysql_fetch_assoc($cari))
														{?>
															<option value='<?php echo $ketemu['id_album'];?>'><?php echo $ketemu['nama_album'];?></option>;
														<?php }
													}
												?>
                                            </select>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                    	<button type="reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                <?php };?>
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