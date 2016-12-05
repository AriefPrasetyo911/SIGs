<?php
session_start();
unset($_SESSION['Username']);
unset($_SESSION['Hak_Akses']);
session_destroy();
?>
<link href="../dashboard/administrator/css/AdminLTE.css" rel="stylesheet" media="all" />

<div class="callout callout-danger">
<center><b><h4> Keluar </h4></b>
<p>Anda Telah Keluar dari Sistem.</p></center>
</div>
<meta http-equiv="refresh" content="2; url=../login/index.php" />


