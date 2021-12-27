        <?php require_once('admin_includes/header.php'); ?>

        <body>

        <!-- Navigation -->
        <?php require_once('admin_includes/nav.php'); ?> 

        <?php 
        
                if(isset($_POST['btnagregarpost']))

                {
                    $Post_titulo = $_POST['titulo_post'];
                    $Post_id_cat = $_POST['idcategoria_post'];  
                    $Post_autor = $_POST['autor_post'];     
                    $Post_img = $_FILES['image']['name'];
                    $Post_temp = $_FILES['image']['tmp_name']; 
                    $Post_contenido = $_POST['contenido_post'];
                    $Post_fecha = date ('d-m-y');


                    $sql = "insert into posts (post_cat_id,post_titulo, post_autor, post_fecha, post_img, post_contenido) values ('$Post_id_cat', '$Post_titulo', '$Post_autor',' $Post_fecha', '$Post_img', '$Post_contenido')";

                    $resultado = mysqli_query($conexion, $sql);

                    if($resultado) 
                    {
                        echo " Se ha guardado correctamente ";
                        move_uploaded_file($Post_temp, "../img/$Post_img");

                    }

                    else {

                        echo "Query fallida";
                    }

                    

                }
        
        
        ?>



            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                      
                 <form action="" method="POST" enctype="multipart/form-data" >
                        <div class="form group">
                            <label> Titulo de Post </label>
                            <input type="text" name="titulo_post" placeholder="Titulo de Post" class="form-control mb-2">
                        </div>
                        <div class="form group">
                            <label> ID Categoria de Post </label>
                            <input type="text" name="idcategoria_post" placeholder="ID Categoria de Post" class="form-control mb-2">
                        </div>
                        <div class="form group">
                            <label> Autor de Post </label>
                            <input type="text" name="autor_post" placeholder="Autor de Post " class="form-control mb-2">
                        </div>
                        <div class="form group">
                            <label> Fecha de Post </label>
                            <input type="date" name="fecha_post" placeholder="Fecha de Post " class="form-control mb-2">
                        </div>
                        <div class="form group">
                            <label> Image </label>
                            <input type="file" name="image" placeholder="img de Post " class="form-control pb-4">
                        </div>
                        <div class="form group">
                            <label> Contenido de Post </label>
                            <textarea name="contenido_post" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit" name="btnagregarpost"> Agregar </button>
                        </div>
                     </form>

                        
                </div>                                
            </div>

<?php require_once('./admin_includes/footer.php'); ?>
