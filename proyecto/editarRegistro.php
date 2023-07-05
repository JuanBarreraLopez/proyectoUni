<?Php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location:login.php");
    }

    if ($_GET['edit']!= 1) {
        header("location:registrogeneral.php");
    }

    $tituloPagina='Editar Registro';

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
                    <form action="editar.php?tipo=registro" method="post" id="editaroRegistro" class="nuevoRegistro">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="cedula" class="form-label">CEDULA</label>
                                    <input type="text" id="cedula" name="cedula" class="form-control" value="<?= $registro['cedula'] ?>" disabled>
                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $registro['cedula'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="Nombre" class="form-label">NOMBRE</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" value="<?= $registro['nombre'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="apellido" class="form-label">APELLIDO</label>
                                    <input type="text" id="apellido" name="apellido" class="form-control" value="<?= $registro['apellido'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="Sexo" class="form-label">SEXO</label>
                                    <select name="sexo" id="sexo" class="form-select">
                                        <option value="masculino"<?php if($registro['sexo'] == 'masculino'){ echo ' selected="selected"'; } ?>>Masculino</option>
                                        <option value="femenino"<?php if($registro['sexo'] == 'femenino'){ echo ' selected="selected"'; } ?>>Femenino</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="nacimiento" class="form-label">FECHA NACIMIENTO</label>
                                    <input type="date" id="nacimiento" name="nacimiento" class="form-control" value="<?= $registro['nacimiento'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label for="edoCivil" class="form-label">ESTADO CIVIL</label>
                                    <select name="edoCivil" id="edoCivil" class="form-select" >
                                        <option value="soltero" <?php if($registro['edoCivil'] == 'soltero'){ echo ' selected="selected"'; } ?>>Soltero</option>
                                        <option value="casado" <?php if($registro['edoCivil'] == 'casado'){ echo ' selected="selected"'; } ?>>Casado</option>
                                        <option value="viudo" <?php if($registro['edoCivil'] == 'viudo'){ echo ' selected="selected"'; } ?>>Viudo</option>
                                        <option value="otro" <?php if($registro['edoCivil'] == 'otro'){ echo ' selected="selected"'; } ?>>Otro</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="telefono" class="form-label">TELEFONO</label>
                                    <input type="phone" id="telefono" name="telefono" class="form-control" value="<?= $registro['telefono'] ?>">
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <input type="submit" value="Guardar" class="btn btn-success">
                                    <a href="editarRegistro.php?edit=0" class="btn btn-primary">Cancelar</a>
                                    
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