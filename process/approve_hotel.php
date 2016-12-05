<link href="css/AdminLTE.css" rel="stylesheet" media="all" />
<?php
include "db.php";
$id_place 		= $_GET['id_place'];
$tourism_attr	= $_GET['tourism_attr'];

$query 	= "UPDATE `sig_hotel` SET `status`='Approve' WHERE id_place = '$id_place' AND tourism_attr='$tourism_attr'";
$exec	= mysql_query($query);

if($exec)
{?>
	<div class="callout callout-info">
    <center><h4>BERHASIL</h4>
	<p>Status berhasil diubah.</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_hotel.php?id_place=<?php echo $id_place;?>&&tourism_attr=<?php echo $tourism_attr?>" />	
<?php }
else
{?>
	<div class="callout callout-danger">
    <center><h4>GAGAL</h4>
 	<p>status gagal diubah</p></center>
    </div>
    <meta http-equiv="refresh" content="2; url=../dashboard/petugas/data_hotel.php?id_place=<?php echo $id_place;?>&&tourism_attr=<?php echo $tourism_attr?>" />	
<?php }?>