
<?php 

    include "connect.php";

    $sql = "";

    switch($_GET['t']){

        case 0 : 
            $id = $_GET['id'];
            $sql = "DELETE FROM ctg_Producto WHERE ID_Producto = $id"; 
            break;
        case 1 : 
            $id = $_GET['id'];
            $sql = "DELETE FROM ctg_Proveedor WHERE ID_Proveedor = $id"; 
            break;
        case 2 : 
            $id = $_GET['id'];
            $sql = "DELETE FROM ms_Compras WHERE ID_Compra = $id"; 
            break;
        case 3 : 
            $id = $_GET['id'];
            $sql = "DELETE FROM ms_Ventas WHERE ID_Venta = $id"; 
            break;
        case 4 : 
            $id = $_GET['id'];
            $sql = "DELETE FROM ctg_Cliente WHERE ID_Cliente = $id"; 
            break;                
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