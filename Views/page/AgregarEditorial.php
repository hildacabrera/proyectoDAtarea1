
<?php
    require_once(dirname(__DIR__)."./layout/header.php");  
?>

<div class="centrar">
    <div class="container fondo">
        <h1>Agregar Editorial</h1>
        
        <form name="AgregarEditorial" id="AgregarEditorial"  method="POST" action="../../Controllers/indexController.php">
        
                    <div class="form-floating mb-3">
        
                        <input type="text" name="codigo" class="form-control" id="codigo" required="required">
        
                        <label for="codigo">Código Editorial</label>
        
                    </div>
        
                    <div class="form-floating mb-3">
        
                        <input type="text" name="nombre" class="form-control" id="nombre" required="required">
        
                        <label for="nombre">Nombre Editorial</label>
        
                        <input type="hidden" name="controller" value="editorial">
        
                    </div>
        
                    <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
        
                    <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
        
                </form>
    </div>
</div>
<?php
 include(dirname(__DIR__)."./layout/footer.php");
?>