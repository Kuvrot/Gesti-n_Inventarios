<table class="table mb-0">
                    
                    <?php 
                        $sql = "SELECT * FROM ctg_Proveedor";
                        $result = $conn->query($sql);
                        
                    ?>

                    <thead>
                    <tr>
                        <?php ?>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Teléfono</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID_Proveedor"] . "</td>";
                                echo "<td>" . $row["Nombre"] . "</td>";
                                echo "<td>" . $row["Contacto"] . "</td>";
                                echo "<td>" . $row["Direccion"] . "</td>";
                                echo "<td>" . $row["Telefono"] . "</td>"; 
                                if (!isset($_GET['d'])){?> <td><h6 class="row"><a href="delete.php?t=1&id=<?php echo $row["ID_Proveedor"]; ?>" style="text-align:right; color:red; text-decoration:none;">- REMOVER</a></h6></td> <?php
                                ?> <td><h6 class="row"><a href="form.php?t=1&id=<?php echo $row["ID_Proveedor"]; ?>" style="text-align:right; color:blue; text-decoration:none;">* EDITAR</a></h6></td> <?php
                                echo "</tr>";}
                            }
                        }

                            $conn->close();

                        ?>
                    </tbody>
                </table>