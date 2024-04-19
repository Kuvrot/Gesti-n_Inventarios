<table class="table mb-0">
                    
                    <?php 
                        $sql = "SELECT * FROM ctg_Producto";
                        $result = $conn->query($sql);
                        
                    ?>

                    <thead>
                    <tr>
                        <?php ?>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio unitario</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Stock mínimo</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID_Producto"] . "</td>";
                                echo "<td>" . $row["Nombre"] . "</td>";
                                echo "<td>" . $row["Descripcion"] . "</td>";
                                echo "<td>" . $row["Precio_Unitario"] . "</td>";
                                echo "<td>" . $row["Stock_Disponible"] . "</td>";
                                echo "<td>" . $row["Stock_Minimo"] . "</td>";
                                echo "</tr>";
                            }
                        }
                            $conn->close();

                        ?>
                    </tbody>
                </table>