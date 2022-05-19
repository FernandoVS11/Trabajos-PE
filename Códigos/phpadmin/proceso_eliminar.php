
<?php

    include('../php/conexion_be.php');

    $id=$_REQUEST['id'];
    $tabla= "DELETE FROM candidatos WHERE id='$id'";
    $resultado= $conexion->query($tabla);

    if($resultado){
        echo'
        <script>
            alert("Usuario elminado");
            window.location= "../admin/pagina_eleccion_admin.php";
        </script>
    ';
    }
    else{
        echo'
        <script>
            alert("Usuario no eliminado, intente de nuevo");
            window.location= "../admin/pagina_eleccion_admin.php";
        </script>
    ';
    }
?>