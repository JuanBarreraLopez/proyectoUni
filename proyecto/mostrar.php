<?Php

## Registor General

// codigo que busca en la bd todos los registros de la tabla general para cargar los datos de la tabla en la vista
//Registro general
if ($tituloPagina == 'Registro General') {
    
    include_once('conexion.php');
    $consulta = "SELECT * FROM general";
    $resultado = mysqli_query($conexion, $consulta);
 
}

// codigo que busca los datos a editar en el formulario de Editar Registro General
if ($tituloPagina == 'Editar Registro') {

    $id = $_GET['id'];
    
    include_once('conexion.php');
    $consulta = "SELECT * FROM general WHERE cedula = $id";
    $resultado = mysqli_query($conexion, $consulta);
 
}

## Vivienda

// codigo que carga los datos de las personas en el select de vivienda
if ($tituloPagina == 'Registro de vivienda') {
    include_once('conexion.php');
    $consulta = "SELECT cedula, nombre, apellido FROM general";
    $resultado = mysqli_query($conexion, $consulta);
}

// codigo que carga las viviendas de la persona seleccionada
if ($tituloPagina == 'Viviendas') {
    include_once('conexion.php');
    $consultaPersona = "SELECT cedula, nombre, apellido FROM general WHERE cedula = $id";
    $resultadoPersona = mysqli_query($conexion, $consultaPersona);

    $consultaVivienda = "SELECT * FROM vivienda WHERE cedula = $id";
    $resultadoVivienda = mysqli_query($conexion, $consultaVivienda);
    
}

// codigo que busca los datos a editar en el formulario de Editar Vivienda
if ($tituloPagina == 'Editar Vivienda') {

    $id = $_GET['id'];
    
    include_once('conexion.php');
    $consulta = "SELECT * FROM vivienda WHERE codigoVivienda = $id";
    $resultado = mysqli_query($conexion, $consulta);
 
}

## Medicina

// codigo que carga los datos de las personas en el select de medicina
if ($tituloPagina == 'Registro de Medicina') {
    include_once('conexion.php');
    $consulta = "SELECT cedula, nombre, apellido FROM general";
    $resultado = mysqli_query($conexion, $consulta);
}

// codigo que carga las medicinas de la persona seleccionada
if ($tituloPagina == 'Medicinas') {
    include_once('conexion.php');
    $consultaPersona = "SELECT cedula, nombre, apellido FROM general WHERE cedula = $id";
    $resultadoPersona = mysqli_query($conexion, $consultaPersona);

    $consultasalud = "SELECT * FROM salud WHERE cedula = $id";
    $resultadoMedicina = mysqli_query($conexion, $consultasalud);
    
}

// codigo que busca los datos a editar en el formulario de Editar Medicinas
if ($tituloPagina == 'Editar Medicina') {

    $id = $_GET['id'];
    
    include_once('conexion.php');
    $consulta = "SELECT * FROM salud WHERE codigoSalud = $id";
    $resultado = mysqli_query($conexion, $consulta);
 
}

## Gas

// codigo que carga los datos de las personas en el select de Gas
if ($tituloPagina == 'Registro de Gas') {
    include_once('conexion.php');
    $consulta = "SELECT cedula, nombre, apellido FROM general";
    $resultado = mysqli_query($conexion, $consulta);
}

// codigo que carga el Gas de la persona seleccionada
if ($tituloPagina == 'gas') {
    include_once('conexion.php');
    $consultaPersona = "SELECT cedula, nombre, apellido FROM general WHERE cedula = $id";
    $resultadoPersona = mysqli_query($conexion, $consultaPersona);

    $consultaGas = "SELECT * FROM gas WHERE cedula = $id";
    $resultadogas = mysqli_query($conexion, $consultaGas);
    
}

// codigo que busca los datos a editar en el formulario de Editar Gas
if ($tituloPagina == 'Editar Gas') {

    $id = $_GET['id'];
    
    include_once('conexion.php');
    $consulta = "SELECT * FROM gas WHERE codigoGas = $id";
    $resultado = mysqli_query($conexion, $consulta);
 
}
?>