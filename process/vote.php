<link href="css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
require('db.php');

$polling 	= $_POST['polling'];
//$ip   		= $_SERVER['REMOTE_ADDR'];

$queri1 = mysql_query("SELECT * FROM `sig_polling` where name = '$polling'");
$pecah = mysql_fetch_array($queri1);

if($queri1)
{
	$tambah = $pecah['mark']+1;
	$input = mysql_query("UPDATE `sig_polling` SET `mark`='$tambah' where name = '$polling'");
	?>
    <div class="callout callout-info">
    <center><h4>BERHASIL</h4>
    <p>Terima Kasih sudah memberikan suara</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../polling.php" />
    <?php
}
else 
{ ?>
	<div class="callout callout-danger">
    <center><h4>GAGAL</h4>
	<p>Maaf, Data Tidak Tersimpan</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../polling.php" />
<?php }
?>