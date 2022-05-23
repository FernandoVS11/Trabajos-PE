<?php
    function verificar($verificar_matricula){
        if(mysqli_num_rows($verificar_matricula) > 0){
        
            echo '
                <script>
                    alert("Esta matrícula ya está registrada, ingrese otra diferente");
                    window.location="../admin/pagina_creacion_admin.php";
                </script>
            ';
            exit();
        }
    }
    include('../php/contador.php');
    if($output>=2){
        echo'
        <script>
             alert("Solo pueden almacenarse 2 candidatos por el momento");
            window.location= "../admin/pagina_eleccion_admin.php";
        </script>
        ';       
    }
    else{
        $query= "SELECT COUNT(*) AS contador2 FROM finalizacion_voto";
        $query_result= mysqli_query($conexion,$query);
        while($row=mysqli_fetch_assoc($query_result)){
            $output=$row['contador2'];
        }
        if($output>0){
            $tabla= "DELETE FROM finalizacion_voto";  
            $resultado= $conexion->query($tabla);
        }
        $matricula=$_POST['Matrícula'];
        $nombre=$_POST['Nombre']; 
        $imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
        
        $tabla= "INSERT INTO candidatos(nombre, imagen, matricula) VALUES('$nombre', '$imagen','$matricula')";
    
        $verificar_matricula= mysqli_query($conexion, "SELECT * FROM candidatos WHERE matricula='$matricula'");
        verificar($verificar_matricula);
    
        $resultado=$conexion->query($tabla);  
    
        if($resultado){
            header("Location: ../admin/pagina_eleccion_admin.php");
            
        }
        else{
            echo'
            <script>
                alert("Usuario no almacenado, intente de nuevo");
                window.location= "../admin/pagina_creacion_admin.php";
            </script>
        ';
        }  
    }

?>