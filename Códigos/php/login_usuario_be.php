<?php

    session_start();
    include 'conexion_be.php';
    $matricula=$_POST['Matrícula_login'];
    $validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE matricula='$matricula'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario']= $matricula;
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