<?php
$conexion=mysqli_connect("localhost","root","","parquesnacionales");
$sql="SELECT *from agendavisita";
$salida=mysqli_query($conexion,$sql);
$seleccion='<select name="codigoB">';
while($fila=mysqli_fetch_assoc($salida)){
	$seleccion=$seleccion.'<option value="'.$fila['codigo'].'">'.$fila['codigo'].'</option>';
}
$seleccion=$seleccion.'</select>';
?>
<html>
<head>
<title> Actualizar agendamiento</title>
</head>
<Body>
<form name="f1" action="visitanteactualizaagenda.php" method="post">
<?php echo $seleccion; ?>
<input type="submit" name="buscar" value="Buscar">
</form>
</body>
</html>
<?php

if(isset($_POST['buscar'])){
$sql="SELECT * FROM agendavisita where codigo='".$_POST['codigoB']."'";
$salida=mysqli_query($conexion,$sql);
while($fila=mysqli_fetch_assoc($salida)){
	$a=$fila['codigo'];
	$b=$fila['correo'];
	$c=$fila['parque'];
	$d=$fila['fecha']; 
	$e=$fila['acompanantes'];
}
echo '<form name="f1" action="visitanteactualizaagenda.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="boton">FORMULARIO DE modificacion</td>
  </tr>
   <tr>
    <td class="tdTitulo">Datos</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%">codigo</td>
        <td width="67%"><label>
          <input type="text" name="codigo" id="codigo" size="20" value="'.$a.'" readonly/>
        </label></td>
      </tr>
      <tr>
        <td>correo</td>
        <td><label>
          <input type="text" name="correo" id="correo" size="20" value="'.$b.'" readonly/>
        </label></td>
      </tr>
      <tr>
        <td>parque</td>
        <td><label>
          <input type="text" name="parque" id="parque" size="20"/ value="'.$c.'">
        </label></td>
      </tr>
     
      <tr>
        <td>fecha</td>
        <td><label>
          <input type="fecha" name="fecha" id="fecha" size="20"/ value="'.$d.'">
        </label></td>
      </tr>
	  <tr>
        <td>acompañantes</td>
        <td><label>
          <input type="text" name="acompanantes" id="acompanates" size="20"/ value="'.$e.'">
        </label></td>
      </tr>
    </table></td>
  </tr>  
  <tr>
    <td class="boton">
  
      <label>
        <input type="submit" name="modifica" id="modifica" value="ACTUALIZAR" />
    </label></td></tr>
</table>
</form>';
}
if(isset($_POST['modifica'])){
	$a = $_POST['codigo'];
	$b = $_POST['correo'];
	$c = $_POST['parque'];
	$d = $_POST['fecha']; 
	$e = $_POST['acompanantes'];
	$sql="UPDATE agendavisita SET  correo= '".$b."',parque='".$c."', fecha='".$d."', acompanantes='".$e."' where codigo='".$a."' ";
	$salida=mysqli_query($conexion,$sql);
	if(mysqli_affected_rows($conexion)>0){
		echo"Datos Insertados";
		}else{
			echo "No se logro insertar datos";
		}
}

?>
