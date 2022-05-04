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
            <h2 class="form__h2">¡Bienvenido Nuevo Usuario!</h2>
            <h3 class="form__h3">Porfavor ingrese su matrícula y contraseña para registrarse:</h3>
            <form action="php/registro_usuario_be.php" method="POST">
                <input type="text" placeholder="Matrícula" name="Matrícula" required="required">
                <input placeholder="Ingrese contraseña" name="Password" type="password" required = "required">
                <button>Registrarse</button>
            </form>
            <h4>Si ya se registró haga clic <a href="index.php">aquí</a></h4>
        </div>
    </body>
</html>