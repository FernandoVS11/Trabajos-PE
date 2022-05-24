<?php
    include 'conexion_be.php';

    
    $tabla= "INSERT INTO finalizacion_voto(codigo) VALUES('12345')";
    
    $ejecutar = mysqli_query($conexion, $tabla);

    $nombre=$_POST['nombre']; 
    $votos=$_POST['votos'];

    $tabla2= "INSERT INTO resultado(ganador,votos) VALUES('$nombre', '$votos')";

    $ejecutar = mysqli_query($conexion, $tabla2);
    $verificar_codigo= mysqli_query($conexion, "SELECT * FROM finalizacion_voto WHERE codigo='12345'");

    if(mysqli_num_rows($verificar_codigo) > 0){

        $tabla3= "DELETE FROM candidatos";
        $resultado= $conexion->query($tabla3);

        $tabla4= "DELETE FROM votos";
        $resultado= $conexion->query($tabla4);
    }

    if($ejecutar){
        echo '
        <script>
            alert("La votación ha sido finalizada");
            window.location= "../admin/pagina_inicio_admin.php";
        </script>
        ';
    }
    else{
        echo'
        <script>
            alert("no se pudo finalizar la eleccion");
            window.location= "../admin/pagina_inicio_admin.php";
        </script>
    ';
    }
    mysqli_close($conexion);

?>