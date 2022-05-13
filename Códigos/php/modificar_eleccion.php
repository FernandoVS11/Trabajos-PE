
<!DOCTYPE html>
<html>
    <head></head>
<body>
        <?php
            include('conexion_be.php');
            $id= $_REQUEST['id'];
            $query="SELECT * FROM candidatos WHERE id='$id'";
            $resultado= $conexion->query($query);
            $row=$resultado->fetch_assoc();
        ?>
        <div class="form">
        <center>
            <h1 class="form__h1">¡Crea tu primera elección!</h1>
            <h2 class="form__h1" >Candidato <?php echo $row['id'];?></h2>
            <form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Nombre" name="Nombre" required="required" value="<?php echo $row['nombre']; ?>"/><br/><br/>
                <img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/><br/><br/>
                <input type="text" placeholder="Matrícula" name="Matrícula" required="required" value="<?php echo $row['matricula']; ?>"/><br/><br/>
                <input type="file" placeholder="Inserte la imagen" name="Imagen" required = "required">
                <button>Registrarse</button>
            </form> 
        </center>
        </div>
    </body>
    <footer><a class= "form_a" href="cerrar_sesion.php">Cerrar Sesión</a></footer>
</html>