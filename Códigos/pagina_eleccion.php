<?php
    include('php/comprobacion_sesion.php');
?>

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
<<<<<<< HEAD
            <h1 class="form__h1">Elija a su candidato</h1>
            <a class= "form_a" href="php/cerrar_sesion.php">Cerrar Sesión</a> 
            <button id = "candidatoUno">Primer Candidato</button><br>
            <button id = "candidatoDos">Segundo Candidato</button><br>

        </div>

        <script src= "https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
        <script src= "https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin = "anonymous"></script>

        <script>
            var contract;
            $(document).ready(function(){

                web3 = new Web3(web3.currentProvider);

                var adress = "";
                var abi = "";


                contract = new web3.eth.Contract(abi, adress);

                contract.methods.verVotos().call().then(function(voto){

                    $('#CandidatoUno').html(voto);

                })
            })


        </script>

=======
            <h1 class="form__h1">Votación pendiente</h1>
        </div>
        <?php include('php/asignacion_tabla.php');?>
>>>>>>> da498674ca72534d7c5326d39c9d470c1e46c09d
    </body>
    <footer><a class= "form_a" href="php/cerrar_sesion.php">Cerrar Sesión</a></footer>
</html>