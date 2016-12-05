<?php
    require 'process/config.php';
	
	$id_place = $_GET['id_place'];
	$name	  = $_GET['name'];
	
    try 
	{
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         
        $sth = $db->query("SELECT * FROM sig_data_place where id_place = '$id_place' AND name='$name'");
        $locations = $sth->fetchAll();
         
       // echo json_encode( $locations );    
    } 
	catch (Exception $e) 
	{
        echo $e->getMessage();
    }
	
	//header("Location: lokasi_objek.php?id_place=$id_place");
?>