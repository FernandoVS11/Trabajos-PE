<?php
    include('conexion_be.php');
    $id= $_REQUEST['id'];
    $query="SELECT * FROM candidatos WHERE id='$id'";
    $resultado= $conexion->query($query);
    $row=$resultado->fetch_assoc();
?>