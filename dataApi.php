
<?php 

    include "connect.php";

    $sql = "";

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

            $sql = "INSERT INTO ms_compras (ID_Producto, ID_Proveedor, Cantidad, Precio_Unitario_Compra, Fecha_Compra) 
            VALUES ($prod, $prov,$can , $pu, NOW())"; break;

        case 3:
            $prod = $_POST['prod'];
            $prov = $_POST['prov'];
            $can = $_POST['can'];
            $pu = $_POST['pu']; 

            $sql = "INSERT INTO ms_Ventas (ID_Producto, ID_Cliente, Cantidad, Precio_Unitario_Venta, Fecha_Venta) 
            VALUES ($prod, $prov,$can , $pu, NOW())"; break;

        case 4: 
            $nombre = $_POST['nombre'];
            $con = $_POST['con'];
            $dir = $_POST['dir'];
            $tel = $_POST['tel'];

            $sql = "INSERT INTO ctg_Cliente (Nombre, Contacto, Direccion, Telefono) 
            VALUES ('$nombre', '$con', '$dir', '$tel')"; break;  
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