<?php
    include('../phpadmin/comprobacion_admin.php')
?>

<!DOCTYPE html>
<html>
    <header>
        <h1><center><img height="70px" src="https://user-images.githubusercontent.com/91033892/158305255-1f5c602c-6163-4e95-873c-bcfe35b6c151.png"/>The Blockchain Proyect-Eleccion-ADMIN</center></h1>
    </header>
    <head>
        <meta charset="UTF-8">
        <title>The Blockchain Proyect-Eleccion-ADMIN</title>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilo_inicio.css">
    </head>
    <body>
        <div class="form">
            <h1 class="form__h1">Votación pendiente ADMIN</h1>
        </div>
        <?php
            include('../phpadmin/asignacion_admin.php');
        ?>       
    </body>
    <footer>
    <a href="pagina_inicio_admin.php">Regresa a página inicio admin</a><br>
    <a class= "form_a" href="../php/cerrar_sesion.php">Cerrar Sesión</a> 
    </footer>
</html>