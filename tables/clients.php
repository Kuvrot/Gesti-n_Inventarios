<table class="table mb-0">
                    
                    <?php 
                        $sql = "SELECT * FROM ctg_Cliente";
                        $result = $conn->query($sql);
                        
                    ?>

                    <thead>
                    <tr>
                        <?php ?>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID_Cliente"] . "</td>";
                                echo "<td>" . $row["Nombre"] . "</td>";
                                echo "<td>" . $row["Contacto"] . "</td>";
                                echo "<td>" . $row["Direccion"] . "</td>";
                                echo "<td>" . $row["Telefono"] . "</td>";
                                echo "</tr>";
                            }
                        }
                            $conn->close();

                        ?>
                    </tbody>
                </table>