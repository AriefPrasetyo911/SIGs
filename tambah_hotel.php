<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
     <?php
	 error_reporting(0);
    include "process/db.php";
	$name			= $_GET['name'];
	$id_place		= $_GET['id_place'];
	$id_album		= $_GET['id_album'];
	?>
    <title>Tambah Hotel atau Penginapan untuk <?php echo $name;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/AdminLTE.css" rel="stylesheet">
</head>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Sistem Informasi Geografis Objek Wisata Kabupaten Purbalingga</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
               <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - akan menjadi dropdown jika dilihat di layar kecil-->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                     <li class="active">
                        <a class="navbar-brand">Menu Utama</a>
                    </li>
                    <li>
                        <a href="buku_tamu.php">Buku Tamu</a>
                    </li>
                    <li>
                        <a href="daftar_objek_wisata.php">Daftar Objek Wisata</a>
                    </li>
                    <li>
                        <a href="cari_rute_antar_objek_wisata.php">Cari Rute Antar Objek Wisata</a>
                    </li>
                    <li>
                        <a href="cari_rute_berdasar_posisi.php">Cari Rute Berdasarkan Posisi Saat Ini</a>
                    </li>
                    <li>
                        <a href="polling.php">Polling</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
                <div class="row">
                     <div class="col-lg-12">
                          <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Tambah Data Hotel atau Penginapan untuk Objek Wisata <?php echo $name;?></h3>
                                </div><hr>
                                <div class="box-body chat" id="chat-box">
                                <form action="process/add_hotel.php" method="post">
                                	<input type="hidden" name="id_place" value="<?php echo $id_place?>">
                                    <input type="hidden" name="name" value="<?php echo $name?>">
                                    <input type="hidden" name="id_album" value="<?php echo $id_album?>">
                                    <div class="form-group">
                                        <label>Nama Hotel atau Penginapan *</label>
                                        <input class="form-control" type="text" name="nama_hotel" id="nama_hotel" placeholder="Masukkan Nama Hotel atau Penginapan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat *</label>
                                        <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Masukkan alamat Hotel atau Penginapan" required></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Nomor Telpon *</label>
                                        <input class="form-control" type="text" name="telp" id="telp" placeholder="Masukkan nomor Telepon Hotel atau Penginapan" required>
                                    </div>
                                    * diperlukan
                                    <br/><br>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                                </div>
                         </div>
                    </div>
                </div><!-- /.row -->
                <hr>
                <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p align="center">Copyright &copy; <?php echo date('Y');?> </p>
                    </div>
                </div>
            </footer> 
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
	   </div><!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>
