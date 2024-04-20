<?php 
    if (isset($_GET['id'])){  
?>
<form action="dataApi.php?t=4&id=<?php echo $_GET['id'];?>" method="post">
<?php }else {?>
<form action="dataApi.php?t=4" method="post">
<?php }?>
    <div data-mdb-input-init class="form-outline mb-4">
       
        <input type="text" id="form2Example11" name="nombre" class="form-control"
        placeholder="Nombre" />
        <p></p>
        <input type="text" id="form2Example11" name="con" class="form-control"
        placeholder="Contacto"/>
        <p></p>

        <input type="text" id="form2Example11" name="dir" class="form-control"
        placeholder="Dirección" />
        <p></p>
        <input type="text" id="form2Example11" name="tel" class="form-control"
        placeholder="Teléfono" />
        <p></p>
        <p></p>
    </div>
   
    <div class="text-center pt-1 mb-5 pb-1">
        <input class="btn btn-primary btn-block fa-lg gradient-custom-1 mb-3" type="submit" value="Añadir">
    </div>
</form>