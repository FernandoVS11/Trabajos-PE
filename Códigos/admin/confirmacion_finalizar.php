
<!DOCTYPE html>
<html>
    <header>
        <h1><center><img height="70px" src="https://user-images.githubusercontent.com/91033892/158305255-1f5c602c-6163-4e95-873c-bcfe35b6c151.png"/><br>The Blockchain Proyect</center></h1>
    </header>
    <head>
        <meta charset="UTF-8">
        <title>The Blockchain Proyect-ADMIN</title>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilo.css">
    </head>
    <body>
        <div class="form">
            <h2 class="form__h2">¿Seguro que quire finalizar la elección?</h2>
            <h3 class="form__h3">Si es así ingrese el nombre y los votos del ganador</h3>
            <form action="../php/finalizar_eleccion.php" method="POST">
                <input type="text" placeholder="Nombre" name="nombre" required="required">
                <input type="number" placeholder="Ingrese los votos" name="votos" required = "required">
                <button>Enviar</button>
            </form>
        </div>
    </body>
    <footer>
        <a href="pagina_inicio_admin.php">Regresa a página inicio admin</a><br>   
        <a class= "form_a" href="../php/cerrar_sesion.php">Cerrar Sesión</a>
    </footer>
</html>