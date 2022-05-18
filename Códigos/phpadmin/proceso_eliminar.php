
<?php

    include '../php/conexion_be.php';

    $id=$_REQUEST['id'];
    $matricula=$_REQUEST['matricula'];
    $tabla= "DELETE FROM candidatos WHERE id='$id'";

    $verificar_matricula= mysqli_query($conexion, "SELECT * FROM candidatos WHERE matricula='$matricula'");

    function verificarMatricula($verificar_matricula){
        if(mysqli_num_rows($verificar_matricula) > 0){
        
        echo '
            <script>
                alert("Esta matrícula ya está registrada, ingrese otra diferente");
                window.location="../admin/pagina_eliminar.php";
            </script>
        ';
        exit();
    }
    $resultado=$conexion->query($tabla);  

        $resultado=$conexion->query($tabla);

        return $resultado;
    }
    

    $resultado= verificarMatricula($verificar_matricula);
    
    
    if($resultado){
        header("Location: pagina_eleccion_admin.php");
        
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