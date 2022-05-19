<?php
    require_once ("vendor/autoload.php");
    echo "Creando objeto ---> ";
    $mysql = new Mattias\Dentist2022\Mysql();
    $con = $mysql->getConexion();
    var_dump($con);

?>
