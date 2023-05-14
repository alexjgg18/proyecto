<?php 

include("con_db.php");
date_default_timezone_set('America/Mexico_City');






if (isset($_POST['register'])) {
    
    $cedula=$_POST['cedula'];
	$validar="select cedula from datos where cedula='$cedula'"; 
	$resultado1=mysqli_query($conex,$validar);
	$filas=mysqli_num_rows($resultado1);
	echo "$filas";
	
	if($filas==1){
		
		?>
		
		<head><link rel="stylesheet"  href="estilo.css"></head>
		<h3 class="bad">¡Ups Usuario Registrado</h3>
		<?php 
		header( "refresh:2;url=principal.php" );
	}
else{

	
    if( strlen($_POST['name']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['cedula']) >=1 && strlen($_POST['direccion']) >=1)
	{   
		$cedula = trim($_POST['cedula']);
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$direccion = trim($_POST['direccion']);
	    $fecha_reg=date('H:i:s d-m-Y ');
	    $consulta = "INSERT INTO datos (cedula,nombre, email,direccion,fecha) VALUES ('$cedula','$name','$email','$direccion','$fecha_reg')";
	    $resultado=mysqli_query($conex,$consulta);
		if($resultado)
		{
        	?>
            <head><link rel="stylesheet"  href="estilo.css"></head>
		
			<form action="register.php" method="POST" >
    	<h1>¡Suscribete!</h1>
    	<input type="int" name="cedula" placeholder="Cedula">
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="text" name="direccion" placeholder="Direccion">
    	<input type="submit" name="register" VALUE="Enviar">
    </form>
         		 <h3 class="ok"> Te has inscrito Correctamente!</h3>
				 
			<?php
		} 
		else{
			?>
			<head><link rel="stylesheet"  href="estilo.css"></head>
			<form action="register.php" method="POST" >
    	<h1>¡Suscribete!</h1>
    	<input type="int" name="cedula" placeholder="Cedula">
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="text" name="direccion" placeholder="Direccion">
    	<input type="submit" name="register" VALUE="Enviar">
		
    </form>
	<head><link rel="stylesheet"  href="estilo.css"></head>
	<form action="register.php" method="POST" >
    	<h1>¡Suscribete!</h1>
    	<input type="int" name="cedula" placeholder="Cedula">
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="text" name="direccion" placeholder="Direccion">
    	<input type="submit" name="register" VALUE="Enviar">
		
    </form>
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
		}
	
}else{
	?>
	<head><link rel="stylesheet"  href="estilo.css"></head>
	<form action="register.php" method="POST" >
	<input type="int" name="cedula" placeholder="Cedula">
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="text" name="direccion" placeholder="Direccion">
    	<input type="submit" name="register" VALUE="Enviar">
		
    </form>
	<h3 class="bad">¡Faltan CAmpos Por llenar</h3>
<?php

}


}}
mysqli_close($conex);
?>

