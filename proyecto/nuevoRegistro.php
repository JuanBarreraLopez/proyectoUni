<?Php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location:login.php");
    }

    if ($_GET['new']!= 1) {
        header("location:registrogeneral.php");
    }

    $tituloPagina='Nuevo Registro';

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
                    <form action="guardar.php?tipo=registro" method="post" id="nuevoRegistro" class="nuevoRegistro">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="cedula" class="form-label">CEDULA</label>
                                    <input type="text" id="cedula" name="cedula" class="form-control" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="Nombre" class="form-label">NOMBRE</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="apellido" class="form-label">APELLIDO</label>
                                    <input type="text" id="apellido" name="apellido" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="Sexo" class="form-label">SEXO</label>
                                    <select name="sexo" id="sexo" class="form-select">
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="nacimiento" class="form-label">FECHA NACIMIENTO</label>
                                    <input type="date" id="nacimiento" name="nacimiento" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="edoCivil" class="form-label">ESTADO CIVIL</label>
                                    <select name="edoCivil" id="edoCivil" class="form-select">
                                        <option value="soltero">Soltero</option>
                                        <option value="casado">Casado</option>
                                        <option value="viudo">Viudo</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="telefono" class="form-label">TELEFONO</label>
                                    <input type="phone" id="telefono" name="telefono" class="form-control">
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <input type="submit" value="Guardar" class="btn btn-success">
                                    <a href="nuevoRegistro.php?new=0" class="btn btn-primary">Cancelar</a>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
    </main>

    <footer>
      <?php include_once('footer.php');?>
    </footer>
</body>

</html>