<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <h1>Inicio de Sesión</h1>
    <form action="lectura1.php" method="post">
        <!--Usuario-->
        <p>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        </p>
        <!--Contraseña-->
        <p>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        </p>
        <!--Boton-->
        <input type="submit" value="Iniciar Sesión">
    </form>

    <a href="cerrarSesion.php">Salir y Borrar Cookies</a>

</body>
</html>

<?php
// lee las cookies del nevegador
if (isset($_COOKIE["ultimoAcceso"]) && isset($_COOKIE["nombre"])) {
echo "<br>Hola ".$_COOKIE["nombre"]." , tu ultimo acceso fue " .$_COOKIE["ultimoAcceso"];
}
