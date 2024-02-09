<?php

session_start();

include("conexion.php");
$nom=$_SESSION['nombrecliente'];

?>

 
<html> 
<head> 
<Link rel="stylesheet" type="text/css" href="CSSTaller.css">
<a href="APP.php">VOLVER</a> 
<title>App</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head> 
<body> <h1>BIENVENIDO AL PORTAL TRANSACCIONAL ENTIDADES FINANCIERAS</h1> 
<h2>SEÑOR(A): <?php echo $nom?> </h2><br> 



<ul>
  <li><a href="consulta.php" title="...">CONSULTA PRODUCTOS</a></li></br>
  </br>
  <li><a href="d_usuarios.php" title="...">ADMINISTRACION DE USUARIOS</a></li></br>

 </ul>

 
 <table WIDTH="50%" border="2" style="margin: 0 auto;">
<th><input type="text" name="banco" placeholder="Ingrese nombre del banco"></th>
<th><input type="text" name="cuenta" placeholder="Ingrese no_cuenta"></th>
<th><input type="text" name="valor" placeholder="Ingrese Valor"></th>
</table>
</div>
 <p align="center"><input type="submit" name="submit" value="ACEPTAR"></p>
 
</body> 
</html>