<link href="css/AdminLTE.css" rel="stylesheet" media="all" />

<?php
require('db.php');
error_reporting(0);


$judul 			= $_POST['judul'];
$keterangan 	= $_POST['keterangan'];

$queri			= mysql_query("INSERT INTO `sig_album_photo`(`Nama_Album`, `Keterangan`) VALUES ('$judul','$keterangan')");
if($queri)
{
	?>
     <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Album Foto Berhasil Ditambah.</p></center>
     </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_album.php" />
    <?php
}
else
{
	?>
    <div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Album Foto Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_album.php" />
    <?php
}
?>