<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge=Chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<link rel="stylesheet" href="css/style.index.css">

</head>
<body>
    <form action="validar.php" method="post"> 
    <h1 class="animate__animated animate__backInLeft">Sistema de Login</h1>
    <p>Usuario <input type="text" placeholder="Ingrese su nombre" name="usuario" required></p>
    <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña" required></p>
    <input type="submit" value="Ingresar">
    </form>
</body>
</html>