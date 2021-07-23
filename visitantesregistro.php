<!DOCTYPEhtml>
<html>
<head>
	<title> registrate	</title>
</head>
<body>
<form name="f1" action="registrovisitante.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
			<tr><td colspan="2">  Visitantes</td></tr>
						            <tr>
				<td> Correo</td>
				<td><label> <input type="text" placeholder="ingrese un correo" name="correo" size="30"/> </label> </td>
            </tr>
			<tr>
				<td> Contraseña </td>
				<td> <label> <input type="text" placeholder="********" name="contrasena" size="30" > </label> </td>
			</tr>
			<tr>
				<td> Rut </td>
				<td> <label> <input type="text" placeholder="ej:19292880-k, sin puntos y con guion" name="rut" size="30" > </label> </td>
			</tr>
			<tr>
				<td> Nombre				</td>
				<td> <label> <input type="text" placeholder="ingrese su nombre" name="nombre" size="30" > </label> </td>
			</tr>
			<tr>
			   <td> Apellido paterno </td>
			   <td> <label> <input type="text" placeholder="ingrese su apellido paterno" name="apaterno" size="30"> </label> </td>
			</tr>
            <tr>
				<td>Apellido materno </td>
				<td> <label><input type="text" placeholder="ingres su apellido materno" name="amaterno" size="30"/> </label> </td>
			</tr>
            <tr>
				<td>Telefono</td>
				<td><label> <input type="text" placeholder="ej.+56978423042" name="telefono" size="30"/> </label> </td>
            </tr>
			<tr>
			<td class="boton">
			<label>
			 <input type="submit" name="registro" value="registrar">
			 </label></td>
			 </tr>
</table>
</form>
</body>
</html>
