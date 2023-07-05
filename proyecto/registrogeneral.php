<?Php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
}

$tituloPagina = 'Registro General';

include('mostrar.php');


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
    <main class="container separacion">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Listado de Personas</h2>
            </div>

            <div class="col-lg-8">
                <a href="nuevoRegistro.php?new=1" class="btn btn-success" title="Nuevo"><i class="fa fa-plus"></i> Nuevo Registro</a>
            </div>

            <div class="col-lg-12">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>SEXO</th>
                            <th>FECHA DE NACIMIENTO</th>
                            <th>ESTADO CIVIL</th>
                            <th>TELEFONO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($resultado)) { 
                        $id = $row['cedula'];
                        ?>
                    <tr>

                        <td><?= $row['cedula'] ?></td>                        
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['apellido'] ?></td>
                        <td><?= $row['sexo'] ?></td>
                        <td><?= $row['nacimiento'] ?></td>
                        <td><?= $row['edoCivil'] ?></td>
                        <td><?= $row['telefono'] ?></td>
                        <td>
                            <a href="editarRegistro.php?edit=1&tipo=registro&id='<?=$id?>'" class="btn btn-warning" title="Editar"><i class="fa fa-edit"></i></a>
                            <a href="borrar.php?tipo=registro&id='<?=$id?>'" class="btn btn-danger" title="Borrar"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

                    <?php
                    }
                    mysqli_free_result($resultado);
                    mysqli_close($conexion);
                    ?>

                </table>

            </div>
        </div>
    </main>

    <footer>
        <?php include_once('footer.php');?>
    </footer>
</body>

</html>