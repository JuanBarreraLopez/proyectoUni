<?Php
    session_start();

    session_unset('usuario');
    session_destroy();
    header("location:index.php");