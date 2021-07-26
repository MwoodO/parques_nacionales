<html>
<head>
 	<title> Administrador</title>
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
    <td> Codigo </td>
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
    <td> <?php echo $mostrar['codigo'] ?></td>
	<td> <?php echo $mostrar['usuario'] ?> </td>
	<td> <?php echo $mostrar['parque'] ?> </td>
	<td> <?php echo $mostrar['fecha'] ?> </td>
	<td> <?php echo $mostrar['horainicio'] ?> </td>
	<td> <?php echo $mostrar['horafinal'] ?></td>
	
</tr>
<?php
}
?>
</table>
<a href="http://localhost/parquesnacionales/gestionturnos.php" TARGET="_self"> <p class="barra" > pagina anterior </p> </a>
<a href="http://localhost/parquesnacionales/adminpagina.php" TARGET="_self"> <p class="barra" > pagina de inicio  </p> </a>
 </div>
</body>
</html>
