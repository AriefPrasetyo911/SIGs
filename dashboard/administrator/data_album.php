<?php
session_start();
error_reporting(0);

if($_SESSION['Hak_Akses'] == 'Administrator')
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel Administrator :: Data Album</title>
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
                                <li><a href="add_new_admin.php"><i class="fa fa-angle-double-right"></i> Admin</a></li>
                                <li><a href="add_new_album_photo.php"><i class="fa fa-angle-double-right"></i> Album Foto</a></li>
                                <li><a href="add_new_photo.php"><i class="fa fa-angle-double-right"></i> Foto</a></li>
                                <li><a href="add_new_icon.php"><i class="fa fa-angle-double-right"></i> Ikon</a></li>
                                <li><a href="add_new_place.php"><i class="fa fa-angle-double-right"></i> Tempat</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Lihat Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="data_admin.php"><i class="fa fa-angle-double-right"></i> Laporan Admin</a></li>
                                <li class="active"><a href="data_album.php"><i class="fa fa-angle-double-right"></i> Laporan Album Foto</a></li>
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
                            
                            <form action="search_album.php" method="post">
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
											//pagination
											
											// jumlah data yang akan ditampilkan per halaman
											$dataPerPage = 10;
											// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
											// sedangkan apabila belum, nomor halamannya 1.
											if(isset($_GET['page']))
											{
												$noPage = $_GET['page'];
											}
											else $noPage = 1;
											// perhitungan offset
											$offset = ($noPage - 1) * $dataPerPage;

											$no = 1;
											//$album = $_POST['Album'];
											//queri
											$queri = "SELECT * FROM `sig_album_photo` LIMIT $offset, $dataPerPage ";
											$ambil = mysql_query($queri);
											while($urai = mysql_fetch_assoc($ambil))
											{
										    ?>
                                          <tr>
                                             <td><?php echo $no++;?></td>
                                             <td><?php echo $urai['id_album'];?></td>
                                             <td><?php echo $urai['nama_album']?></td>
                                             <td><?php echo $urai['keterangan'];?></td>
                                             <td><a href="view_album.php?id_album=<?php echo $urai['id_album']?>"><button class="btn btn-primary" title="Lihat Album">Lihat</button></a></td>
                                           </tr>
                                           <?php }
										   // mencari jumlah semua data dalam tabel 
											
											$query 	= "SELECT COUNT(*) AS jumData FROM `sig_album_photo`";
											$hasil  = mysql_query($query);
											$data   = mysql_fetch_array($hasil);
											
											$jumData = $data['jumData'];
											 // menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
											$jumPage = ceil($jumData/$dataPerPage);?>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
									   <?php
                                       // menampilkan link previous
											if ($noPage > 1) echo  "<li><a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&laquo; Prev</a></li>";
											// memunculkan nomor halaman dan linknya
											for($page = 1; $page <= $jumPage; $page++)
											{
													 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
													 {
														if (($showPage == 1) && ($page != 2))  echo "";
														if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "";
														
														else echo "<li> <a href='".$_SERVER['PHP_SELF']."?page=".$page."' class='active'>".$page."</a> </li> ";
														//$showPage = $page;
													 }
											}
											// menampilkan link next
											if ($noPage < $jumPage) echo "<li> <a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &raquo;</a> </li>";
									   ?>
                                    </ul>
                                </div>
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