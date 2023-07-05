<?Php
    session_start();
    if (isset($_SESSION['usuario'])) {
        header("location:home.php");
    }

?> 
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="textos">
                <h1>Bienvenido</h1>
                <h2>Sistema de Encuesta</h2>
                <a href="login.php">Login</a>
            </div>
            <img src="assets/image/vector.png" alt="">
        </div>
    </header>
    <div class="wave">
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </div>
    <footer>
    <?php include_once('footer.php');?>
    </footer>
    <script src="assets/js/script.js"></script>
</body>

</html>