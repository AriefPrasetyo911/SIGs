<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Objek Wisata</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                    <li class="active">
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
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                     <div class="panel-heading">
                         <h3 class="panel-title">Daftar Objek Wisata</h3>
                     </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Nama Objek Wisata</th>
                                      <th>Alamat</th>
                                      <th>Pengelola</th>
                                      <th>Kategori</th>
                                      <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php
								error_reporting(0);
								require("process/db.php");
								$no = 1;
											
								//queri
								$queri = "SELECT * FROM `sig_data_place` order by name asc";
								$ambil = mysql_query($queri);
								if(mysql_num_rows($ambil) != 0 )
								{
									while($urai = mysql_fetch_assoc($ambil))
									{
								?>
                                <tbody>
                                    <tr>
                                       <td><?php echo $no++;?></td>
                                       <td><?php echo $urai['name'];?></td>
                                       <td><?php echo $urai['address']?></td>
                                       <td><?php echo $urai['pengelola']?></td>
                                       <td><?php echo $urai['kategori'];?></td>
                                       <td><a href="detail_objek_wisata.php?name=<?php echo $urai['name']?>&&id_place=<?php echo $urai['id_place']?>&&id_album=<?php echo $urai['id_album']?>"><button class="btn btn-primary" title="Lihat Informasi">Lihat Informasi</button></a></td>
                                     </tr>
                                </tbody>
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
