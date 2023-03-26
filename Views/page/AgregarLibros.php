<?php
require_once(dirname(__DIR__) . "./layout/header.php");
?>
<div class="centrar">
    <div class="container fondo">
        <h1>Agregar libros</h1> <br>
        <div class="row">
            <form name="AgregarLibros" id="AgregarLibros" accept-charset="UTF-8" action="../../Controllers/indexController.php" method="post">
                <ul>
                    <li>
                        <label for="codigoLibro">codigo Libro:</label>
                        <input type="text" id="codigo" name="codigoLibro" value="">
                    </li><br>
                    <li>
                        <label for="titulo">titulo:</label>
                        <input type="text" id="titulo" name="titulo" value="">
                    </li><br>
                    <li>
                        <label for="isbn">ISBN:</label>
                        <input type="text" id="isbn" name="isbn" value="">
                    </li><br>
                    <li>
                        <label for="paginas">paginas:</label>
                        <input type="text" id="paginas" name="paginas" value="">
                    </li><br>
                    <li>
                        <label for="localizacion">Localizacion:</label>
                        <input type="text" id="localizacion" name="localizacion" value="">
                        <input type="hidden" name="controller" value="libro">
                    </li><br>
                    <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                </ul>
            </form>
        </div>
    </div>
</div>
<?php
include(dirname(__DIR__) . "/layout/footer.php");
?>