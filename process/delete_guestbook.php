<link href="css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
error_reporting(0);
require("db.php");
//tangkap PK
$id_guestbook = $_GET['id_guestbook'];
//hapus
$delete = mysql_query("DELETE FROM `sig_guestbook` WHERE id_guestbook ='$id_guestbook'");

if($delete)
{
	?>
     <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Buku Tamu dengan ID : <?php echo $id_guestbook;?>  Berhasil Dihapus</p></center>
     </div>
     <meta http-equiv="refresh" content="3; url=../dashboard/petugas/index.php" />
    <?php
}
else
{
	?>
     <div class="callout callout-danger">
     <center><b><h4> GAGAL </h4></b>
     <p>Buku Tamu dengan ID : <?php echo $id_guestbook;?> Gagal Dihapus</p></center>
     </div>
     <meta http-equiv="refresh" content="3; url=../dashboard/petugas/index.php" />
    <?php
}
?>