<!--load css-->
<link href="css/AdminLTE.css" rel="stylesheet" media="all" />

<?php
error_reporting(0);
include("db.php");
$id_foto = $_GET["id_foto"];

//hapus foto dalam folder upload
	$hapus			= mysql_query("SELECT * FROM sig_data_photo WHERE id_foto = '$id_foto'");
	$pecah 			= mysql_fetch_array($hapus);
	$delete			= $pecah["foto"];
	$hapus_gambar1	= unlink("../image/photo/$delete");
	$hapus_gambar2	= unlink("../image/photo/250x250_$delete");

//hapus data di database
$queri = "DELETE FROM `sig_data_photo` WHERE id_foto = '$id_foto'";
$proses = mysql_query($queri);
		
if($hapus_gambar1 && $hapus_gambar2 && $proses)
{	
	?>
     <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Foto dengan Kode <?php echo $id_foto ?> Berhasil Dihapus</p></center>
     </div>
     <meta http-equiv="refresh" content="3; url=../dashboard/petugas/data_photo.php "/>
    <?php
}
else
{
	?>
     <div class="callout callout-danger">
     <center><h4>GAGAL</h4>
     <p>Foto dengan Kode <?php echo $id_foto ?> Gagal Dihapus</p></center>
     </div>
	 <meta http-equiv="refresh" content="3; url=../dashboard/petugas/data_photo.php "/>
    <?php
}
?>