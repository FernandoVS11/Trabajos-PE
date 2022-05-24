<?php
    $conexion=mysqli_connect("localhost:3307","root", "", "login_db");
    $query= "SELECT COUNT(*) AS contador FROM votos WHERE codigo='2'";
    $query_result= mysqli_query($conexion,$query);
    while($row=mysqli_fetch_assoc($query_result)){
        $output2=$row['contador'];
    }
?>