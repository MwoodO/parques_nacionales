<html>
<head>
	<meta charset="utf-8">
	<title>Reserve su visita</title>
	<link rel="stylesheet" href="estilo/estiloregistro.css">
</head>
<body>
   <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html"> Cerrar sesion </a>
	 <a href="http://localhost/parquesnacionales/visitantepagina.php">ATRAS</a>
     </ul>
</div>
<form name="f1" action="visitantevalidacionagenda.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
			<tr><th colspan="2"> Visitantes</th></tr>
						            <tr>
				<td> Correo</td>
				<td><input type="text" placeholder="ingrese su correo" name="correo" size="30"/></td>
            </tr>
			<tr>
				<td> parque</td>
				<td><input type="text" placeholder="ingrese el parque que desea visitar" name="parque" size="30" ></td>
			</tr>
			<tr>
				<td> fecha </td>
				<td><input type="date"  name="fecha" size="30" > </td>
			</tr>
			<tr>
				<td> acompañantes			</td>
				<td><input type="text" placeholder="ingrese cantidad de acompañantes" name="acompanantes" size="30" ></td>
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
