<html>
<head>
 	<title> Administrador</title>
    <link rel="stylesheet" href="estilo/estilotablas.css">
</head>
<body>
<?php
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$sql = "SELECT * FROM `agendavisita`";
$salida = mysqli_query($conexion,$sql);
?>
<div>
 <h1> <center>Registro de visitantes</center></h1>
 <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html"> Cerrar sesion </a>
	   <a href="http://localhost/parquesnacionales/adminpagina.php">ATRAS</a>
     </ul>
</div>
<table>
<tr>
    <td> Correo </td>
	<td> Fecha Visita  </td>
	<td> Acompañantes</td>
	<td> Parque a visitar</td>
</tr>
<?php
while($mostrar = mysqli_fetch_array($salida)){
?>
<tr>
    <td> <?php echo $mostrar['correo'] ?></td>
	<td> <?php echo $mostrar['fecha'] ?> </td>
	<td> <?php echo $mostrar['acompanantes']?></td>
	<td> <?php echo $mostrar['parque']?></td>
	
	
</tr>
<?php
}
?>
</table>
 </div>
</body>
</html>