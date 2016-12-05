<!--load css-->
<link href="css/AdminLTE.css" rel="stylesheet" media="all" />

<?php

require('db.php');


//tangkap name setiap field
$nama_tempat 	= $_POST['nama_tempat'];
$alamat			= $_POST['alamat'];
$kec			= $_POST['kec'];
$lat 			= $_POST['lat'];
$long 			= $_POST['long'];
$ket 			= $_POST['ket'];
$fasilitas		= $_POST['fasilitas'];
$album			= $_POST['album'];
$pengelola		= $_POST['pengelola'];
$kategori		= $_POST['kategori'];

//$queri	= mysql_query("INSERT INTO `sig_data_place`(`id_album`, `name`, `address`, `kecamatan`, `lat`, `lon`, `description`, `facility`, `pengelola`, `kategori`) VALUES ('$album','$nama_tempat','$alamat','$kec','$lat','$long','$ket','$fasilitas','$pengelola','$kategori')");

$queri	= mysql_query("INSERT INTO `sig_data_place`(`id_album`, `name`, `address`, `sub_district`, `lat`, `lon`, `description`, `facility`, `pengelola`, `kategori`) VALUES ('$album','$nama_tempat','$alamat','$kec','$lat','$long','$ket','$fasilitas','$pengelola','$kategori')");
if($queri)
	{?>
	 <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Tempat Berhasil Ditambah</p></center>
     </div>
     <meta http-equiv="refresh" content="3; url=../dashboard/petugas/data_place.php" />
	<?php }
else
	{?>
	<div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Tempat Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="3; url=../dashboard/petugas/data_place.php" />
	<?php }
?>