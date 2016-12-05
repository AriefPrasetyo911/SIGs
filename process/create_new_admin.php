<link href="css/AdminLTE.css" rel="stylesheet" media="all" />

<?php
require('db.php');
error_reporting(0);

//untuk pengamanan SQL INJEQ
function anti_injection($data){
$filter = mysql_real_escape_string(

stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)))

);
return $filter;
}

//buar lebih mantap kita tambahkan pengacak =]]
$pengacak = "_Kmzwa8awaa27_";

$username 		= anti_injection($_POST['username']);
$password 		= anti_injection(md5($pengacak.($_POST['password']).$pengacak));
$nama			= anti_injection($_POST['nama']);
$jk			 	= anti_injection($_POST['jk']);
$address		= anti_injection($_POST['address']);
$akses 			= anti_injection($_POST['akses']);

$queri			= mysql_query("INSERT INTO `sig_auth_user`(`Username`, `Password`, `Nama_Lengkap`, `Jenis_Kelamin`, `Alamat`, `Hak_Akses`) VALUES ('$username','$password','$nama','$jk','$address','$akses')");
if($queri)
{
	?>
     <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Administartor Berhasil Ditambah.</p></center>
     </div>
    <meta http-equiv="refresh" content="3; url=../dashboard/administrator/data_admin.php" />
    <?php
}
else
{
	?>
    <div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Administartor Gagal Ditambah.</p></center>
    </div>
    <meta http-equiv="refresh" content="3; url=../dashboard/administrator/data_admin.php" />
    <?php
}
?>