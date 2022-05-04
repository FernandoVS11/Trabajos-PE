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
        <title>The Blockchain Proyect-Creación</title>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilo_inicio.css">
    </head>
    <body>
        <div class="form">
            <h1 class="form__h1">¡Crea tu primera elección!</h1>
            <a class= "form_a" href="../php/cerrar_sesion.php">Cerrar Sesión</a> 
        </div>
    </body>
</html>