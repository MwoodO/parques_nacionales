<html>
<head>
	<title>  Administrador</title>
</head>
<body>
<form name="f1" action="adminregistroguarda.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
			<tr><td colspan="2">   Registro  de nuevos Guardaparques</td></tr>
						            <tr>
				<td> usuario</td>
				<td><label> <input type="text" placeholder="ingrese nuevo usuario" name="usuario" size="20"/> </label> </td>
            </tr>
			<tr>
				<td> Contraseña </td>
				<td> <label> <input type="text" placeholder="********" name="contrasena" size="20" > </label> </td>
			</tr>
			<tr>
				<td> Rut </td>
				<td> <label> <input type="text" placeholder="ingrese RUT" name="rut" size="20" > </label> </td>
			</tr>
			<tr>
				<td> Nombre				</td>
				<td> <label> <input type="text" placeholder="ingrese nombre" name="nombre" size="20" > </label> </td>
			</tr>
			<tr>
			   <td> Apellido paterno </td>
			   <td> <label> <input type="text" placeholder="ingrese apellido paterno" name="apaterno" size="20"> </label> </td>
			</tr>
            <tr>
				<td>Apellido materno </td>
				<td> <label><input type="text" placeholder="ingres apellido materno" name="amaterno" size="20"/> </label> </td>
			</tr>
            <tr>
				<td>Telefono</td>
				<td><label> <input type="text" placeholder="ej.+56978423042" name="telefono" size="20"/> </label> </td>
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
