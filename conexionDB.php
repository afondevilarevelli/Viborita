<?php
		//guardamos los datos de la base de datos
		$db_host = "localhost:3308";
		$db_nombre = "sistema-login";
		$db_usuario = "root";
		$db_contra = "";
		
		//hacemos la conexion mediante la función mysqli_connect();
		$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
		
		//Para ver si hubo error de conexion con el host
		if( mysqli_connect_errno()){
			echo "Fallo al conectar con la base de datos";
			exit(); //para que no siga ejecutando código
		}
		
		//Si presindimos del último argumento en mysqli_connect, le decimos el nombre de la DB así
		mysqli_select_db($conexion, $db_nombre) or die("No se encontró la DB con el nombre de " . $db_nombre);
		
		mysqli_set_charset($conexion, "utf8"); //Para que reconozca caracteres latinos	
	?>