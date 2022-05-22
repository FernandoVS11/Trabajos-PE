<?php

    include '../php/conexion_be.php';

    $id=$_REQUEST['id'];
    $matricula=$_POST['Matrícula'];
    $nombre=$_POST['Nombre']; 
    $imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    
    $tabla= "UPDATE candidatos SET nombre='$nombre',imagen='$imagen', matricula='$matricula' WHERE id='$id'";

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
        echo'
        <script>
            alert("Usuario modificado de manera correcta");
            window.location= "../admin/pagina_eleccion_admin.php";
        </script>
    ';
    }
    else{
        echo'
        <script>
            alert("Usuario no modificado, intente de nuevo");
            window.location= "../admin/pagina_eleccion_admin.php";
        </script>
    ';
    }
?>