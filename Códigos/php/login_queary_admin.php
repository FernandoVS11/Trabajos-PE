<?php
	session_start();
        
        require_once 'php/conexion_be.php';
        $matricula=$_POST['Matrícula'];
		$password=$_POST['Password'];
	
		$validar_login_admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Mátricula = '$matricula' and password = '$password'");
			
        if(mysqli_num_rows($validar_login_admin) > 0){
            $_SESSION['usuarios']= $matricula;
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