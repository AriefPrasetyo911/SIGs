<link href="css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
error_reporting(0);
require("db.php");
//tangkap PK
$Username = $_GET['Username'];
//hapus
$delete = mysql_query("DELETE FROM `sig_auth_user` WHERE Username='$Username'");

if($delete)
{
	?>
     <div class="callout callout-info">
     <center><h4>BERHASIL</h4>
     <p>Admin dengan Username : <?php echo $Username;?>  Berhasil Dihapus</p></center>
     </div>
     <meta http-equiv="refresh" content="3; url=../dashboard/administrator/data_admin.php" />
    <?php
}
else
{
	?>
     <div class="callout callout-danger">
     <center><b><h4> GAGAL </h4></b>
     <p>Admin dengan Username : <?php echo $Username;?> Gagal Dihapus</p></center>
     </div>
     <meta http-equiv="refresh" content="3; url=../dashboard/administrator/data_admin.php" />
    <?php
}
?>