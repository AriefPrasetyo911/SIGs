<!--load css-->
<link href="../dashboard/superadmin/css/AdminLTE.css" rel="stylesheet" media="all" />

<?php

require('db.php');

//tangkap name setiap field
$id					= $_POST['id'];
$Nama_Tempat 		= $_POST['Nama_Tempat'];
$Alamat				= $_POST['Alamat'];
$kecamatan			= $_POST['kecamatan'];
$Latitude 			= $_POST['Latitude'];
$Longitude 			= $_POST['Longitude'];
$Keterangan 		= $_POST['Keterangan'];
$Fasilitas			= $_POST['Fasilitas'];
$pengelola			= $_POST['pengelola'];
$kategori			= $_POST['kategori'];
$album				= $_POST['album'];
//queri
$queri		= mysql_query("UPDATE `sig_data_place` SET `id_place`='$id',`id_album`='$album',  `name`='$Nama_Tempat',`address`='$Alamat',`sub_district`='$kecamatan',`lat`='$Latitude',`lon`='$Longitude',`description`='$Keterangan',`facility`='$Fasilitas',`manager`='$pengelola',`kategori`='$kategori' WHERE id_place='$id'");
if($queri)
{
?>
<div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Tempat Berhasil Diubah</p></center>
     </div>
   	 <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_place.php" />
<?php
}
else
{
?>
  <div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Tempat Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_place.php" />
<?php
}
?>