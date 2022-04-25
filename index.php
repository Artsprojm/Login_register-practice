<?php 
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }
?>
<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="java.js"></script>
    <title>Login y Registro</title>
    <meta name="viewport" content="initial-scale=1.0,
    width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<main>
<div class="contenedor__todo">
    <div class="caja__trasera">
    <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesion para entrar en la pagina</p>
            <button id="btn__iniciar-sesion">Iniciar sesion</button>
        </div>
        <div class="caja__trasera-register">
            <h3>¿Aun no tienes una cuenta?</h3>
            <p>Registrate para que puedas iniciar sesion</p>
            <button id="btn__registrarse">Registrarse</button>
        </div>
    </div>
    <div class="contenedor__login-register">
        <form action="php/login_usuario_be.php" class="formulario__login" method="POST">

            <h2>Iniciar Sesion</h2>
            <input type="text" placeholder="Correo Electronico" name="correo">
            <input type="password" placeholder="Contraseña" name="contrasena">
            <button>Entrar</button>

        </form>
        <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">

            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre completo" name="nombre_completo">
            <input type="text" placeholder="Correo Electronico" name="correo">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña" name="contrasena">
            <button>Registrarse</button>

        </form>
    </div>
</div>
</main>
</body>
</html>