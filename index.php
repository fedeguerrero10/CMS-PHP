
<!-- Seccion Header -->
<?php require_once "includes/header.php" ?>;


<!-- Navigation -->
<?php require_once "includes/nav.php" ?>;

    <!-- Page Content -->
    <div class="container">

        <div class="row">
<?php 

                    $query = "select * from posts";
                    $data = mysqli_query($conexion, $query);

                    while($row = mysqli_fetch_assoc($data))
                    {
                        $Post_titulo = $row['post_titulo'];
                        $Post_author = $row ['post_autor'];
                        $Post_date = $row ['post_fecha'];
                        $Post_img = $row ['post_img'];
                        $Post_content = $row ['post_contenido'];
                    
?>


            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Noticias Referidas al Sector
                 
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $Post_titulo ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $Post_author ?> </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $Post_date ?></p>
                <hr>
                <img class="img-responsive" src="img/<?php echo $Post_img  ?>" alt="">
                <hr>
                <p><?php echo $Post_content ?></p>
                <a class="btn btn-primary" href="#">Leer mas  <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

               
            </div>

            <?php
                    }
            ?>
              

        <hr>
        <!-- Footer -->
        <?php require_once "includes/footer.php" ?>;

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
