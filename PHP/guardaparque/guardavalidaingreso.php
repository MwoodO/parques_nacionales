<?php
/*conectarse a la base de datos*/
$conexion=mysqli_connect('localhost','root','','parquesnacionales');
/*validar que se presiono boton de registro*/ 
/*para iniciar la insercion de datos a la bd*/
if(isset($_POST['registro'])){
$a = $_POST['codigoagenda'];
$b = $_POST['acompanantes'];
$d = $_POST['horaentrada'];
  $sql="INSERT INTO guardavisita VALUES('".$a."','".$b."','".$d."')";
/*ejecutar la consulta*/
$salida=mysqli_query($conexion,$sql);
/*validar accion de insercion*/
  if(mysqli_affected_rows($conexion)>0){
	  header("location:guardaregistravisita.php");
	  echo "Datos Insertados";
  }else{
	  echo "No se logro insertar datos";
  }
}
?>
