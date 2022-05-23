<?php
    include('../phpadmin/comprobacion_admin.php')
?>
<!DOCTYPE html>
<html>
<header>
        <h1><center><img height="70px" src="https://user-images.githubusercontent.com/91033892/158305255-1f5c602c-6163-4e95-873c-bcfe35b6c151.png"/><br>The Blockchain Proyect-Modificar</center></h1>
    </header>
    <head>
        <meta charset="UTF-8">
        <title>The Blockchain Proyect-Eliminar</title>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilo_inicio.css">
    </head>
<body>
        <?php
            include('../php/asignacion_datos.php');
        ?>
        <div class="form">
        <center>
            <h1 class="form__h1">¿Seguro que quiere eliminar a este candidato?</h1>
            <h2 class="form__h1" >Candidato <?php echo $row['id'];?></h2>
            <form action="../phpadmin/proceso_eliminar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Nombre" name="Nombre" required="required" value="<?php echo $row['nombre']; ?>"/><br/><br/>
                <img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/><br/><br/>
                <input type="text" placeholder="Matrícula" name="Matrícula" required="required" value="<?php echo $row['matricula']; ?>"/><br/><br/>
                <button><a href="../phpadmin/proceso_eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></button>
            </form> 
        </center>
        </div>
    </body>
    <footer><a class= "form_a" href="../php/cerrar_sesion.php">Cerrar Sesión</a></footer>
</html>