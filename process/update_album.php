<!--load css-->
<link href="../dashboard/superadmin/css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
require("db.php");
$id_album	= $_POST['id_album'];
$nama_album = $_POST['nama_album'];
$keterangan	= $_POST['keterangan'];

$queri = mysql_query("UPDATE `sig_album_photo` SET `id_album`='$id_album',`nama_album`='$nama_album',`keterangan`='$keterangan' WHERE id_album = '$id_album'");

if($queri)
{
?>
	<div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Album Berhasil Diubah</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_album.php" />
<?php
}
else
{?>
	<div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Album Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_album.php" />
<?php }
?>