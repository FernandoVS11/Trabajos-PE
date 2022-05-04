<?php

    session_start();
    if(!isset($_SESSION['usuarios'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "login_admin.php";
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
        <link rel="stylesheet" type="text/css" href="../Estilos/estilo_inicio.css">
    </head>
    <body>
        <div class="form">
            <h1 class="form__h1">¡Bienvenido ADMIN!</h1>
            <h2 class="form_h2"><a href="pagina_eleccion_admin.php">Ir a la elección</a></h2>
            <h2 class="form_h2"><a href="pagina_creacion_admin.php">Crear elección</a></h2>
            <a class= "form_a" href="../php/cerrar_sesion.php">Cerrar Sesión</a> 
        </div>
    </body>
</html>