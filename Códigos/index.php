
<!DOCTYPE html>
<html>
    <header>
        <h1><center><img height="70px" src="https://user-images.githubusercontent.com/91033892/158305255-1f5c602c-6163-4e95-873c-bcfe35b6c151.png"/><br>The BlockChain Proyect</center></h1>
   </header>
    <head>
        <meta charset="UTF-8">
        <title>The Blockchain Proyect</title>
        <link rel="stylesheet" type="text/css" href="Estilos/estilo.css">
    </head>
    <body>
        <div class="form">
            <h2 class="form__h2">¡Bienvenido Usuario!</h2>
            <h3 class="form__h3">Porfavor ingrese su matrícula:</h3>
            <form action="php/login_query_voter.php" method="POST">
                <input type="text" placeholder="Matrícula" name="Matrícula" required="required">
                <input placeholder="Ingrese contraseña" name="Password" type="Password" required = "required">
                <button>Enviar</button>
            </form>
            <h4>Si no se ha registrado haga clic <a href="pagina_registro.php">aquí</a></h4>
            <h4>Si es admin haga clic <a href="admin/login_admin.php">aquí</a></h4>
        </div>
    </body>
</html>