<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku Tamu</title>
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
                    <li class="active">
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

                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                     <div class="panel-heading">
                         <h3 class="panel-title">Buku Tamu</h3>
                     </div>
                     
                     <div class="box">
                                <div class="box-body chat" id="chat-box">
                                    <?php
									error_reporting(0);
                                    include "process/db.php";
									// jumlah data yang akan ditampilkan per halaman
									$dataPerPage = 5;
									// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
									// sedangkan apabila belum, nomor halamannya 1.
									if(isset($_GET['page']))
									{
										$noPage = $_GET['page'];
									}
									else $noPage = 1;
									// perhitungan offset
									$offset = ($noPage - 1) * $dataPerPage;

									$queri	= mysql_query("SELECT * FROM `sig_guestbook` order by waktu desc LIMIT $offset, $dataPerPage");
									
									if(mysql_num_rows($queri) == 0)
									{
										echo "Belum Ada Data";
									}
									else
									{
									while($row = mysql_fetch_object($queri))
									{
									?>
                                    <!-- chat item -->
                                    <div class="item">
                                    	<?php
                                        if($row->jenis_kelamin == 'Laki - Laki')
										{?>
                                        <img src="assert/img/avatar04.png" alt="user image" class="online"/>
                                        <?php
										}
										else {?>
                                        <img src="assert/img/avatar2.png" alt="user image" class="online"/>
                                        <?php }?>
                                        <p class="message">
                                            <a class="name">
                                                <small class="text-muted pull-right"><?php echo $row->waktu;?></small>
                                                <?php echo $row->nama_lengkap?>
                                            </a>
                                            <?php echo $row->pesan;?>
                                        </p>
                                    </div><!-- /.item -->
                                    <hr>
                                    <?php }
									}
									// mencari jumlah semua data dalam tabel 
									$query 	= "SELECT COUNT(*) AS jumData FROM `sig_guestbook`";
									$hasil  = mysql_query($query);
									$data   = mysql_fetch_array($hasil);
										
									$jumData = $data['jumData'];
									
									// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
									$jumPage = ceil($jumData/$dataPerPage);
									?>
                                </div><!-- /.chat -->
                                
                                 <div class="box-footer clearfix">
                                    <ul class="pagination no-margin pull-right">
									   <?php
                                       		// menampilkan link previous
											if ($noPage > 1) echo  "<li><a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&laquo; Prev</a></li>";
											// memunculkan nomor halaman dan linknya
											for($page = 1; $page <= $jumPage; $page++)
											{
													 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
													 {
														$showPage = $page;
														if (($showPage == 1) && ($page != 2))  echo "";
														if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "";
														else echo "<li> <a href='".$_SERVER['PHP_SELF']."?page=".$page."' class='active'>".$page."</a> </li> ";
													 }
											}
											// menampilkan link next
											if ($noPage < $jumPage) echo "<li> <a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &raquo;</a> </li>";
									   ?>
                                    </ul>
                                </div>
                        </div><!-- /.box -->
                    </div>
                    </div>
                </div><!-- /.row -->
                <hr>
                <div class="row">
                     <div class="col-lg-12">
                          <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Tambah Buku Tamu </h3>
                                </div><hr>
                                <div class="box-body chat" id="chat-box">
                                <form action="process/create_new_guestbook.php" method="post">
                                    <div class="form-group">
                                        <label>Nama Lengkap *</label>
                                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap Anda" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="Laki - Laki" checked>Laki - Laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="Perempuan">Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input class="form-control" type="email" name="email" id="email" placeholder="contoh : emailanda@gmail.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pesan *</label>
                                        <textarea class="form-control" rows="3" name="pesan" id="pesan" placeholder="Masukkan Pesan Anda" required></textarea>
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
