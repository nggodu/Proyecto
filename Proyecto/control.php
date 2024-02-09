<?php
session_start();
include 'conexion.php';
$usuario = $_POST['usuario'];

$clave = $_POST['password'];

$sentenciaSQL= "select * from clientes where idusuario= '$usuario' and clave ='$clave'";

$resultados = $conexion->query($sentenciaSQL);

if ($resultados->num_rows>0) {
	
	while ($registros = $resultados -> fetch_array()){
		
	$nombre = $registros ['idusuario'];
	
	$_SESSION['nombrecliente']=$nombre;	

	header ('location:app.php');
	}
	
	
	}
	else{
		
	echo "Datos Incorrectos, por favor intente nuevamente";
	}
	
	?>