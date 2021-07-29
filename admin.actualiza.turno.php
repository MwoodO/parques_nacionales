<?php
$conexion=mysqli_connect("localhost","root","","parquesnacionales");
$sql="SELECT *from turnoguarda";
$salida=mysqli_query($conexion,$sql);
$seleccion='<select name="codigoB">';
while($fila=mysqli_fetch_assoc($salida)){
	$seleccion=$seleccion.'<option value="'.$fila['codigo'].'">'.$fila['codigo'].'</option>';
}
$seleccion=$seleccion.'</select>';
?>
<html>
<head>
    <title> Administrador</title>
    <link rel="stylesheet" href="estilo/estiloregistro.css">
</head>
<body>
   <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html">Cerrar sesion</a>
	 	 <a href="http://localhost/parquesnacionales/adminpagina.php"> Pagina de inicio </a>
	 <a href="http://localhost/parquesnacionales/admingestionturnos.php"> Pagina anterior </a>
     </ul>
	 </div>
<form class="from" name="f1" action="admin.actualiza.turno.php" method="post">
<?php echo $seleccion; ?>
<input type="submit" name="buscar" value="Buscar">
</form>
</body>
</html>
<?php

if(isset($_POST['buscar'])){
$sql="SELECT * FROM turnoguarda where codigo='".$_POST['codigoB']."'";
$salida=mysqli_query($conexion,$sql);
while($fila=mysqli_fetch_assoc($salida)){
	$a=$fila['codigo'];
	$b=$fila['usuario'];
	$c=$fila['parque'];
	$d=$fila['fecha']; 
	$e=$fila['horainicio'];
	$f=$fila['horafinal'];
}
echo '<form name="f1" action="admin.actualiza.turno.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="boton">FORMULARIO DE MODIFICACION</td>
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
        <td>usuario</td>
        <td><label>
          <input type="text" name="usuario" id="usuario" size="20" value="'.$b.'">
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
          <input type="date" name="fecha" id="fecha" size="20"/ value="'.$d.'">
        </label></td>
      </tr>
	  <tr>
        <td>hora inicio</td>
        <td><label>
          <input type="time" name="horainicio" id="horainicio" size="20"/ value="'.$e.'">
        </label></td>
      </tr>
	  	  <tr>
        <td>hora final</td>
        <td><label>
          <input type="time" name="horafinal" id="horafinal" size="20"/ value="'.$f.'">
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
	$b = $_POST['usuario'];
	$c = $_POST['parque'];
	$d = $_POST['fecha']; 
	$e = $_POST['horainicio'];
	$f = $_POST['horafinal'];
	$sql=" UPDATE turnoguarda SET  usuario= '".$b."',parque='".$c."', fecha='".$d."', horainicio='".$e."', horafinal='".$f."' where codigo='".$a."' ";
	$salida=mysqli_query($conexion,$sql);
	if(mysqli_affected_rows($conexion)>0){
		echo "Datos Insertados";
		}else{
			echo "No se logro insertar datos";
		}
}

?>
