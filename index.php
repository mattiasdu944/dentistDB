<?php
    require_once ("vendor/autoload.php");
    echo "creando objeto";

    $mysql = new Mattias\Dentist2022\Mysql();
    $mysql->getConexion();
    var_dump($mysql);

?>
<h1>Hola Mundo</h1>