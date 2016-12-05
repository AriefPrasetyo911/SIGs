<?php
session_start();

if($_SESSION['Hak_Akses'] == "Administrator")
{ 
     header("Location:../dashboard/administrator/index.php");
}
else if($_SESSION['Hak_Akses'] == "Petugas")
{
	header("Location:../dashboard/petugas/index.php");
}
?>