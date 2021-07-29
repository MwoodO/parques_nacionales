<html>
<head>
 	<title> Administrador</title>
    <link rel="stylesheet" href="estilo/estilotablas.css">
</head>
<body>
<?php
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$sql = "SELECT * FROM `turnoguarda`";
$salida = mysqli_query($conexion,$sql);
?>
 <h1> <center>Turnos guardaparques</center></h1>
   <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html"> Cerrar sesion </a>
	 	 <a href="http://localhost/parquesnacionales/adminpagina.php"> pagina de inicio </a>
	 <a href="http://localhost/parquesnacionales/admingestionturnos.php">pagina anterior</a>
     </ul>
	 </div>
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
</body>
</html>