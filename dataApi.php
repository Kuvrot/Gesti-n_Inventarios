
<?php 

    include "connect.php";

    $sql = "";

    if (isset($_GET['id'])){
        
        $id = $_GET['id'];

        switch($_GET['t']){

            case 0 : 
                $nombre = $_POST['nombre'];
                $desc = $_POST['desc'];
                $pu = $_POST['pu'];
                $sd = $_POST['sd'];
                $sm = $_POST['sm'];
            
            $sql = "UPDATE ctg_Producto SET Nombre = '$nombre', Descripcion = '$desc', Precio_Unitario = $pu, Stock_Disponible = $sd, Stock_Minimo = $sm WHERE ID_Producto = $id;";
            break;
            
            case 1: 
            $nombre = $_POST['nombre'];
            $con = $_POST['con'];
            $dir = $_POST['dir'];
            $tel = $_POST['tel'];
    
            $sql = "UPDATE ctg_Proveedor SET Nombre = '$nombre', Contacto = '$con', Direccion = '$dir', Telefono = '$tel' WHERE ID_Proveedor = $id "; break;
    
            case 2:
                $prod = $_POST['prod'];
                $prov = $_POST['prov'];
                $can = $_POST['can'];
                $pu = $_POST['pu']; 
    
                $sql = "UPDATE ms_Compras SET ID_Producto = $prod, ID_Proveedor = $prov, Cantidad = $can, Precio_Unitario_Compra = $pu WHERE ID_Compra = $id";
                break;
    
            case 3:
                $prod = $_POST['prod'];
                $prov = $_POST['prov'];
                $can = $_POST['can'];
                //$pu = $_POST['pu']; 
    
                $sql = "UPDATE ms_Ventas SET ID_Producto = $prod, ID_Cliente = $prov, Cantidad = $can, Precio_Unitario_Venta = (SELECT Precio_Unitario FROM ctg_Producto WHERE ms_Ventas.ID_Producto = ctg_Producto.ID_Producto) WHERE ID_Venta = $id";
                 break;
    
            case 4: 
                $nombre = $_POST['nombre'];
                $con = $_POST['con'];
                $dir = $_POST['dir'];
                $tel = $_POST['tel'];
    
                $sql = "UPDATE ctg_Cliente SET Nombre = '$nombre', Contacto = '$con', Direccion = '$dir', Telefono = '$tel' WHERE ID_Cliente = $id";
                break;
        }  

    }else{
        switch($_GET['t']){

            case 0 : 
                $nombre = $_POST['nombre'];
                $desc = $_POST['desc'];
                $pu = $_POST['pu'];
                $sd = $_POST['sd'];
                $sm = $_POST['sm'];
            
            $sql = "INSERT INTO ctg_Producto (Nombre, Descripcion, Precio_Unitario, Stock_Disponible, Stock_Minimo)
            VALUES ('$nombre', '$desc', $pu, $sd, $sm)"; break;
            
            case 1: 
            $nombre = $_POST['nombre'];
            $con = $_POST['con'];
            $dir = $_POST['dir'];
            $tel = $_POST['tel'];
    
            $sql = "INSERT INTO ctg_Proveedor (Nombre, Contacto, Direccion, Telefono) 
            VALUES ('$nombre', '$con', '$dir', '$tel')"; break;
    
            case 2:
                $prod = $_POST['prod'];
                $prov = $_POST['prov'];
                $can = $_POST['can'];
                $pu = $_POST['pu']; 
                $date = date("d-m-Y");
                $sql = "INSERT INTO ms_Compras (ID_Producto, ID_Proveedor, Cantidad, Precio_Unitario_Compra, Fecha_Compra) 
                VALUES ($prod, $prov,$can , $pu, '$date')"; break;
    
            case 3:
                $prod = $_POST['prod'];
                $prov = $_POST['prov'];
                $can = $_POST['can'];
                //$pu = $_POST['pu']; 
                $date = date("d-m-Y");
                $sql = "INSERT INTO ms_Ventas (ID_Producto,ID_Cliente, Cantidad, Fecha_Venta) 
                VALUES ($prod, $prov,$can , '$date')"; break;
    
            case 4: 
                $nombre = $_POST['nombre'];
                $con = $_POST['con'];
                $dir = $_POST['dir'];
                $tel = $_POST['tel'];
    
                $sql = "INSERT INTO ctg_Cliente (Nombre, Contacto, Direccion, Telefono) 
                VALUES ('$nombre', '$con', '$dir', '$tel')"; break;  
        }  
    }

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>

<html>
    <body>
        <script>
           window.location.replace("index.php?t=<?php echo $_GET['t']; ?>");
        </script>
    </body>
</html>