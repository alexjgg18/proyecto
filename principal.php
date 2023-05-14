<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="estilo.css">
</head>
<body>
	
    <form action="register.php" method="POST" >
	<div class=formulario>
    	<h1>REGISTRO USUARIO</h1>
		<div class=contenedor-campos>
		<input class=campos  type="int" name="cedula" placeholder="Cedula">
    	<input class=campos  type="text" name="name" placeholder="Nombre completo">
    	<input class=campos  type="email" name="email" placeholder="Email">
		<input class=campos  type="text" name="direccion" placeholder="Direccion">
    	<input class=campos  type="submit" name="register" VALUE="Enviar">
		</div>
		</div>	
    </form>
      <?php 
	 include("register.php");
	  
	  ?>
</body>
</html>