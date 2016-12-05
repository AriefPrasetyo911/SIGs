<?php
$server		= 'localhost';
$username	= 'root';
$password	= '';     
$database	= 'sig_kab_pbg';

//lakukan konseksi
mysql_connect($server,$username,$password) or die ("Koneksi Gagal");
mysql_select_db($database) or die ("database tidak ditemukan");

?>