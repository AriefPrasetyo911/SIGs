<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
    <?php 
	error_reporting(0);
	include("process/db.php");
	$name			= $_GET['name'];
	$id_place		= $_GET['id_place'];
	$id_album		= $_GET['id_album'];
	?>
    Detail Objek Wisata <?php echo $name;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/AdminLTE.css" rel="stylesheet">
</head>
<body>
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
                <a class="navbar-brand" href="index.html">Sistem Informasi Geografis Objek Wisata Kabupaten Purbalingga</a>
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
            </div><!-- /.navbar-collapse -->
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
                            <li>
                                Detail Objek Wisata
                         </li>
                        </ol>
                        <h1 class="page-header">
                           <center><small>Detail Objek Wisata<br>
                           <b>
                           <?php
							echo "<p style='text-decoration:underline'>'$name'";
                           ?></b></small></center>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                     <div class="col-lg-12">
                     <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#satu" data-toggle="tab">Informasi</a></li>
                        <li><a href="#dua" data-toggle="tab">Alamat</a></li>
                        <li><a href="#tiga" data-toggle="tab">Fasilitas</a></li>
                        <li><a href="#empat" data-toggle="tab">Foto</a></li>
                        <li><a href="#tujuh" data-toggle="tab">Hotel atau Penginapan</a></li>
                        <li><a href="#lima" data-toggle="tab">Kritik dan Saran</a></li>
                     </ul>
	        			
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="satu">
                         <div class="row">
                         <div class="col-lg-12">
                              <div class="box box-success">
                              <div class="box-body chat" id="chat-box">
                        <?php
						$queri	= mysql_query("SELECT * FROM `sig_data_place` WHERE id_place = '$id_place' && id_album = '$id_album' && name = '$name'");
						if($queri)
						{
							while($rows = mysql_fetch_array($queri))
							{
								if($rows['id_place'] == 1)
								{
									  function bacaHTML($url){
									  // inisialisasi CURL
									  $data = curl_init();
									  // setting CURL
									  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
									  curl_setopt($data, CURLOPT_URL, $url);
									  // menjalankan CURL untuk membaca isi file
									  $hasil = curl_exec($data);
											  curl_close($data);
											  return $hasil;
										 }
										  
										 $kodeHTML =  bacaHTML('http://dinbudparpora.purbalinggakab.go.id/?page_id=120');
										 $pecah = explode('<div class="entry-content">', $kodeHTML);
										 $pecahLagi = explode('</div>', $pecah[1]);
									   echo "<div>".$pecahLagi[0]."</div>";
								}
								else if($rows['id_place'] == 31)
								{
									  function bacaHTML2($url){
									  // inisialisasi CURL
									  $data = curl_init();
									  // setting CURL
									  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
									  curl_setopt($data, CURLOPT_URL, $url);
									  // menjalankan CURL untuk membaca isi file
									  $hasil = curl_exec($data);
											  curl_close($data);
											  return $hasil;
										 }
										  
										 $kodeHTML =  bacaHTML2('http://dinbudparpora.purbalinggakab.go.id/?page_id=116');
										 $pecah = explode('<div class="entry-content">', $kodeHTML);
										 $pecahLagi = explode('</div>', $pecah[1]);
									   echo "<div>".$pecahLagi[0]."</div>";
								}
								else if($rows['id_place'] == 3)
								{
									  function bacaHTML3($url){
									  // inisialisasi CURL
									  $data = curl_init();
									  // setting CURL
									  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
									  curl_setopt($data, CURLOPT_URL, $url);
									  // menjalankan CURL untuk membaca isi file
									  $hasil = curl_exec($data);
											  curl_close($data);
											  return $hasil;
										 }
										  
										 $kodeHTML =  bacaHTML3('http://dinbudparpora.purbalinggakab.go.id/?page_id=38');
										 $pecah = explode('<div class="entry-content">', $kodeHTML);
										 $pecahLagi = explode('</div>', $pecah[1]);
									   echo "<div>".$pecahLagi[0]."</div>";
								}
								else if($rows['id_place'] == 4)
								{
									  function bacaHTML4($url){
									  // inisialisasi CURL
									  $data = curl_init();
									  // setting CURL
									  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
									  curl_setopt($data, CURLOPT_URL, $url);
									  // menjalankan CURL untuk membaca isi file
									  $hasil = curl_exec($data);
											  curl_close($data);
											  return $hasil;
										 }
										  
										 $kodeHTML =  bacaHTML4('http://dinbudparpora.purbalinggakab.go.id/?page_id=118');
										 $pecah = explode('<div class="entry-content">', $kodeHTML);
										 $pecahLagi = explode('</div>', $pecah[1]);
									   echo "<div>".$pecahLagi[0]."</div>";
								}
								else if($rows['id_place'] == 5)
								{
									  function bacaHTML5($url){
									  // inisialisasi CURL
									  $data = curl_init();
									  // setting CURL
									  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
									  curl_setopt($data, CURLOPT_URL, $url);
									  // menjalankan CURL untuk membaca isi file
									  $hasil = curl_exec($data);
											  curl_close($data);
											  return $hasil;
										 }
										  
										 $kodeHTML =  bacaHTML5('http://dinbudparpora.purbalinggakab.go.id/?page_id=42');
										 $pecah = explode('<div class="entry-content">', $kodeHTML);
										 $pecahLagi = explode('</div>', $pecah[1]);
									   echo "<div>".$pecahLagi[0]."</div>";
								}
								else if($rows['id_place'] == 6)
								{
									  function bacaHTML6($url){
									  // inisialisasi CURL
									  $data = curl_init();
									  // setting CURL
									  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
									  curl_setopt($data, CURLOPT_URL, $url);
									  // menjalankan CURL untuk membaca isi file
									  $hasil = curl_exec($data);
											  curl_close($data);
											  return $hasil;
										 }
										  
										 $kodeHTML =  bacaHTML6('http://dinbudparpora.purbalinggakab.go.id/?page_id=111');
										 $pecah = explode('<div class="entry-content">', $kodeHTML);
										 $pecahLagi = explode('</div>', $pecah[1]);
									   echo "<div>".$pecahLagi[0]."</div>";
								}
								else if($rows['id_place'] == 7)
								{
									  function bacaHTML7($url){
									  // inisialisasi CURL
									  $data = curl_init();
									  // setting CURL
									  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
									  curl_setopt($data, CURLOPT_URL, $url);
									  // menjalankan CURL untuk membaca isi file
									  $hasil = curl_exec($data);
											  curl_close($data);
											  return $hasil;
										 }
										  
										 $kodeHTML =  bacaHTML7('http://dinbudparpora.purbalinggakab.go.id/?page_id=109');
										 $pecah = explode('<div class="entry-content">', $kodeHTML);
										 $pecahLagi = explode('</div>', $pecah[1]);
									   echo "<div>".$pecahLagi[0]."</div>";
								}
								else if($rows['id_place'] == 12)
								{
									  function bacaHTML8($url){
									  // inisialisasi CURL
									  $data = curl_init();
									  // setting CURL
									  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
									  curl_setopt($data, CURLOPT_URL, $url);
									  // menjalankan CURL untuk membaca isi file
									  $hasil = curl_exec($data);
											  curl_close($data);
											  return $hasil;
										 }
										  
										 $kodeHTML =  bacaHTML8('http://dinbudparpora.purbalinggakab.go.id/?page_id=40');
										 $pecah = explode('<div class="entry-content">', $kodeHTML);
										 $pecahLagi = explode('</div>', $pecah[1]);
									   echo "<div>".$pecahLagi[0]."</div>";
								}
								else
								{
									echo $rows['description'];
								}
							}
						}
						?>
                            </div>
                            </div>
                         </div>
                         </div>
                        </div>
                        <!--batas--->
                        <div class="tab-pane" id="dua">
                        <div class="row">
                         <div class="col-lg-12">
                              <div class="box box-success">
                              <div class="box-body chat" id="chat-box">
                        	<?php
                            $queri	= mysql_query("SELECT * FROM `sig_data_place` WHERE id_place = '$id_place' && id_album = '$id_album' && name = '$name'");
							while($row = mysql_fetch_object($queri))
							{
								echo $row->address;
							}
							?>
                            </div>
                            </div>
                          </div>
                        </div>
                        </div>
						<!--batas--->                        
                        <div class="tab-pane" id="tiga">
                        <div class="row">
                         <div class="col-lg-12">
                              <div class="box box-success">
                              <div class="box-body chat" id="chat-box">
                        	<?php
                            $queri	= mysql_query("SELECT * FROM `sig_data_place` WHERE id_place = '$id_place' && id_album = '$id_album' && name = '$name'");
							while($row = mysql_fetch_object($queri))
							{
								echo $row->facility;
							}
							?>
                            </div>
                            </div>
                          </div>
                        </div>
                        </div>
                         <!--batas--->
                        <div class="tab-pane" id="empat">
                        <div class="row">
                         <div class="col-lg-12">
                              <div class="box box-success">
                              <div class="box-body chat" id="chat-box">
                        	<?php
							 $id_album	= $_GET['id_album'];
							 $queriz = mysql_query("SELECT * FROM `sig_data_photo` WHERE id_album = '$id_album'");
							 if(mysql_num_rows($queriz)== 0)
							 {
							 	echo "Maaf Belum Ada Foto";
							 }
							 else
							 {
							 while($row = mysql_fetch_object($queriz))
							 { ?>
								 <img src="image/photo/250x250_<?php echo $row->foto;?>">
							 <?php }}?>
                             </div>
                             </div>
                           </div>
                         </div>
                        </div>
                         <div class="tab-pane" id="lima">
                        	<div class="row">
                             <div class="col-lg-12">
                                  <div class="box box-success">
                                        <div class="box-header">
                                            <h6 class="box-title">Jika Anda mempunyai Kritik maupun Saran mengenai <?php echo $name;?>, Anda dapat menuliskannya melalui form yang tersedia.</h6>
                                        </div><hr>
                                        <div class="box-body chat" id="chat-box">
                                        <?php $id_place		= $_GET['id_place'];?>
                                        <form action="process/add_comment.php" method="post">
                                        	<input type="hidden" name="name" id="name" value="<?php echo $name?>">
                                        	<input type="hidden" name="id_place" id="id_place" value="<?php echo $id_place?>">
                                            <input type="hidden" name="id_album" id="id_album" value="<?php echo $id_album?>">
                                            <div class="form-group">
                                                <label>Nama*</label>
                                                <input class="form-control" type="text" name="names" id="nama" placeholder="Masukkan Nama Lengkap Anda" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input class="form-control" type="email" name="email" id="email" placeholder="contoh : emailanda@gmail.com" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Pesan *</label>
                                                <textarea class="form-control" rows="4" name="message" id="pesan" placeholder="Masukkan Pesan Anda" required></textarea>
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
                        <!----->
                         <div class="row">
                            <div class="col-lg-12">
                            <div class="panel panel-primary">
                             <div class="panel-heading">
                                 <h3 class="panel-title">Kritik dan Saran mengenai <?php echo $name;?></h3>
                             </div>
                                <div class="table-responsive">
                                <div class="box">
                                <div class="box-body chat" id="chat-box">
                                <?php
									error_reporting(0);
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

									$queri	= mysql_query("SELECT * FROM `sig_comment` WHERE id_place='$id_place' order by time desc LIMIT $offset, $dataPerPage");
									
									if(mysql_num_rows($queri) == 0)
									{
										echo "<p align=center'>Maaf belum Ada Data</p>";
									}
									else
									{
									while($row = mysql_fetch_object($queri))
									{
									?>
                                    <div class="item">
                                        <img src="assert/img/avatar04.png" alt="user image" class="online"/>
                                        <p class="message">
                                            <a class="name">
                                                <small class="text-muted pull-right"><?php echo $row->time;?></small>
                                                <?php echo $row->comm_name?>
                                            </a>
                                            <?php echo $row->message;?>
                                        </p>
                                    </div><!-- /.item -->
                                    <hr>
                                     <?php }
									}
									// mencari jumlah semua data dalam tabel 
									$query 	= "SELECT COUNT(*) AS jumData FROM `sig_comment`";
									$hasil  = mysql_query($query);
									$data   = mysql_fetch_array($hasil);
										
									$jumData = $data['jumData'];
									
									// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
									$jumPage = ceil($jumData/$dataPerPage);
									?>
                                </div>
                                 <div class="box-footer clearfix">
                                    <ul class="pagination no-margin pull-right">
									   <?php
                                       		// menampilkan link previous
											if ($noPage > 1) echo "<li><a href='".$_SERVER['PHP_SELF']."?name=$name&&id_place=$id_place&&id_album=$id_album &&page=".($noPage-1)."'>&laquo; Prev</a></li>";
											// memunculkan nomor halaman dan linknya
											for($page = 1; $page <= $jumPage; $page++)
											{
													 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
													 {
														$showPage = $page;
														if (($showPage == 1) && ($page != 2))  echo "";
														if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "";
														else echo "<li> <a href='".$_SERVER['PHP_SELF']."?name=$name&&id_place=$id_place&&id_album=$id_album &&page=".$page."' class='active'>".$page."</a> </li> ";
													 }
											}
											// menampilkan link next
											if ($noPage < $jumPage) echo "<li> <a href='".$_SERVER['PHP_SELF']."?name=$name&&id_place=$id_place&&id_album=$id_album &&page=".($noPage+1)."'>Next &raquo;</a> </li>";
									   ?>
                                    </ul>
                                </div>
                                </div>
                                </div>
                            </div>
                            </div>
                         </div>
                        </div>
                        <!---->
                        <div class="tab-pane" id="tujuh">
                         <div class="row">
                            <div class="col-lg-12">
                            <div class="panel panel-primary">
                             <div class="panel-heading">
                                 <h3 class="panel-title">Hotel atau Penginapan Terdekat</h3>
                             </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama Hotel Atau Penginapan</th>
                                              <th>Alamat</th>
                                              <th>No Telepon</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;             
                                        //queri
                                        $queri = "SELECT * FROM `sig_hotel` WHERE id_place = '$id_place' AND status = 'Approve'";
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
                                               <td><?php echo $urai['telp'];?></td>
                                             </tr>
                                        </tbody>
                                         <?php }
                                         }
                                         else
                                         {?>
                                          <tbody>
                                           <tr>
                                              <td colspan="4" align="center">Maaf Belum Ada Data </td>
                                           </tr>
                                          </tbody>
                                         <?php }?>
                                    </table>
                                </div>
                            </div>
                             <div class="box-header">
                             <h4 class="box-title">Jika Anda tahu hotel atau tempat penginapan yang paling dekat dari <?php echo $name;?>, Anda dapat menambahkannya sehingga bisa membantu pengunjung lain.</h4>
                             </div>
                             <a href="tambah_hotel.php?name=<?php echo $name;?>&&id_place=<?php echo $id_place;?>&&id_album=<?php echo $id_album?>"><button class="btn btn-primary" title="Tambah data Hotel atau Penginapan">Tambah Hotel atau Penginapan</button></a>
                            </div>
                        </div><!-- /.row -->
                        </div>
                    </div><!--end tab-content-->
                  </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
	   </div><!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
