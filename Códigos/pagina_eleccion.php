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
            <h1 class="form__h1">Votación pendiente</h1>
        </div>
        <center>
            <table border="2">
                <thead>
                    <th>Nombre</th>
                    <th>Matrícula</th>
                    <th>Imagen</th>
                    <th>Voto</th>
                </thead>
                <?php
                include('php/conexion_be.php');
                $query="SELECT * FROM candidatos";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['matricula']; ?></td>
                <td><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
                <th><a href="#">Votar</a></th> 
            </tr>
            <?php
                }
            ?>
            </table>
        </center>
        <div class="form2">
            <a class= "form2_a" href="php/cerrar_sesion.php">Cerrar Sesión</a> 
        </div>
    </body>
</html>