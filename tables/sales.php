<table class="table mb-0">
                    
                    <?php 
                        if (!isset($date)){
                            $sql = "SELECT * FROM ms_Ventas";
                        }else{
                            $d = new DateTime ($date);
                            $formatted_date = $d->format('d-m-Y');
                            $d = "".$formatted_date;
                            $sql = "SELECT * FROM ms_Ventas WHERE Fecha_Venta = '$formatted_date'";
                        }
                        
                        $result = $conn->query($sql); 
                    ?>

                    <thead>
                    <tr>
                        <?php ?>
                        <th scope="col">ID</th>
                        <th scope="col">ID producto</th>
                        <th scope="col">Nombre del producto</th>
                        <th scope="col">ID cliente</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio unitario</th>
                        <th scope="col">Total</th>
                        <th scope="col">Referencia contable</th>
                        <th scope="col">Fecha de venta</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $idProd = $row["ID_Producto"];
                                $idClient = $row["ID_Cliente"];
                                $sql = "SELECT Nombre , Precio_Unitario FROM ctg_Producto WHERE ID_Producto = $idProd";
                                $res = $conn->query($sql); 

                                $name = "";
                                $price = 0;
                                while($row2 = $res->fetch_assoc()) {

                                    $name = $row2["Nombre"];
                                    $price = $row2["Precio_Unitario"];
                                }

                                $sql2 = "SELECT Nombre FROM ctg_Cliente WHERE ID_Cliente = $idClient";
                                $res2 = $conn->query($sql2); 

                                $clientName = "";
                               
                                    while($row3 = $res2->fetch_assoc()) {

                                        $clientName = $row3["Nombre"]; 
                                    }
                                
                               
                                echo "<tr>";
                                echo "<td>" . $row["ID_Venta"] . "</td>";
                                echo "<td>" . $row["ID_Producto"] . "</td>";
                                echo "<td>" . $name . "</td>";
                                echo "<td>" . $row["ID_Cliente"]. "</td>";
                                echo "<td>" . $clientName . "</td>";
                                echo "<td>" . $row["Cantidad"] . "</td>";
                                echo "<td>" . $price. "</td>";
                                echo "<td>" .$row["Cantidad"]  * $price . "</td>";
                                echo "<td>" .$row["Referencia_Contable"] . "</td>";
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