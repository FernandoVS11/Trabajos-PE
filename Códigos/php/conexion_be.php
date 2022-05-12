<?php
    $conexion=mysqli_connect("localhost:3307","root", "", "login_db");
    if(!$conexion){
        die("Error: No se pudo conectar con la base de datos");
    }
?>