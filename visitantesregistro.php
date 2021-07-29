<!DOCTYPEhtml>
<html>
<head>
    <meta charset="utf-8">
	<title> registrate	</title>
	<link rel="stylesheet" href="estilo/estiloregistro.css">
</head>
<body>
    <form name="f1" action="registrovisitante.php" method="POST">
        <table>
			<tr><td colspan="2">REGISTRO VISITANTE</td></tr>
            <tr><th colspan="2">  DATOS DE USUARIO  </th></tr>
            <tr>
				<td> Correo</td>
				<td><input type="text" required placeholder="ingrese un correo" name="correo"></td>
            </tr>
			<tr>
				<td> Contraseña </td>
				<td><input type="password" required placeholder="********" name="contrasena" size="20" ></td>
			</tr>
			<tr><th colspan="2">  DATOS PERSONALES  </th></tr>
			<tr>
				<td> Nombre</td>
				<td><input type="text" required  placeholder="ingrese su nombre" name="nombre" size="20" ></td>
			</tr>
			<tr>
				<td> Rut </td>
				<td><input type="text" required placeholder="ej:19292880-k, sin puntos y con guion" name="rut" size="20" ></td>
			</tr>
			
			<tr>
			   <td> Apellido paterno </td>
			   <td><input type="text" required  placeholder="ingrese su apellido paterno" name="apaterno" size="30"></td>
			</tr>
            <tr>
				<td>Apellido materno </td>
				<td><input type="text" required  placeholder="ingres su apellido materno" name="amaterno" size="30"/></td>
			</tr>
            <tr>
				<td>Telefono</td>
				<td> <input type="text" required  placeholder="ej.+56978423042" name="telefono" size="30"/></td>
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
