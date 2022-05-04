<?php

    $conexion=mysqli_connect("localhost","root", "", "login_db");
    if(!$conexion){
        die("Error: No se pudo conectar con la base de datos");
    }
?>