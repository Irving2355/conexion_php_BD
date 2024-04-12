<?php 

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//conectar a la BD

$conexion=mysqli_connect('localhost','root','','world');

//consulta

$consulta= "SELECT * FROM USUARIOS WHERE name='$usuario' and contra='$pass'";

?>
