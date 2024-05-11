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
        <div class="container" style="margin-top:10%;">
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
                <div class="container">
                    <a class="btn btn-light shadow" href="printReport.php?t=<?php echo $table?>&d=0" target="_blank">
                        Print <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                        </svg>
                    </a>
                </div>
            
            <div class="row justify-content-center">
            <h4 class="row"><a href="form.php?t=<?php echo $table?>" style="text-align:right; color:green; text-decoration:none;">+ AÑADIR</a></h4>
            <div class="col-12">
            
                <div id="content" class="table-responsive bg-white shadow" >
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
        </div>
        </div>
    </div>
    </section>
    <footer style="background-color: #ffe7e7;" class=" text-center text-lg-start shadow-lg sticky-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
  PROYECTO_ACADEMICO-NEGOCIOSEII-TECNMCAMPUSPAC
  </div>
  <!-- Copyright -->
</footer>
    <script>
        function print (){
            var divContents = document.getElementById("content").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body > <h1>Div contents are <br>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>