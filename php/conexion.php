<?php 
    $mysqli = new mysqli('67.227.237.154', 'seguri64_whatjon', '%Vek=CVV1lA;', 'seguri64_whatjons');
    //$mysqli = new mysqli('localhost', 'root', '1234', 'sce');
    if(!$mysqli){
    	echo "Error conectando a la base de datos";
		exit();
    }
    	//echo "Exito conectando a la base de datos";
    	mysqli_set_charset($mysqli, "utf8");

    	
    
  
?>