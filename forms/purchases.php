<?php 
    if (isset($_GET['id'])){  
?>
<form action="dataApi.php?t=2&id=<?php echo $_GET['id'];?>" method="post">
<?php }else {?>
<form action="dataApi.php?t=2" method="post">
<?php }?>
    <div data-mdb-input-init class="form-outline mb-4">
       
    <?php 
        $sql = "SELECT Nombre, ID_Producto from ctg_Producto;";
        $result = $conn->query($sql);
    ?>
    <select id="cars" class="" name="prod" size="1" style="width:50%; margin-bottom:2.5%; padding:2%; ">
        <option>Seleccionar producto</option>
        <?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?> <option class="btn btn-light" value="<?php echo $row["ID_Producto"]?>"><?php echo $row["Nombre"]?></option> <?php  
                }
            }
        ?>
    
    </select>

    <?php 
        $sql2 = "SELECT Nombre, ID_Proveedor from ctg_Proveedor;";
        $result2 = $conn->query($sql2);
    ?>

    <select id="carss" class="" name="prov" size="1" style="width:50%; margin-bottom:2.5%; padding:2%; ">
        <option>Seleccionar Proveedor</option>
        <?php 
            if ($result2->num_rows > 0) {
                // output data of each row
                while($row = $result2->fetch_assoc()) {
                  ?> <option class="btn btn-light" value="<?php echo $row["ID_Proveedor"]?>"><?php echo $row["Nombre"]?></option> <?php  
                }
            }
        ?>
    
    </select>

        <input type="text" id="form2Example11" name="pu" class="form-control" style="margin-bottom:2.5%"
        placeholder="Cantidad de producto" />
    
        <input type="text" id="form2Example11" name="can" class="form-control"
        placeholder="Cantidad de producto" />
    </div>
   
    <div class="text-center pt-1 mb-5 pb-1">
        <input class="btn btn-primary btn-block fa-lg gradient-custom-1 mb-3" type="submit" value="Añadir">
    </div>
</form>