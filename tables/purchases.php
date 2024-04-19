<table class="table mb-0">
                    
                    <?php 
                        $sql = "SELECT * FROM ms_Compras";
                        $result = $conn->query($sql);
                        
                    ?>

                    <thead>
                    <tr>
                        <?php ?>
                        <th scope="col">ID</th>
                        <th scope="col">ID producto</th>
                        <th scope="col">ID proveedor</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio unitario</th>
                        <th scope="col">Fecha de compra</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID_Compra"] . "</td>";
                                echo "<td>" . $row["ID_Producto"] . "</td>";
                                echo "<td>" . $row["ID_Proveedor"] . "</td>";
                                echo "<td>" . $row["Cantidad"] . "</td>";
                                echo "<td>" . $row["Precio_Unitario_Compra"] . "</td>";
                                echo "<td>" . $row["Fecha_Compra"] . "</td>";
                                echo "</tr>";
                            }
                        }
                            $conn->close();

                        ?>
                    </tbody>
                </table>