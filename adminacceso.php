
<!DOCTYPEhtml>
<html>
<head>
	<title> Administrador	</title>
</head>
<body>
<form  action="adminvalidacion.php" method="POST">
<p>  <center>Para acceder ingrese su usuario y su contraseña</center> </p>
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">

			<tr>
				<td> Usuario </td>
				<td> <label> <input type="text"  placeholder="ingrese su usuario" name="usuario" size="20" > </label> </td>
			</tr>
			<tr>
				<td> contraseña</td>
				<td> <label> <input type="password" placeholder="ingrese su contraseña" name="contrasena" size="15" > </label> </td>
			</tr>
			<tr>
			<td class="boton">
			<label>
			 <input type="submit" name="registro" value="acceder">
			 </label></td>
			 </tr>
</table>
</body>
</html>
