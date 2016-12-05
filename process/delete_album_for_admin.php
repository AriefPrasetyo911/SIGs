<!--load css-->
<link href="../dashboard/administrator/css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
error_reporting(0);
require("db.php");

//tangkap PK
$id_album = $_GET['id_album'];

//hapus data di database
$queri = "DELETE FROM `sig_album_photo` WHERE id_album = '$id_album' ";
$proses = mysql_query($queri);
		
if($proses)
{	
	?>
     <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Album dengan id <?php echo $id_album ?> Berhasil Dihapus</p></center>
     </div>
     <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_album.php" />
    <?php
}
else
{
	?>
     <div class="callout callout-danger">
     <center><h4>GAGAL</h4>
     <p>Album dengan id <?php echo $id_album ?> Gagal Dihapus</p></center>
     </div>
	 <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_album.php" />
    <?php
}
?>