<?php require_once('./admin_includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once('./admin_includes/nav.php'); ?> 

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Author</small>
                        </h1>                        
                    </div>

                <div class="col-lg-6">
                    <?php 
                    
                    if(isset($_POST['btncategoria']))
                    {

                      if($_POST['categoria'] == "")

                      {
                        echo '<p class="alert alert-danger"> Por Favor Ingrese Categoria </p>';                       
                      }

                      else

                      {

                      $Add_cat = $_POST['categoria'];
                      $query = "insert into categorias (cat_titulo) values ('$Add_cat')";
                      $resultado = mysqli_query($conexion,$query);
                    }

                    }
                    
                    ?>

                    <!-- Agregar Nueva Categoria  -->  

                  
                 <form action="" method="POST" >
                        <div class="form group">
                            <label> Agregar Nueva Categoria </label>
                            <input type="text" name="categoria" placeholder="Categoria" class="form-control mb-">
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit" name="btncategoria"> Agregar </button>
                        </div>
                     </form>
                  
                     <!-- Editar Categoria  --> 

                     <?php

                        if(isset($_GET['edit']))
                        {
                            
                        $Edit_id = $_GET['edit'];
                        $Sql =  "select * from categorias where cat_id = '$Edit_id'";
                        $resultado = mysqli_query($conexion, $Sql);
                        $data = mysqli_fetch_assoc($resultado);

                    ?>


                     <form action="update.php" method="POST" name="edit_id" <?php echo $data['cat_id']; ?>  >
                        <div class="form-group">
                            <label> Editar Categoria </label>
                            <input type="text" name="editar_categoria" value="<?php echo $data['cat_titulo']; ?>" placeholder="Categoria" class="form-control pb-4">
                            <input type="hidden" name="editar_id" value="<?php echo $data['cat_id']; ?>" >
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit" name="btneditarcategoria"> Editar Categoria </button>
                        </div>
                    </form>

                      
                     <?php    
                       
                        }
                        
                    ?>
                    </div>
                     
                    <div class="col-lg-6">
                        <table class="table table-bordered">
                            <tr>
                            
                                <th style="width: 20% ">id categoria</th>
                                <th style="width: 50% ">Nombre categoria</th>
                                <th style="width: 30%" colspan="2" >Operacion</th>

                            </tr>
                            <tr>
                            <?php if($conexion) 
                          

                                $consulta = "select * from categorias";
                                $resultado = mysqli_query($conexion, $consulta);

                                while($row = mysqli_fetch_assoc($resultado))

                                {

                            ?>

                           
                                <td><?php echo $row['cat_id'] ?></td>
                                <td><?php echo $row['cat_titulo'] ?></td>
                                <td> <a href="categorias.php?Del=<?php echo $row['cat_id'] ?>" class="btn btn-danger"> <span class="fa fa-trash"></span> </a></td>
                                <td> <a href="categorias.php?edit=<?php echo $row['cat_id'] ?>" class="btn btn-success"> <span class="fa fa-edit"></span> </a> </td>

                            </tr>
                        <?php                 
                        }

                        // Borrar categoria guardada 

                        if(isset($_GET['Del']))
                        {

                            $Del = $_GET['Del'];
                            $Sql = "delete from categorias where cat_id='$Del'";
                            $Resultado = mysqli_query($conexion,$Sql);

                            if($Resultado)

                            {
                               header("location: categorias.php"); 
                            }

                        }
                        ?>

                        </table>
                    </div>
              </div>
            </div>     
        </div>

