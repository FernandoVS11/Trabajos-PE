<?php

    include 'conexion_be.php';

    $matricula=$_POST['Matrícula']; 

    $tabla= "INSERT INTO usuarios(matricula) VALUES('$matricula')";

    $verificar_matricula= mysqli_query($conexion, "SELECT * FROM usuarios WHERE matricula='$matricula'");

    if(mysqli_num_rows($verificar_matricula) > 0){
        echo '
            <script>
                alert("Esta matrícula ya está registrada, ingrese otra diferente");
                window.location="../pagina_registro.php";
            </script>
        ';
        exit();
    }

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