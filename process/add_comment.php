<link href="css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
include "db.php";
$name		= $_POST['name'];
$id_album	= $_POST['id_album'];
$id_place 	= $_POST['id_place'];
//
$names		= $_POST['names'];
$email		= $_POST['email'];
$message	= $_POST['message'];
$waktu	= date('Y-m-d H:i:s');

$query = "INSERT INTO `sig_comment`(`id_place`, `comm_name`, `email`, `message`, `time`) VALUES ('$id_place','$names','$email','$message', '$waktu')";
$exec  = mysql_query($query);

if($query)
{
	?>
    <div class="callout callout-info">
    <center><h4>BERHASIL</h4>
    <p>Terima kasih sudah memberikan saran</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../detail_objek_wisata.php?name=<?php echo $name?>&&id_place=<?php echo $id_place?>&&id_album=<?php echo $id_album?>" />
	<?php
}
else
{
	?>
    <div class="callout callout-danger">
    <center><h4>GAGAL</h4>
    <p>Maaf saran Anda gagal tersimpan</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../detail_objek_wisata.php?name=<?php echo $name?>&&id_place=<?php echo $id_place?>&&id_album=<?php echo $id_album?>" />
    <?php
}
?>