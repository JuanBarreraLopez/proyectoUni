<?Php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
}

if ($_GET['new'] != 1) {
    header("location:medicina.php");
}

$tituloPagina = 'Nueva Medicina';

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Brisas de Carvenca</title>
</head>

<body>
    <?Php
    include_once('header.php');
    ?>
    <main>

        <div class="container">
            <div class="row">

                <div class col-lg-12>
                    <form action="guardar.php?tipo=medicina" method="post" id="nuevaMedicina" class="nuevoRegistro">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="cedula" class="form-label" hidden>CEDULA</label>
                                    <input type="hidden" id="cedula" value="<?= $_GET['id'] ?>" name="cedula" class="form-control" required>
                                    <label for="medicamentos" class="form-label">Medicamentos Requeridos</label>
                                    <input type="text" id="medicamentos" name="medicamentos" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="patologias" class="form-label">Patologias</label>
                                    <input type="text" id="patologias" name="patologias" class="form-control" required>
                                </div>                                
                                <div class="col-lg-4">
                                    <label for="embarazadas" class="form-label">Embarazada</label>
                                    <select name="embarazadas" id="embarazadas" class="form-select">
                                        <option value="si">Si</option>
                                        <option value="no" selected>No</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="discapacidad" class="form-label">Discapacidad</label>
                                    <input type="text" id="discapacidad" name="discapacidad" class="form-control" required>
                                </div> 
                            </div>
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <input type="submit" value="Guardar" class="btn btn-success">
                                    <a href="medicina.php?new=0&persona=<?=$_GET['id']?>" class="btn btn-primary">Cancelar</a>

                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
    </main>

    <footer>
        <?php include_once('footer.php'); ?>
    </footer>
</body>

</html>