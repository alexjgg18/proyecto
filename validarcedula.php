<?php
include("con_db.php");


if (isset($_GET['cedula'])) {

$consulta="select cedula from datos where $cedula='cedula'"; 
$resultado2=mysqli_query(conex,registro);
$filas=mysqli_query_num_rows($resultado2);
echo $filas;

}




?>