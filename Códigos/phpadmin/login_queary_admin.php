<?php
	session_start();
        
        include '../php/conexion_be.php';
        $matricula=$_POST['Matrícula'];
		$password=$_POST['Password'];
	
		$validar_login_admin = mysqli_query($conexion, "SELECT * FROM admin WHERE matricula = '$matricula' and contrasena = '$password'");
			
        if(mysqli_num_rows($validar_login_admin) > 0){
            $_SESSION['admin']= $matricula;
            header("location: ../admin/pagina_inicio_admin.php");
            exit;
        }
        else{
            echo'
                <script>
                    alert("Usuario no existe, por favor verifique la matrícula introducida");
                    window.location="../admin/login_admin.php";
                </script>
            ';
            exit;
        }
?>