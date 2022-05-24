<?php

    include 'conexion_be.php';

    $matricula=$_POST['Matrícula'];
    $id=$_POST['id'];
    
    $verificar_matricula= mysqli_query($conexion, "SELECT * FROM voters WHERE matricula='$matricula'");

    if(mysqli_num_rows($verificar_matricula) == 0){
        
        echo '
            <script>
                alert("Esa matrícula no está registrada en la base de datos, ingrese la matrícula con la que se registró");
                window.location="../pagina_eleccion.php";
            </script>
        ';
        exit();
    }
    $verificar_matricula= mysqli_query($conexion, "SELECT * FROM votos WHERE matricula='$matricula'");
    if(mysqli_num_rows($verificar_matricula) > 0){
        
        echo '
            <script>
                alert("Usted ya voto");
                window.location="../pagina_eleccion.php";
            </script>
        ';
        exit();
    }

    $tabla= "INSERT INTO votos(matricula,codigo) VALUES($matricula,$id)";

    $resultado=$conexion->query($tabla);  

    if($resultado){
        echo'
        <script>
            alert("Ha votado de manera correcta");
            window.location= "../pagina_eleccion.php";
        </script>
    ';
    }
    else{
        echo'
        <script>
            alert("No se pudo concretar el voto");
            window.location= "../pagina_eleccion.php";
        </script>
    ';
    }
?>