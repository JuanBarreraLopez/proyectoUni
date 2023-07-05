<?Php
    session_start();
    if (isset($_SESSION['usuario'])) {
        header("location:home.php");
    }

?> 
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>INGRESAR</title>
</head>

<body>
    <section class="login">
        <h1>ingreso al sistema</h1>
        <form action="validar.php" method="post" class="login">
            <table>
                <tr>
                    <p class="etiquetas">usuario<input class="controls" type="text" placeholder="ingrese su nombre" id="usuario" name="usuario"></p>
                    <p class="etiquetas">contraseña<input class="controls" type="password" placeholder="ingrese su contraseña" id="contra" name="contra"></p>
                    <input class="boton" type="submit" value="ingresar">
                </tr>
            </table>
        </form>
    </section>
    <footer>
    <?php include_once('footer.php');?>
    </footer>
</body>

</html>