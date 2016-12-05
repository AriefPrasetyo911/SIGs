<link href="../dashboard/administrator/css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
session_start();
require('db.php');
error_reporting(0);

//untuk pengamanan SQL INJEQ
function anti_injection($data){
$filter = mysql_real_escape_string(

stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)))

);
return $filter;
}

//buat lebih mantap kita tambahkan pengacak =]]
$pengacak = "_Kmzwa8awaa27_";

$username = anti_injection($_POST['username']);
$password = anti_injection(md5($pengacak.($_POST['password']).$pengacak));


$login  = mysql_query("SELECT * FROM `sig_auth_user` WHERE Username = '$username' AND Password='$password'");
$ketemu = mysql_num_rows($login);
$sikat  = mysql_fetch_array($login);
	
	if($ketemu == 1)
	{
		$_SESSION['Username'] = $sikat['Username'];
		$_SESSION['Hak_Akses'] = $sikat['Hak_Akses'];
		$_SESSION['Jenis_Kelamin'] = $sikat['Jenis_Kelamin'];
		
		//redirect
		header("Location:check_level.php");
	}
	else
	{
		?>
         <div class="callout callout-danger">
         <center><b><h4> Error </h4></b>
         <p>Maaf, Username atau Password yang Anda masukkan salah.</p></center>
         </div>
        <!--batas-->
        <meta http-equiv="refresh" content="5; url=../login/index.php" />
        <?php
	}

?>