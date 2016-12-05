<?php
session_start();
error_reporting(0);

if($_SESSION['Hak_Akses'] == 'Petugas')
{?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Panel Petugas :: Lihat Album</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		
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
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
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
                                <li class="active"><a href="data_album.php"><i class="fa fa-angle-double-right"></i>Lihat Album Foto</a></li>
                                <li><a href="data_photo.php"><i class="fa fa-angle-double-right"></i>Lihat Foto</a></li>
                                <li><a href="data_place.php"><i class="fa fa-angle-double-right"></i>Lihat Tempat</a></li>
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
                    Data Foto
                </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Data Foto</li>
                    </ol>
                </section>

                 				<!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="box">
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                         <tr>
                                           <th>No</th>
                                           <th>Nama Foto</th>
                                           <th>Foto</th>
                                           <th>Keterangan</th>
                                           <th>Album</th>
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
											//tangkap data
											$id_album = $_GET['id_album'];
											
											$no	= 1;
											//queri
											$queri = "SELECT * FROM `sig_data_photo` WHERE id_album = '$id_album' LIMIT $offset, $dataPerPage";
											$ambil = mysql_query($queri);
											if(mysql_num_rows($ambil) != 0)
											{
												while($urai = mysql_fetch_array($ambil))
												{
										?>
                                       <tr>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $urai['foto'];?></td>
                                          <td><img src="../../image/photo/250x250_<?php echo $urai['foto'];?>"></td>
                                          <td><?php echo $urai['keterangan'];?></td>
                                          <td><?php echo $urai['id_album'];?></td>
                                          <td><a href="edit_photo.php?id_foto=<?php echo $urai['id_foto'];?>" title="Edit Foto"><button class="btn btn-primary btn-sm">Edit</button></a> | <a href="../../process/delete_photo.php?id_foto=<?php echo $urai['id_foto'];?>" onClick="return confirm('Apakah Anda akan Menghapus Foto dengan Kode = <?php echo $urai['id_foto'];?> ?')" title="Hapus Foto"><button class="btn btn-danger btn-sm">Hapus</button></a></td></td>
                                       </tr>
                                         <?php }
											}
										else
										{?>
											<tbody>
                                            	<tr>
                                                	<td colspan="6" align="center"> Tidak Ada Data</td>
                                                </tr>
                                            </tbody>
										 	<?php }
											// mencari jumlah semua data dalam tabel guestbook
											
											$query 	= "SELECT COUNT(*) AS jumData FROM `sig_data_photo`  WHERE id_album = '$id_album'";
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
											if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";
											// memunculkan nomor halaman dan linknya
											for($page = 1; $page <= $jumPage; $page++)
											{
													 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
													 {
														if (($showPage == 1) && ($page != 2))  echo "...";
														if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
														if ($page == $noPage) echo " <b>".$page."</b> ";
														else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
														$showPage = $page;
													 }
											}
											
											// menampilkan link next
											
											if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &gt;&gt;</a>";
									   ?>
                                    </ul>
                                    
                                </div>
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                   
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