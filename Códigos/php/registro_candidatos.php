<?php
    function verificar($verificar_matricula){
        if(mysqli_num_rows($verificar_matricula) > 0){
        
            echo '
                <script>
                    alert("Esta matrícula ya está registrada, ingrese otra diferente");
                    window.location="../admin/pagina_creacion_admin.php";
                </script>
            ';
            exit();
        }
    }
    include 'conexion_be.php';

    $matricula=$_POST['Matrícula'];
    $nombre=$_POST['Nombre']; 
    $imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    
    $tabla= "INSERT INTO candidatos(nombre, imagen, matricula) VALUES('$nombre', '$imagen','$matricula')";

    $verificar_matricula= mysqli_query($conexion, "SELECT * FROM candidatos WHERE matricula='$matricula'");
    verificar($verificar_matricula);

    $resultado=$conexion->query($tabla);  

    if($resultado){
        header("Location: ../admin/pagina_eleccion_admin.php");
        
    }
    else{
        echo'
        <script>
            alert("Usuario no almacenado, intente de nuevo");
            window.location= "../index.php";
        </script>
    ';
    }
?>