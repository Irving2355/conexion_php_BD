<?php 

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//conectar a la BD

$conexion=mysqli_connect('localhost','root','','world');

//consulta

$consulta= "SELECT * FROM USUARIOS WHERE NAME='$usuario' and CONTRA='$pass'";

//resultado

$resultado= mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);

if($filas >0){
    header("location:../conexion/pagina2.html");
}else{
    echo '<script>
        alert("¡¡Datos erroneos!!");
    window.history.go(-1);
    </script>';
}

mysqli_free_result($resultado);

?>
