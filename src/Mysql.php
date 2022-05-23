<?php
namespace Mattias\Dentist2022;
class Mysql implements Db{
    // private $conexion;

    public function getConexion(){
        require_once 'conf.php';

        try {
            $c = new \PDO('mysql:host='.HOST.';dbname='.NAME, USER, PASS);
            $c->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch (\Exception $e){
            echo 'Error: en la db'.$e->getMessage();
        }
        return $c;
        
    }
}
?>