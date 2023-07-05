<?Php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location:login.php");
    }

    if ($_GET['edit']!= 1) {
        header("location:gas.php");
    }

    $tituloPagina='Editar Gas';

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
                    <form action="editar.php?tipo=gas" method="post" id="editargas" class="nuevoRegistro">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="cedula" class="form-label" hidden>Cedula</label>
                                    <input type="hidden" id="cedula" name="cedula" class="form-control" value="<?= $registro['cedula'] ?>">
                                    <label for="id" class="form-label" hidden>Id gas</label>
                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $registro['codigoGas'] ?>">
                                
                                    <label for="tipo" class="form-label">tipo</label>
                                    <input type="text" id="tipo" name="tipo" class="form-control" value="<?= $registro['tipo'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="bombonaSocial" class="form-label">Requiere Bombona Social</label>
                                    <input type="text" id="bombonaSocial" name="bombonaSocial" class="form-control" value="<?= $registro['bombonaSocial'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="codigo" class="form-label">codigo</label>
                                    <input type="text" id="codigo" name="codigo" class="form-control" value="<?= $registro['codigo'] ?>">
                                </div>
                            </div>
                            <div class="row text-center m-4">
                                <div class="col-lg-12">
                                    <input type="submit" value="Guardar" class="btn btn-success">
                                    <a href="gas.php?edit=0&persona=<?=$_GET['persona']?>" class="btn btn-primary">Cancelar</a>
                                    
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