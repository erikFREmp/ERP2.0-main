<?php


session_start();    

if(!isset($_SESSION['loggedin']))
{
    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="assets/js/motor.js"defer></script>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
 <body class='loggedin'>
    <?php require_once "Views/shared/Menu1View.php"; ?>
    <?php require_once "Views/inicio/inicio1View.php"; ?>
 </body>
</html>