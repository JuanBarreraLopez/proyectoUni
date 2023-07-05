<?Php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
}

$tituloPagina = 'Registro de vivienda';

if (!isset($_GET['persona'])) {
    include_once('mostrar.php');
}

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

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Registro de Viviendas</h2>
                </div>
            </div>

            <div class="row">

                <?Php
                if (!isset($_GET['persona'])) { ?>
                    <form action="#" method="get">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="persona" class="form-label">Representante de la Vivienda</label>
                                </div>
                                <div class="col-lg-6">
                                    <select name="persona" id="persona" class="form-select">
                                        <option value="0">Seleccione una opcion</option>
                                        <?php
                                        while ($row = mysqli_fetch_array($resultado)) {
                                            $id = $row['cedula'];
                                            $nom = $row['nombre'];
                                            $apelli = $row['apellido'];
                                        ?>
                                            <option value="<?= $id ?>"><?= $nom . " " . $apelli ?></option>
                                        <?php
                                        }
                                        mysqli_free_result($resultado);
                                        mysqli_close($conexion);
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" value="Ver Viviendas Asociadas" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
                <?php
                } elseif ($_GET['persona'] == 0) {
                ?>

                    <h2 class="text-white text-center p-3 bg-danger">Debe Seleccionar una persona de la lista</h2>
                    <div class="col-lg-12">
                        <a href="vivienda.php" class="btn btn-primary offset-lg-6">Atras</a>
                    </div>
                <?php
                } else {
                    $tituloPagina = 'Viviendas';
                    $id = $_GET['persona'];
                    include_once('mostrar.php');
                    $persona = mysqli_fetch_array($resultadoPersona);
                    $nombres = $persona['nombre'] . ', ' . $persona['apellido'];
                    echo "<h2>Representante: " . $nombres . " </h2>";

                ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mt-5">
                                <a href="nuevaVivienda.php?id=<?=$id?>&new=1" class="btn btn-success" title="Agregar nueva vivienda"><i class="fa fa-plus"></i> Agregar Vivienda</a>
                            </div>
                            <div class="col-lg-12">

                                <?Php

                                $filas = mysqli_num_rows($resultadoVivienda);


                                if ($filas <= 0) {
                                    echo "<h2 class='mt-4 p-3 text-black bg-warning'> No Hay Registros Asociados a esta persona</h2>";
                                } else {
                                ?>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Tipo de Vivienda</th>
                                                <th>Condicion</th>
                                                <th>Tipo de Techo</th>
                                                <th>Tipo de Piso</th>
                                                <th>Agua</th>
                                                <th>Luz</th>
                                                <th>Aguas Negras</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </thead>
                                        <?php

                                        while ($row = mysqli_fetch_array($resultadoVivienda)) {
                                            $id = $row['codigoVivienda'];
                                            $cedula = $row['cedula'];
                                        ?>
                                            <tr>
                                                <td><?= $row['tipoVivienda'] ?></td>
                                                <td><?= $row['condicion'] ?></td>
                                                <td><?= $row['tipoTecho'] ?></td>
                                                <td><?= $row['tipoPiso'] ?></td>
                                                <td><?= $row['agua'] ?></td>
                                                <td><?= $row['luz'] ?></td>
                                                <td><?= $row['aguasNegras'] ?></td>
                                                <td>
                                                    <a href="editarVivienda.php?edit=1&tipo=vivienda&id='<?= $id ?>'&persona=<?=$cedula?>" class="btn btn-warning" title="Editar"><i class="fa fa-edit"></i></a>
                                                    <a href="borrar.php?tipo=vivienda&id='<?= $id ?>'&persona=<?=$cedula?>" class="btn btn-danger" title="Borrar"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        mysqli_free_result($resultadoVivienda);

                                        ?>
                                    </table>
                                <?Php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                <?php
                    mysqli_free_result($resultadoPersona);
                    mysqli_close($conexion);
                    }
                ?>
            </div>
        </div>
    </main>

    <footer class="mt-4">
        <?php include_once('footer.php'); ?>
    </footer>
</body>

</html>