<html>
<head>
    <meta charset="utf-8">
	<title>  Administrador</title>
	<link rel="stylesheet" href="estilo/estiloregistro.css">
</head>
<body>
   <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html"> Cerrar sesion </a>
	 	 <a href="http://localhost/parquesnacionales/adminpagina.php"> pagina de inicio </a>
	 <a href="http://localhost/parquesnacionales/admingestionguarda.php">pagina anterior</a>
     </ul>
	 </div>
<form name="f1" action="adminregistroguarda.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
			<tr><th colspan="2">   Registro  de nuevos Guardaparques</th></tr>
						            <tr>
				<td> usuario</td>
				<td> <input type="text" required  placeholder="ingrese nuevo usuario" name="usuario" size="20"/></td>
            </tr>
			<tr>
				<td> Contraseña </td>
				<td><input type="text" required  placeholder="********" name="contrasena" size="20" ></td>
			</tr>
			<tr>
				<td> Rut </td>
				<td><input type="text" required placeholder="ingrese RUT" name="rut" size="20" ></td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type="text" required  placeholder="ingrese nombre" name="nombre" size="20" ></td>
			</tr>
			<tr>
			   <td> Apellido paterno </td>
			   <td><input type="text" required  placeholder="ingrese apellido paterno" name="apaterno" size="20"></td>
			</tr>
            <tr>
				<td>Apellido materno </td>
				<td><input type="text" required  placeholder="ingres apellido materno" name="amaterno" size="20"/></td>
			</tr>
            <tr>
				<td>Telefono</td>
				<td><input type="text" required  placeholder="ej.+56978423042" name="telefono" size="20"/></td>
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
