<?php
	require("conexionDB.php");
	
	$nomUsuario = $_GET["nomUsuario"];
	$pass = $_GET["password"];
	$query = "SELECT * FROM usuarios u WHERE u.nombreUsuario = '$nomUsuario' AND u.password = '$pass'";
	$resultado = mysqli_query($conexion, $query);
	if(mysqli_affected_rows($conexion) > 0){
		$arrayResult = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		setcookie("usuario", $nomUsuario, time() + 3600,"/lionking");
		echo $arrayResult["nombre"]; 
	}
	else{
		echo 0;
	}
?>