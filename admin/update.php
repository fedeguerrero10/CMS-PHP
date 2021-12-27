<?php

if(isset($_POST['btneditarcategoria']))
{
    require_once('./includes/header.php');

    $update_id = $_POST['editar_id'];
    $update_cat = $_POST['editar_categoria'];

    $sql = "update categorias set cat_titulo='$update_cat' where cat_id= '$update_id'";
    $resultado = mysqli_query($conexion, $sql);
    
    if($resultado)
    {
        echo '<div class="alert alert-success"> Tu categoria ha sido actualizada </div>';
        header("location:categorias.php"); 
    }

    else

    {

        echo "Modificacion Fallida";

    }

}

?>