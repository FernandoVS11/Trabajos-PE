<center>
            <table border="2">
                <thead>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Matrícula</th>
                    <th>Imagen</th>
                    <th>Operación</th>
                    <th>Votos</th>
                </thead>
            <?php
                include('conexion_be.php');
                $query="SELECT * FROM candidatos";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>
            <tr>
            <td colspan="6"><center>Candidato <?php echo $row['id'];?></center></td>
            </tr>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['matricula']; ?></td>
                <td><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
                <th><a href="php/confirmacion_voto.php?id=<?php echo $row['id']; ?>">Votar</a></th> 
                <th>
                    <?php
                        if($row['id']==1){
                            include('contador_candidato1.php');
                            echo $output1;
                        }
                        else{
                            include('contador_candidato2.php');
                            echo $output2;
                        }
                    ?>
                </th>
            </tr>
            <?php
                }
            ?>
            </table>
        </center>
