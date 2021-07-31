<html>
<head>
    <meta charset="utf-8">
	<title>  Guardaparque</title>
	<link rel="stylesheet" href="estilo/estiloregistro.css">
</head>
<body>
 <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html"> Cerrar sesion </a>
	   <a href="http://localhost/parquesnacionales/guardapagina.php"> ATRAS </a>
     </ul>
</div>
<form name="f1" action="guardavalidaingreso.php" method="POST">
<table>
			<tr><th colspan="2">Registro  de los visitantes</th></tr>
            <tr>
				<td> codigo agenda</td>
				<td><input type="text" required placeholder="ingrese codigo del agendamiento " name="codigoagenda" size="20"/></td>
            </tr>
			<tr>
				<td> acompañantes </td>
				<td><input type="text" required   name="acompanantes" size="20" ></td>
			</tr>
			<tr>
				<td> Hora entrada</td>
				<td> <input type="time" required name="horaentrada" size="20" ></td>
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

