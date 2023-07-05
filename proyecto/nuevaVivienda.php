<?Php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
}

if ($_GET['new'] != 1) {
    header("location:vivienda.php");
}

$tituloPagina = 'Nueva Vivienda';

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
                    <form action="guardar.php?tipo=vivienda" method="post" id="nuevaVivienda" class="nuevoRegistro">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="cedula" class="form-label" hidden>CEDULA</label>
                                    <input type="hidden" id="cedula" value="<?= $_GET['id'] ?>" name="cedula" class="form-control" required>
                                    <label for="tipoVivienda" class="form-label">Tipo de Vivienda</label>
                                    <input type="text" id="tipoVivienda" name="tipoVivienda" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="condicion" class="form-label">Condicion</label>
                                    <input type="text" id="condicion" name="condicion" class="form-control" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="tipoTecho" class="form-label">Tipo de Techo</label>
                                    <input type="text" id="tipoTecho" name="tipoTecho" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="tipoPiso" class="form-label">Tipo de Piso</label>
                                    <input type="text" id="tipoPiso" name="tipoPiso" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="agua" class="form-label">Agua</label>
                                    <select name="agua" id="agua" class="form-select">
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="luz" class="form-label">Luz</label>
                                    <select name="luz" id="luz" class="form-select">
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="aguanegras" class="form-label">Aguas negras</label>
                                    <select name="aguanegras" id="aguanegras" class="form-select">
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <input type="submit" value="Guardar" class="btn btn-success">
                                    <a href="vivienda.php?new=0&persona=<?=$_GET['id']?>" class="btn btn-primary">Cancelar</a>

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