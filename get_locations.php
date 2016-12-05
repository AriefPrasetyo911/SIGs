<?php
     
    require 'process/config.php';
    try 
	{
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         
        $sth = $db->query("SELECT * FROM sig_data_place ORDER BY name ASC");
        $locations = $sth->fetchAll();
         
        echo json_encode( $locations );    
    } 
	catch (Exception $e) 
	{
        echo $e->getMessage();
    }
?>