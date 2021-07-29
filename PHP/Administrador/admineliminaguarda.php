<html>
<head>
       <meta charset="UTF-8">
       <title> Administrador</title>
       <link rel="stylesheet" href="estilo/estilotablas.css">
</head>
<body>
<div>
 <h1> <center>Bienvenido</center></h1>
 <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html"> Cerrar sesion </a>
	 <a href="http://localhost/parquesnacionales/adminpagina.php"> pagina inicio   </a>
	 <a href="http://localhost/parquesnacionales/admingestionguarda.php"> pagina anterior </a>

     </ul>
</div>
<?php
$conexion=mysqli_connect("localhost","root","","parquesnacionales");
$sql="SELECT * FROM guardaparques";
$salida=mysqli_query($conexion,$sql);
echo '<table border="1" class="tabla2" align="center" width="55%"><tr>
    <td> Usuario </td>
	<td> Contraseña </td>
	<td> Rut </td>
	<td> Nombre </td>
	<td> Apellido paterno </td>
	<td> Apellido materno </td>
	<td> Telefono </td>
 </tr>';
$x=1;
while($fila=mysqli_fetch_assoc($salida)){
	echo'
	<tr> <form name="f'.$x.'" action="admineliminaguarda.php" method="POST">
	<td>'.$fila['usuario'].'</td>
	<td>'.$fila['contrasena'].'</td>
	<td>'.$fila['rut'].'</td>
	<td>'.$fila['nombre'].'</td> 
	<td>'.$fila['apaterno'].'</td>
	<td>'.$fila['amaterno'].'</td>
	<td>'.$fila['telefono'].'</td>
	<td><input type="submit" name="eliminar" value="eliminar">
	<input type="hidden" name="usuarioE" value="'.$fila['usuario'].'" </td> </form></tr>';
	$x++;
}
echo'
</table>
</body>
</html>';
if(isset($_POST['eliminar'])){
	$a=$_POST['usuarioE'];	
$sql="DELETE FROM guardaparques WHERE usuario= '".$a."'";
$salida=mysqli_query($conexion,$sql);
if(mysqli_affected_rows($conexion)>0){
	echo "datos eliminados";
		header("location:admineliminaguarda.php");
}else{
	echo "no se logro eliminar datos";
	
}
}
?>