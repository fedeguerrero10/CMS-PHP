<table class="table table-bordered">
                            <tr>
                                <td>ID</td>
                                <td>Autor</td>
                                <td>Titulo</td>
                                <td>Fecha</td>
                                <td>Categoria</td>
                                <td>Img</td>
                                <td colspan="2">Operacion </td>
                            </tr>
                            <tr>
                            
                            <?php

                                $query = "select * from posts";
                                $resultado = mysqli_query($conexion, $query);

                                while($row=mysqli_fetch_assoc($resultado))

                            {
     
                            ?>

                                <td><?php echo $row['post_id'];?></td>
                                <td><?php echo $row['post_autor'];?>r</td>
                                <td><?php echo $row['post_titulo'];?></td>
                                <td><?php echo $row['post_fecha'];?></td>
                                <td><?php echo $row['post_cat_id'];?></td>
                                <td><img width="50" height="50" class="img-responsive" src="../img/<?php echo $row['post_img']; ?>" alt=""></td>
                                <td><a href="posts.php?del=<?php echo $row['post_id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                                <td><a href="posts.php?edit=<?php echo $row['post_id']; ?>" class="btn btn-success"><span class="fa fa-edit"></span></a></td>

                                </tr>
                            <?php
                            
                            }

                            ?>
                        
                    </table>    

                            <?php

                                if(isset($_GET['del']))
                                {
                                    $Del_ID = $_GET['del'];
                                    $sql = "delete from posts where post_id='$Del_ID'";
                                   mysqli_query($conexion,$sql);

                                    

                                }

                            ?>