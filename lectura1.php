<?php
// $_REQUEST -> cuando no sabes si el dato viene por $_POST o por $_GET
// si username y password NO está vacío, crea una cookie con el valor nombre
if (!empty($_REQUEST["username"]) && !empty($_REQUEST["password"])) {
    setcookie("nombre",$_REQUEST["username"],time()+10);
    setcookie("password",$_REQUEST["password"],time()+10);
    date_default_timezone_set("Europe/Madrid");
    $fecha=date("d-m-Y H:i:s"); // en los espacios sale un %
    // para sacar solo la hora -> $hora=date("H:i:s");
    setcookie("ultimoAcceso",$fecha,time()+10);
    header('Location: index.php');
}



