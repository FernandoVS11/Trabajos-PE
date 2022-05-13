
<!DOCTYPE html>
<html>
    <head></head>
<body>
    <?php
        include('php/conexion_be.php');
        $query="SELECT * FROM candidatos";
        $resultado= $conexion->query($query);
        $row=$resultado->fetch_assoc();
    ?>
        <div class="form">
            <h1 class="form__h1">¡Crea tu primera elección!</h1>
            <h2 class="form__h1" >Candidato 1</h2>
            <form action="../php/registro_candidatos.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Nombre" name="Nombre" required="required"/><br/><br/>
                <input type="text" placeholder="Matrícula" name="Matrícula" required="required"/><br/><br/>
                <input type="file" placeholder="Inserte la imagen" name="Imagen" required = "required">
                <button>Registrarse</button>
            </form>
            <h2 class="form__h1">Candidato 2</h2>
            <a class= "form_a" href="../php/cerrar_sesion.php">Cerrar Sesión</a> 
        </div>
    </body>
</html>