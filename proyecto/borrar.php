<?Php
$tipo   = $_GET['tipo'];
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar <?=$tipo?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>

    <?Php

    // codigo que se ejecuta cuando se va a borrar un registro general
    if ($tipo == 'registro') {

        include_once('conexion.php');

        if (isset($_GET['accion'])) {
             $query = "DELETE FROM general WHERE cedula =".$id;

            if (mysqli_query($conexion, $query)) {
                $msj = "Registro Borrado con éxito";
                echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: green;padding: 5px;'>" . $msj . "</h1>";
                echo "<div style='text-align: center;'><a href='registrogeneral.php' class='btn btn-success'>continuar</a></div>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conexion);
            };
        } else {
            $link = "borrar.php?tipo=". $tipo . "&id=" . $id . "&accion=1";


            $msj = "Seguro de Borrar el registro";
            echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: red;padding: 5px;'>" . $msj . "</h1>";
            echo "<div style='text-align: center;'>
            <a href=" . $link . " class='btn btn-success''>Aceptar</a>
            <a href='registrogeneral.php' class='btn btn-warning'>Cancelar</a>
            </div>";
        }
    }

    // codigo para borrar viviendas
    if ($tipo == 'vivienda') {

        $persona = $_GET['persona'];

        include_once('conexion.php');

        if (isset($_GET['accion'])) {
             $query = "DELETE FROM vivienda WHERE codigoVivienda =".$id;

            if (mysqli_query($conexion, $query)) {
                $msj = "Vivienda Borrada con éxito";
                echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: green;padding: 5px;'>" . $msj . "</h1>";
                echo "<div style='text-align: center;'><a href='vivienda.php?persona=$persona' class='btn btn-success'>continuar</a></div>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conexion);
            };
        } else {
            $link = "borrar.php?tipo=" . $tipo . "&id=" . $id . "&accion=1&persona=". $persona;


            $msj = "Seguro de Borrar la Vivienda";
            echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: red;padding: 5px;'>" . $msj . "</h1>";
            echo "<div style='text-align: center;'>
            <a href=" . $link . " class='btn btn-success''>Aceptar</a>
            <a href='vivienda.php?persona=$persona' class='btn btn-warning'>Cancelar</a>
            </div>";
        }
    }

    // codigo para borrar medicinas
    if ($tipo == 'Medicina') {

        $persona = $_GET['persona'];

        include_once('conexion.php');

        if (isset($_GET['accion'])) {
             $query = "DELETE FROM salud WHERE codigoSalud =".$id;

            if (mysqli_query($conexion, $query)) {
                $msj = "Registro de Salud Borrado con éxito";
                echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: green;padding: 5px;'>" . $msj . "</h1>";
                echo "<div style='text-align: center;'><a href='medicina.php?persona=$persona' class='btn btn-success'>continuar</a></div>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conexion);
            };
        } else {
            $link = "borrar.php?tipo=" . $tipo . "&id=" . $id . "&accion=1&persona=". $persona;


            $msj = "Seguro de Borrar El Registro de Salud";
            echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: red;padding: 5px;'>" . $msj . "</h1>";
            echo "<div style='text-align: center;'>
            <a href=" . $link . " class='btn btn-success''>Aceptar</a>
            <a href='medicina.php?persona=$persona' class='btn btn-warning'>Cancelar</a>
            </div>";
        }
    }

    // codigo para borrar gas
    if ($tipo == 'gas') {

        $persona = $_GET['persona'];

        include_once('conexion.php');

        if (isset($_GET['accion'])) {
             $query = "DELETE FROM gas WHERE codigoGas =".$id;

            if (mysqli_query($conexion, $query)) {
                $msj = "Registro de Gas Borrado con éxito";
                echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: green;padding: 5px;'>" . $msj . "</h1>";
                echo "<div style='text-align: center;'><a href='gas.php?persona=$persona' class='btn btn-success'>continuar</a></div>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conexion);
            };
        } else {
            $link = "borrar.php?tipo=" . $tipo . "&id=" . $id . "&accion=1&persona=". $persona;


            $msj = "Seguro de Borrar El Registro de Gas";
            echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: red;padding: 5px;'>" . $msj . "</h1>";
            echo "<div style='text-align: center;'>
            <a href=" . $link . " class='btn btn-success''>Aceptar</a>
            <a href='gas.php?persona=$persona' class='btn btn-warning'>Cancelar</a>
            </div>";
        }
    }

    // codigo


    mysqli_close($conexion);
    ?>

</body>

</html>