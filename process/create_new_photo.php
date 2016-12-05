<!--load css-->
<link href="css/AdminLTE.css" rel="stylesheet" media="all" />

<?php
error_reporting(0);
require('db.php');
require('function_resize_foto.php');

// settings
$max_file_size = 1600*1200; 
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail size
$sizes = array(250 => 250);

if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['foto'])) {
	if( $_FILES['image']['size'] < $max_file_size ){
		// ekstensi file
		$ext = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			/* resize image */
			foreach ($sizes as $w => $h) {
				$files[] = resize($w, $h);
			}

		} else {
			$msg = 'Jenis file tidak dissuport';
			}
		} else{
			$msg = 'Tolong upload image yang resolusinya lebih kecil dari 1600 x 1200';
		}
}

/*PENGATURAN FOLDER FOTO */
 $folder = "../image/photo/";
 $folder = $folder . basename( $_FILES['foto']['name']);
 

//tangkap name setiap field
$foto 			= ($_FILES['foto']['name']);
$ket 			= $_POST['ket'];
$album 			= $_POST['album'];

//queri
$queri 	= mysql_query("INSERT INTO `sig_data_photo`(`id_album`, `foto`, `keterangan`) VALUES ('$album','$foto','$ket')");
$queri2	= mysql_query("UPDATE `sig_data_place` SET `id_album`='$album' WHERE id_album = '$album'");

if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder))
{
	?>
    <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Foto Berhasil Ditambah</p></center>
     </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_photo.php" />
    <?php
}
else
{
	?>
    <div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Foto Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_photo.php" />
	<?php
}
?>