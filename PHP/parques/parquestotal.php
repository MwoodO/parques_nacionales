<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
 	<title> parque nacionales </title>
 	<link rel="stylesheet" href="estilo/estilotablas.css">
</head>
<body>
<?php
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$sql = "SELECT  `nparque`,`aforomax`,`comuna`,`region`,`accesos` FROM `parquess`";
$salida = mysqli_query($conexion,$sql);
?>
 <div>
  <h1> <center>Estos son algunos de nuestros parques</center></h1>
 <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html">Inicio</a>
     </ul>
</div>

<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td> Nombre del parque </td>
	<td> Aforo Maximo </td>
	<td> Comuna </td>
	<td> Region</td>
	<td> Accesos </td>
</tr>
<?php
while($mostrar = mysqli_fetch_array($salida)){
?>
<tr>
	<td> <?php echo $mostrar['nparque'] ?> </td>
	<td> <?php echo $mostrar['aforomax'] ?> </td>
	<td> <?php echo $mostrar['comuna'] ?> </td>
	<td> <?php echo $mostrar['region'] ?> </td>
	<td> <?php echo $mostrar['accesos'] ?></td>
</tr>
<?php
}
?>
</table>
 </div>
</body>
</html>