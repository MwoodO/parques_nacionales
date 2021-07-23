<html>
<head>
<title> elimina una visita agendada </title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","parquesnacionales");
$sql="SELECT * FROM agendavisita";
$salida=mysqli_query($conexion,$sql);
echo '<table border="1" class="tabla2" align="center" width="55%"><tr>
 <td> codigo </td>
 <td> correo </td>
 <td> parque</td>
 <td> fecha </td> 
 <td> acompañantes</td>
 </tr>';
$x=1;
while($fila=mysqli_fetch_assoc($salida)){
	echo'
	<tr> <form name="f'.$x.'" action="visitaeliminaagenda.php" method="POST">
	<td>'.$fila['codigo'].'</td>
	<td>'.$fila['correo'].'</td>
	<td>'.$fila['parque'].'</td>
	<td>'.$fila['fecha'].'</td> 
	<td>'.$fila['acompanantes'].'</td>
	<td><input type="submit" name="eliminar" value="eliminar">
	<input type="hidden" name="codigoE" value="'.$fila['codigo'].'" </td> </form></tr>';
	$x++;
}
echo'
</table> <a href="http://localhost/parquesnacionales/visitantepamodvisita.php" TARGET="_self"> <p class="barra" > pagina anterior </p> </a>
<a href="http://localhost/parquesnacionales/visitantepagina.php" TARGET="_self"> <p class="barra" > pagina de inicio para visitante </p> </a><body>
</html>';
if(isset($_POST['eliminar'])){
	$a=$_POST['codigoE'];	
$sql="DELETE FROM agendavisita WHERE codigo= '".$a."'";
$salida=mysqli_query($conexion,$sql);
if(mysqli_affected_rows($conexion)>0){
	echo "datos eliminados";
		header("location:visitaeliminaagenda.php");
}else{
	echo "no se logro eliminar datos";
	
}
}
?>