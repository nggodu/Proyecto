<?php

session_start();

include("conexion.php");
$nom=$_SESSION['nombrecliente'];

?>

 
<html> 
<head> 
<Link rel="stylesheet" type="text/css" href="CSSTaller.css">

<a href="salir.php">Salir</a> 
<title>App</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head> 
<body> <h1>BIENVENIDO AL PORTAL TRANSACCIONAL ENTIDADES FINANCIERAS</h1> 
<h2>SEÑOR(A): <?php echo $nom?> </h2><br> 



<ul>
  <li><a href="consulta.php" title="...">CONSULTA PRODUCTOS</a></li></br>
  </br>
  <li><a href="transferencias.php" title="...">TRANSFERENCIAS</a></li></br>
  </br>
  <li><a href="d_usuarios.php" title="...">ADMINISTRACION DE USUARIOS</a></li></br>

 </ul>

</body> 
</html>