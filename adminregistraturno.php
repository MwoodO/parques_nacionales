<!DOCTYPEhtml>
<html>
<head>
	<title> Turnos	</title>
</head>
<body>
<form name="f1" action="registroturno.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
			<tr><td colspan="2">  Distribucion de los turnos </td></tr>
			<tr>

				<td>usuario del guardaparque </td>
				<td> <label>

	<input 	type="text" name="guardaparque" size="15" > </label> </td>
			</tr>
			<tr>
				<td> Codigo del parque </td>
				<td> <label> <input type="text" name="parque" size="15" > </label> </td>
			</tr>
			<tr>
			   <td> Fecha </td>
			   <td> <label> <input type="date" name="fecha" size="15"> </label> </td>
			</tr>
            <tr>
				<td>Hora de inicio </td>
				<td> <label><input type="time" name="horainicio" size="15"/> </label> </td>
			</tr>
            <tr>
				<td>Hora de termino</td>
				<td><label> <input type="time" name="horafinal" size="15"/> </label> </td>
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
