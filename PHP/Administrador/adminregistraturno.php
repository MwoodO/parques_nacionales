<!DOCTYPEhtml>
<html>
<head>
<meta charset="utf-8">
	<title> Turnos	</title>
	<link rel="stylesheet" href="estilo/estiloregistro.css">
</head>
<body>
   <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html">Cerrar sesion</a>
	 	 <a href="http://localhost/parquesnacionales/adminpagina.php"> pagina de inicio </a>
	 <a href="http://localhost/parquesnacionales/admingestionturnos.php">pagina anterior</a>
     </ul>
	 </div>
<form name="f1" action="adminvalidaturno.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
			<tr><th colspan="2">  Distribucion de los turnos </th></tr>
			<tr>

				<td>Usuario del guardaparque </td>
				<td>			
			         <?php
                      $conexion=mysqli_connect("localhost","root","","parquesnacionales");
                      $sql="SELECT usuario from guardaparques";
                      $salida=mysqli_query($conexion,$sql);
                      $seleccion='<select name="usuariob">';
                       while($fila=mysqli_fetch_assoc($salida)){
	                 $seleccion=$seleccion.'<option value="'.$fila['usuario'].'">'.$fila['usuario'].'</option>';
                          }
                   $seleccion1=$seleccion.'</select>';
                    ?>
					<?php echo $seleccion1; ?>
	          </td>
			</tr>
			<tr>
				<td> Codigo del parque </td>
				<td>	
    			<?php
                      $conexion=mysqli_connect("localhost","root","","parquesnacionales");
                      $sql="SELECT idparque from parquess";
                      $salida=mysqli_query($conexion,$sql);
                      $seleccion='<select name="idparqueb">';
                       while($fila=mysqli_fetch_assoc($salida)){
	                 $seleccion=$seleccion.'<option value="'.$fila['idparque'].'">'.$fila['idparque'].'</option>';
                          }
                   $seleccion=$seleccion.'</select>';
                    ?>
					<?php echo $seleccion; ?>
				  </td>
			</tr>
			<tr>
			   <td> Fecha </td>
			   <td> <input type="date" name="fecha" size="15"></td>
			</tr>
            <tr>
				<td>Hora de inicio </td>
				<td> <input type="time" name="horainicio" size="15"/></td>
			</tr>
            <tr>
				<td>Hora de termino</td>
				<td> <input type="time" name="horafinal" size="15"/></td>
            </tr>
			<tr>
			<td colspan="2" class="boton">
			 <input type="submit" name="registro" value="registrar">
			 </td>
			 </tr>
</table>
</form>
</body>
</html>
