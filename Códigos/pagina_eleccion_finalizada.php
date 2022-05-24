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
            <h1 class="form__h1">La eleccion aún está sin iniciar vuelva después de un tiempo</h1>
            <h2>Resultado de las elecciones previas</h2>
            <center>
            <table border="2">
                <thead>
                    <th>N°</th>
                    <th>Nombres</th>
                    <th>votos</th>
                </thead>
            <?php
                include('php/conexion_be.php');
                $query="SELECT * FROM resultado";
                $resultado= mysqli_query($conexion,$query);
                while($row=mysqli_fetch_assoc($resultado)){?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ganador']; ?></td>
                <td><?php echo $row['votos']; ?></td>
            </tr>
            <?php }mysqli_free_result($resultado); ?>
            </table>
            </center>
        </div>
    </body>
	<footer>
        <a href="pagina_inicio.php">Regresa a página inicio</a><br>   
        <a class= "form_a" href="php/cerrar_sesion.php">Cerrar Sesión</a>
    </footer>
</html>