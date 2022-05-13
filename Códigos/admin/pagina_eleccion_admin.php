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
    <header>
        <h1><img height="70px" src="https://user-images.githubusercontent.com/91033892/158305255-1f5c602c-6163-4e95-873c-bcfe35b6c151.png"/>BlockChain Proyect 2.0</h1>
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
        <center>
            <table border="2">
                <thead>
                    
                    <tr>
                        <th colspan=""><a href="index.php">Nuevo</a></th>
                    </tr>
                    <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Matrícula</th>
                    <th>Imagen</th>
                    <th colspan="2">Operaciones</th>
                    </tr>
                </thead>
                <?php
                include('../php/conexion_be.php');
                $query="SELECT * FROM candidatos";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['matricula']; ?></td>
                <td><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
                <th><a href="../php/modificar_eleccion.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
                <th><a href="../php/eliminar_eleccion.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
            </tr>
            <?php
                }
            ?>
            </table>
        </center>
    </body>
    <footer><a class= "form_a" href="cerrar_sesion.php">Cerrar Sesión</a></footer>
</html>