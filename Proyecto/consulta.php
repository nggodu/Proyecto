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
  
  <li><a href="transferencias.php" title="...">TRANSFERENCIAS</a></li></br>
  </br>
  <li><a href="d_usuarios.php" title="...">ADMINISTRACION DE USUARIOS</a></li></br>

 </ul>
 
 <table  WIDTH="50% "border="2" style="margin: 0 auto;">
<th>Cedula </th>
<th>Banco </th>
<th> No_Tarjeta</th>
<th>Saldo</th>

<?php

$sentenciaSQL= "select cedula,banco,no_tarjeta,saldo from datos where nombre= '$nom'";

$resultados = $conexion->query($sentenciaSQL);

while($fila= $resultados-> fetch_assoc()){
	?>
	<tr>
	<td><?php echo $fila['cedula']?></th>
	
	<td><?php echo $fila['banco']?></th>
	
	<td><?php echo $fila['no_tarjeta']?></th>
	
	<td><?php echo $fila['saldo']?></th>
	</tr>
	
<?php } ?>
</table>	

</body> 
</html>