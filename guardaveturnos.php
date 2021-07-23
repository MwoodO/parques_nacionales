<html>
<head>
 	<title> turnos guardaparques</title>
	 	<link rel="stylesheet" href="estilo1.css">
</head>
<body>
<?php
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$sql = "SELECT * FROM `turnoguarda`";
$salida = mysqli_query($conexion,$sql);
?>
<div>
 <h1> <center>Bienvenido</center></h1>
 <p>  <center>estos son los turnos de los guardaparques</center> </p>
<table>
<tr>
	<td> Guardaparque </td>
	<td> Parque</td>
	<td> Fecha </td>
	<td> Hora de inicio </td>
	<td> Hora de finalizacion </td>
</tr>
<?php
while($mostrar = mysqli_fetch_array($salida)){
?>
<tr>
	<td> <?php echo $mostrar['guardaparque'] ?> </td>
	<td> <?php echo $mostrar['parque'] ?> </td>
	<td> <?php echo $mostrar['fecha'] ?> </td>
	<td> <?php echo $mostrar['horainicio'] ?> </td>
	<td> <?php echo $mostrar['horafinal'] ?></td>
</tr>
<?php
}
?>
</table>
 </div>
</body>
</html>