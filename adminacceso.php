<!DOCTYPEhtml>
<html>
<head>
    <meta charset="UTF-8">
	<title>Inicio sesion guarda parque</title>
	<link rel="stylesheet" href="estilo/estiloaccesousuario.css">
</head>
    <body class="back">
  <div class="topnav">
   <ul>
     <a href="inicio%20paginas.html"> Atras</a>
     </ul>
	 </div>
    <form  action="adminvalidacion.php" method="POST" class="form">
        <table class="center" border="0" width="60%" align="center">
        <tr>
            <td class="centro" >Inicio de Sesion</td>
        </tr>
        <tr>
					<td>
						<table border="0" width="100%">
							<tr>
				
			                	<td><input type="text" required placeholder="Usuario" name="usuario" size="10" ></td>
			                </tr>
			                <tr>
				                <td><input type="password" required placeholder="contraseña" name="contrasena" size="10" ></td>
			                    </tr>			
                        </table>
                    </td>
               </tr>
                <tr>         
			    <td class="centro"><input class="boton" type="submit" name="registro" value="acceder"></td>
			 </tr>
</table>
</form>
</body>
</html>
