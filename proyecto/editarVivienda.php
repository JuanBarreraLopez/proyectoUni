<?Php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location:login.php");
    }

    if ($_GET['edit']!= 1) {
        header("location:vivienda.php");
    }

    $tituloPagina='Editar Vivienda';

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
                    <form action="editar.php?tipo=vivienda" method="post" id="editaroVivienda" class="nuevoRegistro">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="cedula" class="form-label" hidden>Cedula</label>
                                    <input type="hidden" id="cedula" name="cedula" class="form-control" value="<?= $registro['cedula'] ?>">
                                    <label for="id" class="form-label" hidden>Id Casa</label>
                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $registro['codigoVivienda'] ?>">
                                
                                    <label for="tipoVivienda" class="form-label">Tipo de Vivienda</label>
                                    <input type="text" id="tipoVivienda" name="tipoVivienda" class="form-control" value="<?= $registro['tipoVivienda'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="condicion" class="form-label">Condicion</label>
                                    <input type="text" id="condicion" name="condicion" class="form-control" value="<?= $registro['condicion'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="tipoTecho" class="form-label">Tipo de Techo</label>
                                    <input type="text" id="tipoTecho" name="tipoTecho" class="form-control" value="<?= $registro['tipoTecho'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="tipoPiso" class="form-label">Tipo de Piso</label>
                                    <input type="text" id="tipoPiso" name="tipoPiso" class="form-control" value="<?= $registro['tipoPiso'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="agua" class="form-label">Agua</label>
                                    <select name="agua" id="agua" class="form-select">
                                        <option value="si"<?php if($registro['agua'] == 'si'){ echo ' selected="selected"'; } ?>>si</option>
                                        <option value="no"<?php if($registro['agua'] == 'no'){ echo ' selected="selected"'; } ?>>no</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="luz" class="form-label">Luz</label>
                                    <select name="luz" id="luz" class="form-select">
                                        <option value="si"<?php if($registro['luz'] == 'si'){ echo ' selected="selected"'; } ?>>si</option>
                                        <option value="no"<?php if($registro['luz'] == 'no'){ echo ' selected="selected"'; } ?>>no</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="aguasNegras" class="form-label">Aguas Negras</label>
                                    <select name="aguasNegras" id="aguasNegras" class="form-select">
                                        <option value="si"<?php if($registro['aguasNegras'] == 'si'){ echo ' selected="selected"'; } ?>>si</option>
                                        <option value="no"<?php if($registro['aguasNegras'] == 'no'){ echo ' selected="selected"'; } ?>>no</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row text-center m-4">
                                <div class="col-lg-12">
                                    <input type="submit" value="Guardar" class="btn btn-success">
                                    <a href="vivienda.php?edit=0&persona=<?=$_GET['persona']?>" class="btn btn-primary">Cancelar</a>
                                    
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