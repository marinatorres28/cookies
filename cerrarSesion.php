<?php
session_start();
session_destroy();
// borra las cookies del navegador
setcookie("nombre");
setcookie("password");
setcookie("ultimoAcceso");

/* borrar todas las cookies */
//if (ini_get("session.use_cookies")) {
//    $params = session_get_cookie_params();
//    setcookie(session_name(), '', time() - 42000,$params['path'],$params['domain'],$params['secure'],$params['httponly']);
//}

header("Location:index.php");