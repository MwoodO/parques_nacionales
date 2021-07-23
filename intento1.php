<html>
<head>
 	<title> turnos guardaparques</title>
	 	<link rel="stylesheet" href="estilo1.css">
</head>
<body>
<?php
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$sql = "SELECT 'g.nombre', 'g.apaterno', 'p.nparque', 't.fecha', 't.horainicio', 't.horafinal' FROM 'guardaparques AS g', 'parquess AS p', 'turnoguarda as t' WHERE 'g.usuario' = 't.guardaparque' AND 'p.idparque' ='t.parque'";
$salida = mysqli_query($conexion,$sql);
?>
<div>
 <h1> <center>Bienvenido</center></h1>
 <p>  <center>estos son los turnos de los guardaparques</center> </p>
<table>
<tr>
	<td> nombre </td>
	<td> apellido</td>
	<td> parque </td>
	<td> fehca </td>
	<td> Hora de inicio </td>
	<td> Hora de finalizacion </td>
</tr>
<?php
while($mostrar = mysqli_fetch_array($salida)){
?>
<tr>
	<td> <?php echo $mostrar['g.nombre'] ?> </td>
	<td> <?php echo $mostrar['g.aparterno'] ?> </td>
	<td> <?php echo $mostrar['p.nparque'] ?> </td>
	<td> <?php echo $mostrar['t.fecha'] ?> </td>
	<td> <?php echo $mostrar['t.horainicio'] ?> </td>
	<td> <?php echo $mostrar['t.horafinal'] ?></td>
</tr>
<?php
}
?>
</table>
 </div>
</body>
</html>