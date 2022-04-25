<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Para ingresar Iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-bienvenido">
    <h1 class="bienvenido-text">Bienvenido a la pagina</h1>
    <a href="php/cerrar_sesion.php" class="cerrar-sesion">Cerar sesion</a>
</div>
</body>
</html>