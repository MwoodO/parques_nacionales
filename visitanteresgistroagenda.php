<html>
<head>
	<title> visitante	</title>
</head>
<body>
<form name="f1" action="visitantevalidacionagenda.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
			<tr><td colspan="2">  Visitantes</td></tr>
						            <tr>
				<td> Correo</td>
				<td><label> <input type="text" placeholder="ingrese su correo" name="correo" size="30"/> </label> </td>
            </tr>
			<tr>
				<td> parque</td>
				<td> <label> <input type="text" placeholder="ingrese el parque que desea visitar" name="parque" size="30" > </label> </td>
			</tr>
			<tr>
				<td> fecha </td>
				<td> <label> <input type="date"  name="fecha" size="30" > </label> </td>
			</tr>
			<tr>
				<td> acompañantes			</td>
				<td> <label> <input type="text" placeholder="ingrese cantidad de acompañantes" name="acompanantes" size="30" > </label> </td>
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
