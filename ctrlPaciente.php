<?php 
require_once("vendor/autoload.php");
$op = $_POST['btn'];
$nombre = $_POST['nomPac'];
$img = $_FILES['imgPac']['name'];
switch ($op) {
    case 'Guardar':
        // if (is_uploaded_file($_FILES['imgPac']['tmp_name'])) {
        if (is_uploaded_file($_FILES['imgPac']['tmp_name'])){

            //CREACION DEL NOMBRE DE LA IMG
            $nom = $_FILES["imgPac"]["name"];
            $dir = 'img/'.time().$nom;

            //MOVIMIENTO DE LA IMG
            move_uploaded_file($_FILES['imgPac']['tmp_name'],$dir);
            
            //INSERTAR DATOS
            $paciente = new Mattias\Dentist2022\Paciente($nombre, $dir);
            // $var_dump($paciente);
            
            // //VALIDACION DE LA INSERCION
            if ($paciente->insertar(new Mattias\Dentist2022\Mysql())) {
                header('Location:admPaciente.php');
            }
            else {
                echo "Fallo por depresion";
            }
        }
        break;
    case 'label':
        # code...
        break;
    default:
        # code...
        break;
}


?>