<table class="table mb-0">
                    
                    <?php 
                        $sql = "SELECT * FROM ms_Ventas";
                        $result = $conn->query($sql);
                        $result2 = $conn->query("CONVERT(varchar, Fecha_Venta, 'DD-MM-YYYY')");
                        
                    ?>

                    <thead>
                    <tr>
                        <?php ?>
                        <th scope="col">ID</th>
                        <th scope="col">ID producto</th>
                        <th scope="col">Nombre del producto</th>
                        <th scope="col">ID cliente</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio unitario</th>
                        <th scope="col">Fecha de venta</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID_Venta"] . "</td>";
                                echo "<td>" . $row["ID_Producto"] . "</td>";
                                echo "<td>" . $row["NombreProducto"] . "</td>";
                                echo "<td>" . $row["ID_Cliente"] . "</td>";
                                echo "<td>" . $row["Cantidad"] . "</td>";
                                echo "<td>" . $row["Precio_Unitario_Venta"] . "</td>";
                                echo "<td>" . $row["Fecha_Venta"] . "</td>";
                                if (!isset($_GET['d'])){ ?> <td><h6 class="row"><a href="delete.php?t=3&id=<?php echo $row["ID_Venta"]; ?>" style="text-align:right; color:red; text-decoration:none;">- REMOVER</a></h6></td> <?php
                                ?> <td><h6 class="row"><a href="form.php?t=3&id=<?php echo $row["ID_Venta"]; ?>" style="text-align:right; color:blue; text-decoration:none;">* EDITAR</a></h6></td> <?php
                                echo "</tr>";}
                            }
                        }
                            $conn->close();

                        ?>
                    </tbody>
                </table>