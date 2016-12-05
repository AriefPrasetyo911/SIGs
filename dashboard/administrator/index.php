<?php
session_start();
error_reporting(0);
if($_SESSION['Hak_Akses'] == 'Administrator')
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel Administrator</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

       <?php
		error_reporting(0);
		//Buat koneksi ke database
		include ("../../process/db.php");
		
		//title yang akan dijadikan judul chart
		$title   = 'Statistik Pengunjung Website ';
		
		//Buat query untuk melihat data kunjungan bulanan 
		$query   = mysql_query('select sum(hits) as Kunjungan,left(date,7) as Bulan from 
								sig_visitor where left(date,4)="2015" group by left(date,7)');
		
		while($res = mysql_fetch_array($query)){
			$bulan = $res['Bulan'];
			$jumlah= $res['Kunjungan'];
			$data .= '["'.$bulan.'",'.$jumlah.'],';
		}
		//membuang tanda koma di akhir data
		$data = substr($data,0,(strlen($data)-1));
		?>
        
        <!--Load the AJAX API-->
		<script type="text/javascript" src="js/jsapi.js"></script>
        <script type="text/javascript">
          google.load("visualization", "1", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Month', 'Visitor'],
              <?php echo $data;?>
            ]);
    
            var options = {
              title: '<?php echo $title;?>',
              hAxis: {title: 'Peroide Bulan', titleTextStyle: {color: 'blue'}}
            };
    
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
          }
        </script>
    </head>
    <body class="skin-blue">
        <header class="header">
            <a href="index.php" class="logo">
                Panel Administrator
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar -->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                    	<li class="dropdown user user-menu">
                        <a href="../../index.php" target="_blank" title="Kunjungi Website"> Visit Website</a>
                        </li>
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
                        <li class="active">
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
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Lihat Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            	<li><a href="data_admin.php"><i class="fa fa-angle-double-right"></i> Laporan Admin</a></li>
                                <li><a href="data_album.php"><i class="fa fa-angle-double-right"></i> Laporan Album Foto</a></li>
                                <li><a href="data_photo.php"><i class="fa fa-angle-double-right"></i> Laporan Foto</a></li>
                                <li><a href="data_place.php"><i class="fa fa-angle-double-right"></i> Laporan Tempat</a></li>
                                <li><a href="data_hotel.php"><i class="fa fa-angle-double-right"></i> Laporan Hotel atau Tempat Penginapan</a></li>
                                <li><a href="data_polling.php"><i class="fa fa-angle-double-right"></i> Laporan Polling</a></li>
                            </ul>
                        </li>
                    </ul>
                </section><!-- /.sidebar -->
            </aside>

            <!-- Right side column. -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                 <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                       <div class="col-md-6">
                            <!-- Box -->
                            <div class="box box-success" id="loading-example">
                                <div class="box-header">
                                    <h3 class="box-title">Pengunjung</h3>
                                </div><!-- /.box-header -->
                                <hr>
                                <div id="chart_div"></div>
                                <hr>
                                <?php
								//mulai
								   $ip   = $_SERVER['REMOTE_ADDR'];  
								   $tanggal = date("Ymd");  
								   $waktu  = time();  
								   $bln=date("m");  
								   $tgl=date("d");  
								   $blan=date("Y-m");  
								   $thn=date("Y");  
								   $tglk=$tgl-1;  
								   
								   $queri = mysql_query("SELECT * FROM `sig_visitor` WHERE ip = '$ip' AND date='$tanggal'");
								   if(mysql_num_rows($queri) == 0)
								   {
										$insert = mysql_query("INSERT INTO `sig_visitor`(`ip`, `date`, `hits`, `online`) VALUES ('$ip','$tanggal','1','$waktu')");  
								   }
								   else
								   {
										$update =mysql_query("UPDATE `sig_visitor` `hits`=hits+1,`online`='$waktu' WHERE ip = '$ip' AND date = '$tanggal'");  
								   }
								   //
								   if($tglk=='1' | $tglk=='2' | $tglk=='3' | $tglk=='4' | $tglk=='5' | $tglk=='6' | $tglk=='7' | $tglk=='8' | $tglk=='9'){ 
								   		$kemarin = mysql_query("SELECT * FROM `sig_visitor` WHERE date = '$thn-$bln-$tglk'"); 
								   }
								   else
								   {
								   		$kemarin = mysql_query("SELECT * FROM `sig_visitor` WHERE date = '$thn-$bln-$tglk'"); 
								   }
								   //
								   $bulan		= mysql_query("SELECT * FROM `sig_visitor` WHERE date LIKE '%$blan%'");
								   $bulanini	= mysql_num_rows($bulan);
								   $tahun		= mysql_query("SELECT * FROM `sig_visitor` WHERE date LIKE '%$thn%'");
								   $tahunini	= mysql_num_rows($tahun);
								   
								   $pengunjung		= mysql_num_rows(mysql_query("SELECT * FROM `sig_visitor` WHERE date = '$tanggal' GROUP BY ip"));
								   $totalpengunjung	= mysql_result(mysql_query("SELECT COUNT(hits) from sig_visitor"));
								   $hits			= mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday from sig_visitor WHERE date = '$tanggal' GROUP BY date"));
								   $hits2			= mysql_result($hits);
								   $totalhits		= mysql_fetch_assoc(mysql_query("select SUM(hits) as total from sig_visitor"));
								   $bataswaktu		= time() - 300;
								   $online			= mysql_num_rows(mysql_query("SELECT * FROM `sig_visitor` WHERE online > '$bataswaktu'"));
								   $harikemarin		= mysql_num_rows($kemarin);
								?>
                                <div class="box-body no-padding">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        	<div class="pad">
                                            <table class="table table-striped">
                                            <tr>
                                                <th>Hari Ini</th>
                                                <td><?php echo $pengunjung;?></td>
                                            </tr>
                                            <tr>
                                                <th>Kemarin</th>
                                                <td><?php echo $harikemarin;?></td>
                                            </tr>
                                            <tr>
                                                <th>Bulan Ini</th>
                                                <td><?php echo $bulanini;?></td>
                                            </tr>
                                            <tr>
                                            	<th>Tahun Ini</th>
                                                <td><?php echo $tahunini;?></td>
                                            </tr>
                                            <tr>
                                            	<th>Hits Hari Ini</th>
                                                <td><?php echo $hits[hitstoday];?></td>
                                            </tr>
                                            <tr>
                                            	<th>Total Pengunjung</th>
                                                <td><?php echo $totalhits[total];?></td>
                                            </tr>
                                            <tr>
                                            	<th>Online</th>
                                                <td><?php echo $online;?></td>
                                            </tr>
                                        	</table><!-- /.table -->
                                            </div>
                                        </div>
                                    </div><!-- /.row - inside box -->
                                </div><!-- /.box-body -->
                                
                            </div><!-- /.box -->       
						</div>
                        <!--batas-->
                        <div class="col-md-6">
                            <!-- Box -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-comments-o"></i> Buku Tamu </h3>
                                </div>
                                <hr>
                                <div class="box-body chat" id="chat-box">
                                    <?php
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
                                        <img src="../../assert/img/avatar04.png" alt="user image" class="online"/>
                                        <?php
										}
										else {?>
                                        <img src="../../assert/img/avatar2.png" alt="user image" class="online"/>
                                        <?php }?>
                                        <p class="message">
                                            <a class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $row->waktu;?></small>
                                                <?php echo $row->nama_lengkap?>
                                            </a>
                                            <?php echo $row->pesan;?>
                                        </p>
                                        <small class="pull-right"><a href="../../process/delete_guestbook.php?id_guestbook=<?php echo $row->id_guestbook;?>" onClick="return confirm('Apakah Anda akan Menghapus Buku Tamu dengan ID = <?php echo $row->id_guestbook;?> ?')" title="Hapus"><button class="btn btn-danger ">Hapus</button></a></small>
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
									$jumPage = ceil($jumData/$dataPerPage);?>
                                </div><!-- /.chat -->
                                
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
						</div><!--col-md-6-->
                    </div><!--row-->
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