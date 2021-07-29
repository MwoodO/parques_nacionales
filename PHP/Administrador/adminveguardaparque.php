<html>
<head>
    <meta charset="UTF-8">
 	<title> Administrador</title>
 	<link rel="stylesheet" href="estilo/estilotablas.css">
</head>
<body>
<?php
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$sql = "SELECT * FROM `guardaparques`";
$salida = mysqli_query($conexion,$sql);
?>
<div>
 <h1> <center>Bienvenido</center></h1>
 <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html"> Cerrar sesion </a>
	 <a href="http://localhost/parquesnacionales/adminpagina.php"> pagina de inicio </a>
	 <a href="http://localhost/parquesnacionales/admingestionguarda.php"> pagina anterior </a>

   </ul>
</div>
 <p>  <center>Estos son los guardaparques</center> </p>
<table style="center">
<tr>
    <td> Usuario </td>
	<td> Contraseña </td>
	<td> Rut </td>
	<td> Nombre </td>
	<td> Apellido paterno </td>
	<td> Apellido materno </td>
	<td> Telefono </td>
</tr>
<?php
while($mostrar = mysqli_fetch_array($salida)){
?>
<tr>
    <td> <?php echo $mostrar['usuario'] ?></td>
	<td> <?php echo $mostrar['contrasena'] ?> </td>
	<td> <?php echo $mostrar['rut'] ?> </td>
	<td> <?php echo $mostrar['nombre'] ?> </td>
	<td> <?php echo $mostrar['apaterno'] ?> </td>
	<td> <?php echo $mostrar['amaterno'] ?></td>
	<td> <?php echo $mostrar['telefono'] ?></td>
	
</tr>
<?php
}
?>
</table>
</body>
</html>