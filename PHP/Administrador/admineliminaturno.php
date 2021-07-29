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
	 <a href="http://localhost/parquesnacionales/adminpagina.php"> pagina de inicio  </a>
	 <a href="http://localhost/parquesnacionales/admingestionturnos.php"> pagina anterior </a>

     </ul>
</div>
<?php
$conexion=mysqli_connect("localhost","root","","parquesnacionales");
$sql="SELECT * FROM turnoguarda";
$salida=mysqli_query($conexion,$sql);
echo '<table border="1" class="tabla2" align="center" width="55%"><tr>
 <td> codigo </td>
 <td> usuario </td>
 <td> parque</td>
 <td> fecha </td> 
 <td> hora inicio</td>
 <td> hora final</td>
 </tr>';
$x=1;
while($fila=mysqli_fetch_assoc($salida)){
	echo'
	<tr> <form name="f'.$x.'" action="admineliminaturno.php" method="POST">
	<td>'.$fila['codigo'].'</td>
	<td>'.$fila['usuario'].'</td>
	<td>'.$fila['parque'].'</td>
	<td>'.$fila['fecha'].'</td> 
	<td>'.$fila['horainicio'].'</td>
	<td>'.$fila['horafinal'].'</td>
	<td><input type="submit" name="eliminar" value="eliminar">
	<input type="hidden" name="codigoE" value="'.$fila['codigo'].'" </td> </form></tr>';
	$x++;
}
echo'
</table>
</body>
</html>';
if(isset($_POST['eliminar'])){
	$a=$_POST['codigoE'];	
$sql="DELETE FROM turnoguarda WHERE codigo= '".$a."'";
$salida=mysqli_query($conexion,$sql);
if(mysqli_affected_rows($conexion)>0){
	echo "datos eliminados";
		header("location:admineliminaturno.php");
}else{
	echo "no se logro eliminar datos";
	
}
}
?>