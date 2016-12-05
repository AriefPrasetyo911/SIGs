<link href="css/AdminLTE.css" rel="stylesheet" media="all" />

<?php
require('db.php');
error_reporting(0);

$album = $_POST['Album'];

$queri			= mysql_query("SELECT * FROM `sig_data_photo` WHERE Album = '$album' ");
if($queri)
{
	?>
     <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Administartor Berhasil Ditambah.</p></center>
     </div>
    <meta http-equiv="refresh" content="3; url=../dashboard/superadmin/data_admin.php" />
    <?php
}
else
{
	?>
    <div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Administartor Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="3; url=../dashboard/superadmin/data_admin.php" />
    <?php
}
?>