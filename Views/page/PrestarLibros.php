<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controllers/LibroController.php");
?>
<div class="centrar">
    <div class="container fondo">
        <h1>Prestar libros</h1> <br>
        <div class="row">
            <form name="PrestarLibros" id="PrestarLibros" accept-charset="UTF-8" action="../../Controllers/indexController.php" method="post">
                <ul>
                    <li>
                        <label for="codigoEjemplar">Libro - Localización:</label>
                        <select name="codigoEjemplar" id="codigoEjemplar" required="required">
                            <option value="" selected="selected" disabled="disabled">--- Seleccionar ---</option>
                            <?php
                            $info = new LibroController("", "", "", "", "","","");
                            $data = $info->ejemplares();
                            foreach ($data["libro"] as $dato) {
                                echo '<option value="'. $dato["codigoEjemplar"] .'" > '. $dato["titulo"] .' - '.$dato["localizacion"].' </option>';
                            }
                            ?>
                        </select>
                    </li><br>
                    <li>
                        <label for="codigoUsuario">Codigo usuario:</label>
                        <input type="text" id="codigoUsuario" name="codigoUsuario" value="" required="required">
                    </li><br>
                    <li>
                        <label for="fechaPrestamo">Fecha Prestamo:</label>
                        <input type="date" id="fechaPrestamo" name="fechaPrestamo" value="" required="required">
                    </li><br>
                    <li>
                        <label for="fechaDevolucion">Fecha devolucion:</label>
                        <input type="date" id="fechaDevolucion" name="fechaDevolucion" value="" required="required">
                        <input type="hidden" name="controller" value="prestamo">
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