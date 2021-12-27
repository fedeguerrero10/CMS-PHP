
<?php require_once "includes/db.php" ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Salon Fest</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                <?php
                    $query = "select * from categorias";
                    $resultado = mysqli_query($conexion, $query);
                  

                    while($row = mysqli_fetch_assoc($resultado))
                    {
                        $cat_titulo = $row['cat_titulo'];
                        echo "<li>
                        <a href=''>{$cat_titulo}</a>
                    </li>";

                    }
                    

                ?>
                <li class="nav-item ml-auto" >
                        <a class="btn btn-primary " href="admin/login.php">Login</a>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>