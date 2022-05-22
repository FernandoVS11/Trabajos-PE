<?php
session_start();

	    include('conexion_be.php');	
        $matricula=$_POST['Matrícula'];
		$password=$_POST['Password'];
	
		$validar_login_votante= mysqli_query($conexion,"SELECT * FROM voters WHERE matricula = '$matricula' and contrasena = '$password'");				
		
        if(mysqli_num_rows($validar_login_votante) > 0){
            $_SESSION['voters']= $matricula;
            header("location: ../pagina_inicio.php");
            exit;
        }
        else{
            echo'
                <script>
                    alert("Usuario no existe, por favor verifique la matrícula introducida");
                    window.location="../index.php";
                </script>
            ';
            exit;
        }
?>