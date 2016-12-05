<?php
session_start();
error_reporting(0);

if($_SESSION['Hak_Akses'] == 'Petugas')
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel Petugas :: Tambah Tempat</title>
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
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>Tambah</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_new_album_photo.php"><i class="fa fa-angle-double-right"></i>Tambah Album Foto</a></li>
                                <li><a href="add_new_photo.php"><i class="fa fa-angle-double-right"></i>Tambah Foto</a></li>
                                <li class="active"><a href="add_new_place.php"><i class="fa fa-angle-double-right"></i>Tambah Tempat</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Lihat</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="data_album.php"><i class="fa fa-angle-double-right"></i>Lihat Album Foto</a></li>
                                <li><a href="data_photo.php"><i class="fa fa-angle-double-right"></i>Lihat Foto</a></li>
                                <li><a href="data_place.php"><i class="fa fa-angle-double-right"></i>Lihat Tempat</a></li>
                                <li><a href="data_hotel.php"><i class="fa fa-angle-double-right"></i>Lihat Hotel atau Penginapan</a></li>
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
                    <h1>Tambah Tempat</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Tambah Tempat</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                      <div class="box box-primary">
                                <!-- form start -->
                                <form role="form" method="post" action="../../process/create_new_place.php" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nama Tempat</label>
                                            <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" placeholder="Masukkan Nama Tempat" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control ckeditor" rows="4" id="alamat" name="alamat" placeholder="Masukkan Alamat" required="required"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select class="form-control" name="kec" id="kec">
                                                <option selected>- Silakan Pilih -</option>
                                                <?php
													include("../../process/db.php");
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
                                            <input type="text" class="form-control" id="lat" name="lat" placeholder="Masukkan Nilai Latitude Tempat" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Longitude / Garis Bujur</label>
                                            <input type="text" class="form-control" id="long" name="long" placeholder="Masukkan Nilai Longitude Tempat" required="required">
                                        </div>
                                         <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control ckeditor" rows="4" id="ket" name="ket" placeholder="Masukkan Keterangan" required></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Fasilitas</label>
                                            <textarea class="form-control ckeditor" rows="4" id="fasilitas" name="fasilitas" placeholder="Masukkan Data Fasilitas yang ada di Objek Wisata yang bersangkutan" required="required"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Album Foto</label>
                                            <select class="form-control" name="album" id="album">
                                                <option selected>- Silakan Pilih -</option>
                                                <?php
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
                                        <div class="form-group">
                                            <label>Pengelola</label>
                                            <select class="form-control" name="pengelola" id="pengelola">
                                                <option selected>- Silakan Pilih -</option>
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
                                            <select class="form-control" name="kategori" id="kategori">
                                                <option selected>- Silakan Pilih -</option>
                                                <?php
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
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                    	<button type="reset" class="btn btn-danger">Reset</button>
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