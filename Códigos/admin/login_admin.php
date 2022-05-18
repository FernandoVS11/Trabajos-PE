
<!DOCTYPE html>
<html>
    <header>
        <h1><center><img height="70px" src="https://user-images.githubusercontent.com/91033892/158305255-1f5c602c-6163-4e95-873c-bcfe35b6c151.png"/>The Blockchain Proyect</center></h1>
    </header>
    <head>
        <meta charset="UTF-8">
        <title>The Blockchain Proyect-ADMIN</title>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilo.css">
    </head>
    <body>
        <div class="form">
            <h2 class="form__h2">¡Bienvenido Admin!</h2>
            <h3 class="form__h3">Porfavor ingrese su matrícula y contraseña:</h3>
            <form action="../phpadmin/login_queary_admin.php" method="POST">
                <input type="text" placeholder="Matrícula" name="Matrícula" required="required">
                <input placeholder="Ingrese contraseña" name="Password" type="password" required = "required">
                <button>Enviar</button>
            </form>
            <h4>Si no es admin haga clic <a href="../index.php">aquí</a></h4>
        </div>
    </body>
</html>
