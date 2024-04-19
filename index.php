<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnoldelicias - Fresas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>
<body>

    <?php 
    include "header.html";
    include "connect.php";
    ?>

    <section class="intro">
    <div class="gradient-custom-1 h-100">
        <div class="mask d-flex align-items-center h-50">
        <div class="container">
        <h2>
            <?php 
                $table=0;

                if (isset($_GET['t'])){
                    $table = $_GET['t'];     
                }

                switch ($table){
                    case 0: 
                        echo "Productos";
                        break;
                    case 1:   
                        echo "Proveedores";
                        break;
                    case 2:   
                        echo "Compras";
                        break;
                    case 3:   
                        echo "Ventas";
                        break;
                    case 4:   
                        echo "Clientes";
                        break;              
                }
            ?>
        </h2>
            <div class="row justify-content-center">
            <h4 class="row"><a href="form.php?t=<?php echo $table?>" style="text-align:right; color:green; text-decoration:none;">+ ADD</a></h4>
            <div class="col-12">
            
                <div class="table-responsive bg-white shadow">
                    <?php 
                        switch ($table){
                            case 0: 
                                include "tables/products.php";
                                break;
                            case 1:   
                                include "tables/suppliers.php";
                                break;
                            case 2:   
                                include "tables/purchases.php";
                                break;
                            case 3:   
                                include "tables/sales.php";
                                break;
                            case 4:   
                                include "tables/clients.php";
                                break;              
                        }
                    ?>
                </div>
            </div>
            </div>
            <h4 class="row"><a href="form.php?t=0" style="text-align:right; color:red; text-decoration:none;">- REMOVE</a></h4>
        </div>
        </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>