<?php
/*validacion*/
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
/*coneccion base de datos*/
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
$consulta = "SELECT 'correo' and 'contrasena' FROM visitantes WHERE correo='".$correo."' and contrasena='".$contrasena."'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
if($filas == 1)
{
	header("location:visitantepagina.php");
}else{
	?>
	<?php
	include('visitantesusuario.php');
	?>
	<H2 class="bad"> error en la contraseña o el usuario </H2>
    <?php
	}
	
mysqli_free_result($resultado);
mysqli_close($conexion);