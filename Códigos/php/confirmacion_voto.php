<?php
    include('comprobacion_sesion.php');
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
			<center>
            <h1 class="form__h1">Confirme su voto</h1>
            <?php include('asignacion_datos.php');?>
            <h2>Seguro que quiere votar por el candidato <?php echo $row['id'];?>?</h2>
			<form enctype="multipart/form-data">
                <textarea type="text" readonly=""><?php echo $row['nombre']; ?></textarea><br/><br/>
                <img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/><br/><br/>
                <textarea type="text" readonly=""><?php echo $row['matricula']; ?></textarea><br/><br/>
            </form>
            <button id = "candidatoUno">¡Vota!</button>
            <p id = "votosUno"></p>
			</center>
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
	},
	{
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
	}
] ;
                contract = new web3.eth.Contract(abi, adress);

                contract.methods.verVotosUno().call().then(function(voto){

                    $('#votosUno').html(voto);

                })
            })
        </script>
    </body>
	<footer>
        <a href="../pagina_inicio.php">Regresa a página inicio</a><br>   
        <a class= "form_a" href="cerrar_sesion.php">Cerrar Sesión</a>
    </footer>
</html>