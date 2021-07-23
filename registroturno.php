<?php
//conectarse a la base de datos
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
//validar que se presiono boton de registro para iniciar la insercion de datos a la bd
if(isset($_POST['registro'])){
$a = $_POST['guardaparque'];
$b = $_POST['parque'];
$c = $_POST['fecha'];
$d = $_POST['horainicio'];
$e = $_POST['horafinal'];
$sql="INSERT INTO turnoguarda VALUES('".$a."','".$b."','".$c."', '".$d."','".$e."')";
//ejecutar la consulta
$salida=mysqli_query($conexion,$sql);
//validar accion de insercion
  if(mysqli_affected_rows($conexion)>0){
	  echo "Datos Insertados";
  }else{
	  echo "No se logro insertar datos";
  }
}
?>	
