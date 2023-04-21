<?php
    require_once(dirname(__DIR__)."./layout/header.php"); 
?>
<div class="centrar">
    <div class="container fondo">
        <h1>Registar Usuario</h1>
        <form name="RegistrarUsuario" method="POST" action="../../Controllers/indexController.php">
                    <div class="form-floating mb-3"> 
                        <input type="text" name="codigoUsuario" class="form-control" id="codigoUsuario" required="required">
                        <label for="codigoUsuario">Código Usuario</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="nombre" class="form-control" id="nombre" required="required">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="telefono" class="form-control" id="telefono" required="required">
                        <label for="telefono">Telefono</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="direccion" class="form-control" id="direccion" required="required">
                        <label for="direccion">Dirección</label>
                        <input type="hidden" name="controller" value="usuario">
                    </div>       
                    <button type="submit" name="guardar" class="btn btn-outline-primary">Registrar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                </form>
    </div>
</div>

<?php
    include(dirname(__DIR__)."./layout/footer.php");
?>