<!--load css-->
<link href="css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
require("db.php");
$id_foto	= $_POST['id_foto'];
$ket		= $_POST['ket'];
$album		= $_POST['album'];

$queri = mysql_query("UPDATE `sig_data_photo` SET `id_foto`='$id_foto',`id_album`='$album',`keterangan`='$ket' WHERE id_foto = '$id_foto'");

if($queri)
{
?>
	<div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Foto Berhasil Diubah</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_photo.php" />
<?php
}
else
{?>
	<div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Foto Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_photo.php" />
<?php }
?>