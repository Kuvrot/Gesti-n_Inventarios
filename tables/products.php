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
                            $flag = 0;
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID_Producto"] . "</td>";
                                echo "<td>" . $row["Nombre"] . "</td>";
                                echo "<td>" . $row["Descripcion"] . "</td>";
                                if ($row["Stock_Disponible"] <= $row["Stock_Minimo"]){
                                    $flag++; ?>  <?php
                                }
                                echo "<td>" . $row["Precio_Unitario"] . "</td>";
                                echo "<td>" . $row["Stock_Disponible"] . "</td>";
                                echo "<td>" . $row["Stock_Minimo"] . "</td>";
                                if (!isset($_GET['d'])){?> <td><h6 class="row"><a href="delete.php?t=0&id=<?php echo $row["ID_Producto"]; ?>" style="text-align:right; color:red; text-decoration:none;">- REMOVER</a></h6></td> <?php
                                ?> <td><h6 class="row"><a href="form.php?t=0&id=<?php echo $row["ID_Producto"]; ?>" style="text-align:right; color:blue; text-decoration:none;">* EDITAR</a></h6></td> <?php
                                echo "</tr>";}
                            }
                        }
                            $conn->close();

                            if ($flag > 0){
                                echo "<script>alert('Hay productos con stock por debajo del mínimo');</script>";
                            }

                        ?>
                    </tbody>
                </table>