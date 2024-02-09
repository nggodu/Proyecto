<?php

session_start();

include("conexion.php");
$nom=$_SESSION['nombrecliente'];

?>

 
<html> 
<head> 
<Link rel="stylesheet" type="text/css" href="CSSTaller.css">

<a href="app.php">VOLVER</a> 
<title>App</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head> 
<body > <h1>BIENVENIDO AL PORTAL TRANSACCIONAL ENTIDADES FINANCIERAS</h1> 
<h2>SEÑOR(A): <?php echo $nom?> </h2><br> 



<ul>
  <li><a href="consulta.php" title="...">CONSULTA PRODUCTOS</a></li></br>
  </br>
  <li><a href="transferencias.php" title="...">TRANSFERENCIAS</a></li></br>
  </br>
  

 </ul>




<h1><table WIDTH="50%" border="2" style="margin: 0 auto;">
<th>Cedula </th>
<th>Nombre </th>
<th>Apellido </th>
<th>Direccion</th>
<th>Telefono</th>
<?php

$sentenciaSQL= "select cedula,nombre, apellido, Direccion, Telefono from datos where nombre= '$nom'";

$resultados = $conexion->query($sentenciaSQL);

while($fila= $resultados-> fetch_assoc()){
	?>
	<tr>
	<td><?php echo $fila['cedula']?></th>
	
	<td><?php echo $fila['nombre']?></th>
	
	<td><?php echo $fila['apellido']?></th>
	
	<td><?php echo $fila['Direccion']?></th>
	
	<td><?php echo $fila['Telefono']?></th>
	</tr>
	
<?php } ?>
</table></h1>	


</body>

</html>

