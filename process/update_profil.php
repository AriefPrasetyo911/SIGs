<!--load css-->
<link href="../dashboard/superadmin/css/AdminLTE.css" rel="stylesheet" media="all" />

<?php
require("db.php");

//untuk pengamanan SQL INJEQ
function anti_injection($data){
$filter = mysql_real_escape_string(

stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)))

);
return $filter;
}

$Username		= anti_injection($_POST['Username']);
$Password 		= anti_injection($_POST['Password']);
$Names 			= anti_injection($_POST['Names']);
$jk 			= anti_injection($_POST['jk']);
$Alamat 		= anti_injection($_POST['Alamat']);
$Hak_Akses 		= anti_injection($_POST['Hak_Akses']);

//buat lebih mantap kita tambahkan pengacak =]]
$pengacak = "_Kmzwa8awaa27_";
//
$enkrip_pass	= anti_injection(md5($pengacak.($Password).$pengacak));
$passwordnow2   = anti_injection(md5($pengacak.($_POST['Passwordnow']).$pengacak));

$cekpass = mysql_query("SELECT * FROM `sig_auth_user` WHERE Username='$Username' AND Password='$passwordnow2'");
$ketemu = mysql_fetch_array($cekpass);

if($ketemu['Password'] == $passwordnow2)
{
	$ubah = mysql_query("UPDATE `sig_auth_user` SET `Username`='$Username',`Password`='$enkrip_pass',`Nama_Lengkap`='$Names',`Jenis_Kelamin`='$jk',`Alamat`='$Alamat',`Hak_Akses`='$Hak_Akses' WHERE Username='$Username'");
	
	if($ubah)
	{
		?>
        <div class="callout callout-info">
         <center><h4>BERHASIL</h4>
         <p>Profile Berhasil Diubah</p></center>
        </div>
        <meta http-equiv="refresh" content="3; url=../dashboard/administrator/profile.php" />
        <?php
	}
	else
	{
		?>
        <div class="callout callout-danger">
        <center><b><h4> GAGAL </h4></b>
        <p>Profile Gagal Ditambah.</p></center>
        </div>
        <meta http-equiv="refresh" content="3; url=../dashboard/administrator/profile.php" />
        <?php
	}
}
else
{
	?>
    <div class="callout callout-danger">
    <center><b><h4> GAGAL </h4></b>
    <p>Maaf, Password Sekarang Tidak Sama.</p></center>
    </div>
    <meta http-equiv="refresh" content="3; url=../dashboard/superadmin/profile.php" />
    <?php
}
?>