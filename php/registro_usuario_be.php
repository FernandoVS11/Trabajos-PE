<?php

    include 'conexion_be.php';

    $matricula=$_POST['Matrícula']; 

    $tabla= "INSERT INTO usuarios(matricula) VALUES('$matricula')";

    $ejecutar = mysqli_query($conexion, $tabla);    

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado de manera exitosa");
            window.location= "../index.php";
        </script>
        ';
    }
    else{
        echo'
        <script>
            alert("Usuario no almacenado, intente de nuevo");
            window.location= "../index.php";
        </script>
    ';
    }
    mysqli_close($conexion);
?>