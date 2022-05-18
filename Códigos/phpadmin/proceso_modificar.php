<?php

    include '../php/conexion_be.php';

    $id=$_REQUEST['id'];
    $matricula=$_REQUEST['Matrícula'];
    $nombre=$_POST['Nombre']; 
    $imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    
    $tabla= "UPDATE candidatos SET nombre='$Nombre',imagen='$imagen', matricula=$matricula WHERE id='$id'";

    $verificar_matricula= mysqli_query($conexion, "SELECT * FROM candidatos WHERE matricula='$matricula'");

    if(mysqli_num_rows($verificar_matricula) > 0){
        
        echo '
            <script>
                alert("Esta matrícula ya está registrada, ingrese otra diferente");
                window.location="../admin/modificar_eleccion.php";
            </script>
        ';
        exit();
    }
    $resultado=$conexion->query($tabla);  

    if($resultado){
        header("Location: ../admin/pagina_eleccion_admin.php");
        
    }
    else{
        echo'
        <script>
            alert("Usuario no almacenado, intente de nuevo");
            window.location= "../admin/pagina_creacion.php";
        </script>
    ';
    }
?>