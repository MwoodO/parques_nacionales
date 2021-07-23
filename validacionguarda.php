<?php
//** validacion **//
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
//coneccion base de datos
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$consulta = "SELECT 'usuario' and 'contrasena' FROM guardaparques WHERE usuario='".$usuario."' and contrasena='".$contrasena."'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
if($filas == 1)
{
	header("location:guardapagina.php");
}else{
	?>
	<?php
	include('guardaacceso.php');
	?>
	<H2 class="bad"> error en la contraseña o el usuario </H2>
    <?php
	}
	
mysqli_free_result($resultado);
mysqli_close($conexion);