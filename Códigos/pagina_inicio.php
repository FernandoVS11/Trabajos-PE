<?php

    session_start();
    if(!isset($_SESSION['voters'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Blockchain Proyect-Inicio</title>
        <link rel="stylesheet" type="text/css" href="Estilos/estilo_inicio.css">
    </head>
    <body>
        <div class="form">
            <h1 class="form__h1">¡Bienvenido Votante!</h1>
            <h2 class="form_h2"><a href="pagina_eleccion.php">Ir a la elección</a></h2>
        </div>
    </body>
    <footer><a class= "form_a" href="cerrar_sesion.php">Cerrar Sesión</a></footer>
</html>