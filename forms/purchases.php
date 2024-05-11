<?php 
    if (isset($_GET['id'])){  
?>
<form action="dataApi.php?t=2&id=<?php echo $_GET['id'];?>" method="post">
<?php }else {?>
<form action="dataApi.php?t=2" method="post">
<?php }?>
    <div data-mdb-input-init class="form-outline mb-4">
       
        <input type="text" id="form2Example11" name="prod" class="form-control"
        placeholder="ID producto" />
        <p></p>
        <input type="text" id="form2Example11" name="prov" class="form-control"
        placeholder="ID proveedor"/>
        <p></p>

        <input type="text" id="form2Example11" name="can" class="form-control"
        placeholder="Cantidad" />
        <p></p>
    </div>
   
    <div class="text-center pt-1 mb-5 pb-1">
        <input class="btn btn-primary btn-block fa-lg gradient-custom-1 mb-3" type="submit" value="Añadir">
    </div>
</form>