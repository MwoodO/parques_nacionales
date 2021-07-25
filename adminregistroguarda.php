<?php
//conectarse a la base de datos
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
//validar que se presiono boton de registro para iniciar la insercion de datos a la bd
if(isset($_POST['registro'])){
$a = $_POST['usuario'];
$b = $_POST['contrasena'];
$c = $_POST['rut'];
$d = $_POST['nombre'];
$e = $_POST['apaterno'];
$w = $_POST['amaterno'];
$g = $_POST['telefono'];
  $sql="INSERT INTO guardaparques VALUES('".$a."','".$b."','".$c."', '".$d."','".$e."','".$w."', '".$g."')";
//ejecutar la consulta
$salida=mysqli_query($conexion,$sql);
//validar accion de insercion
  if(mysqli_affected_rows($conexion)>0){
	  echo "Datos Insertados";
	  header("location:adminpagina.php");
  }else{
	  echo "No se logro insertar datos";
  }
}
?>
