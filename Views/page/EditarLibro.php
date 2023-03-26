<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controllers/LibroController.php");
?>
<div class="centrar">
    <div class="container fondo">
        <h1>Agregar libros</h1> <br>
        <?php
        $id = $_GET['id'];
        $info = new LibroController("", "", "","","","","","");
        $data = $info->libro($id);
        foreach ($data["libro"] as $dato) {
        ?>
        <div class="row">
            <form name="AgregarLibros" id="AgregarLibros" accept-charset="UTF-8" action="../../Controllers/indexController.php" method="post">
                <ul>
                    <li>
                        <label for="codigoLibro">codigo Libro:</label>
                        <input type="text" id="codigo" name="codigoLibro" value="<?php echo  $dato["codigoLibro"]; ?>" readonly="readonly" maxlength="15">
                    </li><br>
                    <li>
                        <label for="titulo">titulo:</label>
                        <input type="text" id="titulo" name="titulo" value="<?php echo  $dato["titulo"]; ?>" maxlength="100">
                    </li><br>
                    <li>
                        <label for="isbn">ISBN:</label>
                        <input type="text" id="isbn" name="isbn" value="<?php echo  $dato["isbn"]; ?>" maxlength="50">
                    </li><br>
                    <li>
                        <label for="paginas">paginas:</label>
                        <input type="text" id="paginas" name="paginas" value="<?php echo  $dato["paginas"]; ?>" maxlength="4">
                    </li><br>
                    <li>
                        <label for="localizacion">Localizacion:</label>
                        <input type="text" id="localizacion" name="localizacion" value="<?php echo  $dato["localizacion"]; ?>" maxlength="15">
                        <input type="hidden" name="controller" value="libroEditar">
                    </li><br>
                    <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                </ul>
            </form>
        </div>
        <?php } ?>
        
    </div>
</div>
<?php
include(dirname(__DIR__) . "/layout/footer.php");
?>