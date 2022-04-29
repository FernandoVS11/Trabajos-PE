<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: pagina_inicio.php");
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Blockchain Proyect</title>
        <link rel="stylesheet" type="text/css" href="Estilos/estilo.css">
    </head>
    <body>
        <div class="form">
            <h1 class="form__h1">The Blockchain Proyect</h1>
            <h2 class="form__h2">¡Bienvenido Usuario!</h2>
            <h3 class="form__h3">Porfavor ingrese su matrícula:</h3>
            <form action="php/login_usuario_be.php" method="POST">
                <input type="text" placeholder="Matrícula" name="Matrícula_login">
                <button>Enviar</button>
            </form>
            <h4>Si no se ha registrado haga clic <a href="pagina_registro.php">aquí</a></h4>
        </div>
    </body>
</html>