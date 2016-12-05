<link href="css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
require("db.php");

$nama	= htmlentities(mysql_real_escape_string($_POST['nama']));
$email	= htmlentities(mysql_real_escape_string($_POST['email']));
$pesan	= htmlentities(mysql_real_escape_string($_POST['pesan']));
$optionsRadios	= htmlentities(mysql_real_escape_string($_POST['optionsRadios']));
$waktu	= date('Y-m-d H:i:s');

$input	= mysql_query("INSERT INTO `sig_guestbook`(`nama_lengkap`, `jenis_kelamin`, `email`, `pesan`, `waktu`) VALUES ('$nama','$optionsRadios','$email','$pesan','$waktu')");
if($input)
{ ?>
	<div class="callout callout-info">
     <center><h4>Terima Kasih</h4>
     <p>Buku Tamu Berhasil Ditambah.</p></center>
     </div>
    <meta http-equiv="refresh" content="2; url=../buku_tamu.php" />
<?php	
}
else
{ ?>
	<div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Buku Tamu Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../buku_tamu.php" />
<?php }
?>