<?php
//** validacion **//
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
//coneccion base de datos
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$consulta = "SELECT * FROM administrador WHERE usuario='".$usuario."' and contrasena='".$contrasena."'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
if($filas == 1)
{
	header("location:adminpagina.php");
}else{
	?>
	<?php
	include('adminacceso.php');
	?>
	<H2 class="bad"> error en la contraseña o el usuario </H2>
    <?php
	}
	
mysqli_free_result($resultado);
mysqli_close($conexion);