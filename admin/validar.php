<?php


$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost", "root","","rol");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //es decir, es admin
    header("location:/cms/admin/index.php");
} else 

if($filas['id_cargo']==2) { //es decir, si es cliente
    header("location:/cms/admin/login/admin.php");

}

else {
?> 
<?php
include("./admin/login.php");
?>

<h1 >Error de autentificacion</h1>


<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);