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
            <h1 class="form__h1">Elija a su candidato</h1>
            <a class= "form_a" href="php/cerrar_sesion.php">Cerrar Sesión</a> 
            <button id = "candidatoUno">Primer Candidato</button>
            <button id = "candidatoDos">Segundo Candidato</button><br>

        </div>

        <script src= "https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
        <script src= "https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin = "anonymous"></script>

        <script>
            var contract;
            $(document).ready(function(){

                web3 = new Web3(web3.currentProvider);

                var adress = "0x0f51a44e7D175d9d0D712e73DE6a64aE5CFa8864";
                var abi = [
	{
		"constant": false,
		"inputs": [],
		"name": "efectuarVotoDos",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "efectuarVotoUno",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "verVotosDos",
		"outputs": [
			{
				"name": "",
				"type": "int256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "verVotosUno",
		"outputs": [
			{
				"name": "",
				"type": "int256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
];

                contract = new web3.eth.Contract(abi, adress);

                contract.methods.verVotosUno().call().then(function(voto){

                    $('#CandidatoUno').html(voto);

                })
            })


        </script>

    </body>
    <footer><a class= "form_a" href="php/cerrar_sesion.php">Cerrar Sesión</a></footer>
</html>