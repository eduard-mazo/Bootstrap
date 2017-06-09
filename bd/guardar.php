<?php

include("basedatos.php");

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$query = "INSERT INTO farma(user,pass) VALUES('$user','$pass')";
	$resultado = $base->query($query);

	if($resultado){
		echo "READY";
	}else{
		echo "SEA FEO PERO SERIO";
	}
?>