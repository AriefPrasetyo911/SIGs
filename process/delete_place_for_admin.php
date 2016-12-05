<!--load css-->
<link href="css/AdminLTE.css" rel="stylesheet" media="all" />

<?php
include("db.php");

//tangkap data
$id_place = $_GET['id_place'];

//query
$queri 		 = mysql_query("DELETE FROM `sig_data_place` WHERE id_place = '$id_place'"); 

if ($queri)
{
	?>
     <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Tempat dengan Kode <?php echo $id_place ?> Berhasil Dihapus</p></center>
     </div>
     <meta http-equiv="refresh" content="3; url=../dashboard/petugas/data_place.php" />
    <?php
}
else
{
	?>
     <div class="callout callout-danger">
     <center><h4>GAGAL</h4>
     <p>Tempat dengan Kode <?php echo $id_place ?> Gagal Dihapus</p></center>
     </div>
	 <meta http-equiv="refresh" content="3; url=../dashboard/petugas/data_place.php" />
    <?php
}
?>