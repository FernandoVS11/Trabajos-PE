
<?php

    include 'conexion_be.php';

    $matricula=$_REQUEST['matricu;a'];
    
    $tabla= "DELETE FROM candidatos WHERE matricula='$matricula'";

    $verificar_matricula= mysqli_query($conexion, "SELECT * FROM candidatos WHERE matricula='$matricula'");

    if(mysqli_num_rows($verificar_matricula) > 0){
        
        echo '
            <script>
                alert("Esta matrícula ya está registrada, ingrese otra diferente");
                window.location="../pagina_eliminar.php";
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
            window.location= "../index.php";
        </script>
    ';
    }
?>