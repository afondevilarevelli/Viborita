<?php
	require("conexionDB.php");
	
	$nom = $_POST["nombre"];
	$ape = $_POST["apellido"];
	$nomUsuario = $_POST["nomUsuario"];
	$pass = $_POST["password"];
	
	$queryVerificadora = "SELECT * FROM usuarios u WHERE u.nombreUsuario = '$nomUsuario'";
	$resultadoVerificacion = mysqli_query($conexion, $queryVerificadora);
	if(mysqli_affected_rows($conexion) > 0){
		echo 0;
		exit();
	}
	
	$query = "INSERT INTO usuarios (nombre, apellido, nombreUsuario, password)
			  VALUES ('$nom', '$ape', '$nomUsuario', '$pass')";
	$resultado = mysqli_query($conexion, $query);
	if($resultado){
		echo 1;
	}
	else{
		echo 0;
	}
?>