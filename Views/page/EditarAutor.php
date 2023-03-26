<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controllers/AutorController.php");
?>
<div class="centrar">
  <div class="container fondo">
        <h1>Agregar Autor</h1>
        <?php
        $id = $_GET['id'];
        $info = new AutorController("", "", "");
        $data = $info->autor($id);
        foreach ($data["autor"] as $dato) {
        ?>
            <form name="AgregarAutor" method="POST" action="../../Controllers/indexController.php">
                <div class="form-floating mb-3">
                    <input type="text" name="codigo" class="form-control" id="codigo" value="<?php echo  $dato["codigoAutor"]; ?>" readonly="readonly">
                    <label for="codigo">Código Autor</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo  $dato["nombreAutor"]; ?>">
                    <label for="nombre">Nombre</label>
                    <input type="hidden" name="controller" value="autorEditar">
                </div>
                <select name="editorial" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Seleccione editorial</option>
                    <option value="1">Acantilado</option>
                    <option value="2">Aguilar</option>
                    <option value="3">Alfaguara</option>
                </select>
                <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
                <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
            </form>
        <?php } ?>
    </div>
</div>

<?php
include(dirname(__DIR__) . "./layout/footer.php");
?>