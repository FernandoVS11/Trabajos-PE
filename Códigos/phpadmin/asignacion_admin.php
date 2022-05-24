<center>
            <table border="2">
                <thead>
                    <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Matrícula</th>
                    <th>Imagen</th>
                    <th colspan="2">Operaciones</th>
                    <th>Votos</th>
                    </tr>
                </thead>
                <?php
                include('../php/conexion_be.php');
                $query="SELECT * FROM candidatos";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['matricula']; ?></td>
                <td><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
                <th><a href="../admin/modificar_eleccion.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
                <th><a href="../admin/eliminar_eleccion.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                <th>
                    <?php
                        if($row['id']==1){
                            include('../php/contador_candidato1.php');
                            echo $output1;
                        }
                        else{
                            include('../php/contador_candidato2.php');
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