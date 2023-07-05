<?Php
$tipo = $_GET['tipo'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <?Php

    // codigo que se ejecuta para guardar un nuevo registro general
    if ($tipo == 'registro') {

        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $sexo = $_POST['sexo'];
        $nacimiento = $_POST['nacimiento'];
        $edoCivil = $_POST['edoCivil'];
        $telefono = $_POST['telefono'];

        include_once('conexion.php');
        $query = "INSERT INTO general (cedula, nombre, apellido, sexo, nacimiento, edoCivil, telefono) VALUES ('$cedula', '$nombre', '$apellido', '$sexo', '$nacimiento', '$edoCivil', '$telefono')";

        if (mysqli_query($conexion, $query)) {
            $msj = "Nuevo registro creado con éxito";
            echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: green;padding: 5px;'>" . $msj . "</h1>";
            echo "<div style='text-align: center;'><a href='registrogeneral.php' style='text-decoration: none;'><span style='width: 10px;background-color: cornflowerblue;padding: 10px;color: white;border-radius: 5px;'>continuar</span></a></div>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);

        };
    }

    // codigo guarda los datos de la nueva vivienda
    if ($tipo == 'vivienda') {

        $cedula = $_POST['cedula'];
        $tipoVivienda = $_POST['tipoVivienda'];
        $condicion = $_POST['condicion'];
        $tipoTecho = $_POST['tipoTecho'];
        $tipoPiso = $_POST['tipoPiso'];
        $agua = $_POST['agua'];
        $luz = $_POST['luz'];
        $aguanegras = $_POST['aguanegras'];

        include_once('conexion.php');
        $query = "INSERT INTO vivienda (cedula, tipoVivienda, condicion, tipoTecho, tipoPiso, agua, luz, aguasNegras) VALUES ('$cedula', '$tipoVivienda', '$condicion', '$tipoTecho', '$tipoPiso', '$agua', '$luz', '$aguanegras')";

        if (mysqli_query($conexion, $query)) {
            $msj = "Vivienda creada con éxito";
            echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: green;padding: 5px;'>" . $msj . "</h1>";
            echo "<div style='text-align: center;'><a href='vivienda.php?persona=".$cedula."' style='text-decoration: none;'><span style='width: 10px;background-color: cornflowerblue;padding: 10px;color: white;border-radius: 5px;'>continuar</span></a></div>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        };
    }
    
    // codigo guarda los nuevos datos de salud
    if ($tipo == 'medicina') {

        $cedula = $_POST['cedula'];
        $medicamentos = $_POST['medicamentos'];
        $patologias = $_POST['patologias'];
        $embarazadas = $_POST['embarazadas'];
        $discapacidad = $_POST['discapacidad'];

        include_once('conexion.php');
        $query = "INSERT INTO salud (cedula, medicamentos, patologias, embarazadas, discapacidad) VALUES ('$cedula', '$medicamentos', '$patologias', '$embarazadas', '$discapacidad')";

        if (mysqli_query($conexion, $query)) {
            $msj = "Regsitro de Salud creado con éxito";
            echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: green;padding: 5px;'>" . $msj . "</h1>";
            echo "<div style='text-align: center;'><a href='medicina.php?persona=".$cedula."' style='text-decoration: none;'><span style='width: 10px;background-color: cornflowerblue;padding: 10px;color: white;border-radius: 5px;'>continuar</span></a></div>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        };
    }
    
    //codigo guarda datos nuevo registro gas
    if ($tipo == 'gas') {

        $cedula = $_POST['cedula'];
        $tipo = $_POST['tipo'];
        $bombonaSocial = $_POST['bombonaSocial'];
        $codigo = $_POST['codigo'];

        include_once('conexion.php');
        $query = "INSERT INTO gas (cedula, tipo, bombonaSocial, codigo) VALUES ('$cedula', '$tipo', '$bombonaSocial', '$codigo')";

        if (mysqli_query($conexion, $query)) {
            $msj = "Regsitro de Gas creado con éxito";
            echo "<h1 style='color: white; text-align: center;margin-top: 05%;background-color: green;padding: 5px;'>" . $msj . "</h1>";
            echo "<div style='text-align: center;'><a href='gas.php?persona=".$cedula."' style='text-decoration: none;'><span style='width: 10px;background-color: cornflowerblue;padding: 10px;color: white;border-radius: 5px;'>continuar</span></a></div>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        };
    }


    mysqli_close($conexion);
    ?>
</body>

</html>