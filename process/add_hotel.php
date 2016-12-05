<link href="css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
include "db.php";

$id_place 	= $_POST['id_place'];
$id_album	= $_POST['id_album'];
$name		= $_POST['name'];
//
$nama_hotel	= $_POST['nama_hotel'];
$alamat		= $_POST['alamat'];
$telp		= $_POST['telp'];

$query 	= "INSERT INTO `sig_hotel`(`id_place`, `tourism_attr`, `name`, `address`, `telp`) VALUES ('$id_place','$name','$nama_hotel','$alamat','$telp')";
$exec	= mysql_query($query);

if($exec)
{?>
	<div class="callout callout-info">
    <center><h4>BERHASIL</h4>
	<p>Terima kasih sudah menambahkan data, semoga bisa bermanfaat bagi pengguna lain.</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../detail_objek_wisata.php?name=<?php echo $name?>&&id_place=<?php echo $id_place?>&&id_album=<?php echo $id_album?>" />	
<?php }
else
{?>
	<div class="callout callout-danger">
    <center><h4>GAGAL</h4>
 	<p>Maaf data gagal tersimpan</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../detail_objek_wisata.php?name=<?php echo $name?>&&id_place=<?php echo $id_place?>&&id_album=<?php echo $id_album?>" />
<?php }?>