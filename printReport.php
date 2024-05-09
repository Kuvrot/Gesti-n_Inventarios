<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printing...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a{
            color:white;
        }
    </style>
</head>
<body>

    <?php 
        include "connect.php";
        $table = 0;
        if (isset($_GET['t'])){
            $table = $_GET['t'];
        }

        switch ($table){
            case 0: 
                if (!isset($_GET['id']))
                    echo "<p> Productos </p>";
                include "tables/products.php";
                break;
            case 1:   
                if (!isset($_GET['id']))
                echo " <p> Proveedores </p>";
                include "tables/suppliers.php";
                break;
            case 2:  
                if (!isset($_GET['id'])) 
                echo "<p> Compras</p>";
                include "tables/purchases.php";
                break;
            case 3:  
                if (!isset($_GET['id'])) 
                echo "<p> Ventas </p>";
                include "tables/sales.php";
                break;
            case 4:   
                if (!isset($_GET['id']))
                echo "<p> Clientes </p>";
                include "tables/clients.php";
                break;              
        }

    ?>
    <script>

    window.print();

    setTimeout(() => {
        window.close();
    }, 500);

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>