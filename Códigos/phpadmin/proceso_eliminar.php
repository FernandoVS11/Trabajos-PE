
<?php

    include '../php/conexion_be.php';

    $id=$_REQUEST['id'];
    $tabla= "DELETE FROM candidatos WHERE id='$id'";

?>