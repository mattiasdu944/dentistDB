<?php
    require_once("vendor/autoload.php");
    $paciente = Mattias\Dentist2022\Paciente::listar(new Mattias\Dentist2022\Mysql());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Administrador Paciente</title>
</head>

<body>
<?php include('components/navbar.php')?>
    <section class="form section container pt-5">
        <div class="row flex">
            <div class="col-12 col-md-6  text-center">
                <h2>Administra tus Pacientes!</h2>
                <form action="ctrlPaciente.php" method="POST" enctype ="multipart/form-data">
                    
                    <div class="mb-3 text-start">
                        <label for="nomPac" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nomPac" id="nomPac" aria-describedby="helpId"
                            placeholder="Ingresa el nombre del pacietne" require>
                    </div>

                    <div class="mb-3 text-start">
                        <label for="imgPac" class="form-label">Agrega la foto del cliente</label>
                        <input type="file" class="form-control" name="imgPac" id="imgPac" placeholder="Imagen"
                            aria-describedby="fileHelpId" require>
                    </div>

                    <div class="modal-footer btn-group">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Guardar" class="btn btn-primary" name="btn" id="btn">
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-6  text-center">
                <div class="listado_title">
                    <h2>Listado Pacientes</h2>
                </div>
                <?php foreach($paciente as $data) { ?>
                <div class="card_paciente mt-3">
                    <div class="card_container">
                        <div class="col-3 img_card">
                            <img src="<?= $data->getImg()?>" width="50px" alt="perfil">
                        </div>

                        <div class="col-9 card_data">
                            <h5>Nombre: </h5>
                            <p><?= $data->getNombre()?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>