<?php
    $conexion=mysqli_connect("localhost:3307","root", "", "login_db");
    $query= "SELECT COUNT(*) AS contador FROM candidatos";
    $query_result= mysqli_query($conexion,$query);
    while($row=mysqli_fetch_assoc($query_result)){
        $output=$row['contador'];
    }
?>