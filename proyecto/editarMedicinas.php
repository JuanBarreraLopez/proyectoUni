<?Php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location:login.php");
    }

    if ($_GET['edit']!= 1) {
        header("location:medicina.php");
    }

    $tituloPagina='Editar Medicina';

    include_once('mostrar.php');
    $registro = mysqli_fetch_array($resultado);

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
                    <form action="editar.php?tipo=medicina" method="post" id="editaroMedicina" class="nuevoRegistro">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="cedula" class="form-label" hidden>Cedula</label>
                                    <input type="hidden" id="cedula" name="cedula" class="form-control" value="<?= $registro['cedula'] ?>">
                                    <label for="id" class="form-label" hidden>Id medicina</label>
                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $registro['codigoSalud'] ?>">
                                
                                    <label for="medicamentos" class="form-label">Medicamentos Requeridos</label>
                                    <input type="text" id="medicamentos" name="medicamentos" class="form-control" value="<?= $registro['medicamentos'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="patologias" class="form-label">patologias</label>
                                    <input type="text" id="patologias" name="patologias" class="form-control" value="<?= $registro['patologias'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="embarazadas" class="form-label">Embarazadas</label>
                                    <select name="embarazadas" id="embarazadas" class="form-select">
                                        <option value="si"<?php if($registro['embarazadas'] == 'si'){ echo ' selected="selected"'; } ?>>si</option>
                                        <option value="no"<?php if($registro['embarazadas'] == 'no'){ echo ' selected="selected"'; } ?>>no</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="discapacidad" class="form-label">Discapacidad</label>
                                    <input type="text" id="discapacidad" name="discapacidad" class="form-control" value="<?= $registro['discapacidad'] ?>">
                                </div>
                            </div>
                            <div class="row text-center m-4">
                                <div class="col-lg-12">
                                    <input type="submit" value="Guardar" class="btn btn-success">
                                    <a href="medicina.php?edit=0&persona=<?=$_GET['persona']?>" class="btn btn-primary">Cancelar</a>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                    <?Php
                        mysqli_free_result($resultado);
                        mysqli_close($conexion);
                    ?> 
                    
                </div>
            </div>
    </main>

    <footer>
      <?php include_once('footer.php');?>
    </footer>
</body>

</html>