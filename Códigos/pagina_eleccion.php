<?php

    session_start();
    if(!isset($_SESSION['voters'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
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
        <title>The Blockchain Proyect-Inicio</title>
        <link rel="stylesheet" type="text/css" href="Estilos/estilo_inicio.css">
    </head>
    <body>
        <div class="form">
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

    </body>
     
</html>