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
            <h2 class="form__h1" >Candidato 1</h2>
            <form action="../php/registro_candidatos.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Nombre" name="Nombre" required="required"/><br/><br/>
                <input type="text" placeholder="Matrícula" name="Matrícula" required="required"/><br/><br/>
                <input type="file" placeholder="Inserte la imagen" name="Imagen" required = "required">
                <button>Registrarse</button>
            </form>
            <h2 class="form__h1">Candidato 2</h2>
        </div>
    </body>
    <footer><a class= "form_a" href="cerrar_sesion.php">Cerrar Sesión</a></footer>
</html>