<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Administrador Paciente</title>
</head>

<body>
    <section class="form section container pt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>Administra tus Pacientes!</h2>
                <form action="ctrlPaciente.php" method="POST" enctype ="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="nomPac" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nomPac" id="nomPac" aria-describedby="helpId"
                            placeholder="Ingresa el nombre del pacietne" require>
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>


                    <div class="mb-3">
                        <label for="imgPac" class="form-label">Agrega la foto del cliente</label>
                        <input type="file" class="form-control" name="imgPac" id="imgPac" placeholder="Imagen"
                            aria-describedby="fileHelpId" require>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Guardar" class="btn btn-primary" name="btn" id="btn">
                </form>
            </div>

            <div class="col-12 col-md-6">
                
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>