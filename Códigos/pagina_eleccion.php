<?php
    include('php/comprobacion_sesion.php');
?>

<!DOCTYPE html>
<html>
    <header>
        <h1><center><img height="70px" src="https://user-images.githubusercontent.com/91033892/158305255-1f5c602c-6163-4e95-873c-bcfe35b6c151.png"/>The BlockChain Proyect</center></h1>
   </header>
    <head>
        <meta charset="UTF-8">
        <title>The Blockchain Proyect-Inicio</title>
        <link rel="stylesheet" type="text/css" href="Estilos/estilo_inicio.css">
    </head>
    <body>
        <div class="form">
            <h1 class="form__h1">Votación pendiente</h1>
        </div>
        <?php include('php/asignacion_tabla.php');?>
    </body>
    <footer><a class= "form_a" href="php/cerrar_sesion.php">Cerrar Sesión</a></footer>
</html>