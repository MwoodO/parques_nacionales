<html>
<head>
	<title>  Guardaparque</title>
</head>
<body>
<form name="f1" action="guardavalidaingreso.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
			<tr><td colspan="2">   Registro  de de los visitantes</td></tr>
            <tr>
				<td> codigo agenda</td>
				<td><label> <input type="text" required placeholder="ingrese codigo del agendamiento " name="codigoagenda" size="20"/> </label> </td>
            </tr>
			<tr>
				<td> acompañantes </td>
				<td> <label> <input type="text" required   name="acompanantes" size="20" > </label> </td>
			</tr>
			<tr>
				<td> Fecha </td>
				<td> <label> <input type="date"  required name="fecha" size="20" > </label> </td>
			</tr>
			<tr>
				<td> Hora entrada		</td>
				<td> <label> <input type="time" required name="horaentrada" size="20" > </label> </td>
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
