<?php
session_start();

	    require_once 'php/conexion_be.php';	
        $matricula=$_POST['matricula'];
		$password=$_POST['password'];
	
		$validar_login_admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE matricula = '$matricula' and password = '$password'");
		$validar_login_votante= mysqli_query($conexion,"SELECT * FROM voters WHERE matricula = '$matricula' and password = '$password");				
		
        if(mysqli_num_rows($validar_login_admin) > 0){
            $_SESSION['usuarios']= $matricula;
            header("location: ../pagina_inicio.php");
            exit;
        }
        elseif(mysqli_num_rows($validar_login_admin) > 0){
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