<?php

	include ("con2.php");

	$query = "SELECT * FROM statusht";
	$resultado = mysqli_query($conexion, $query);

	if(!$resultado){
		die("Error");
	}else{
		while($data = mysqli_fetch_assoc($resultado)){
			$arreglo["data"][]= $data;

		}
		echo json_encode($arreglo);
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);