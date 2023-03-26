<?php
require_once(dirname(__DIR__) . "./layout/header.php");
?>
<div class="centrar">
    <div class="container fondo">
        <h1>Servicios</h1>
        <div class="row">
            <div id="rojo" class="col-12">
                <ul>
                    <p>Servicios
                        En esta sección encontrarás todos los servicios disponibles tanto virtuales como presenciales. Una parte importante de nuestra misión es recuperar y difundir el patrimonio bibliográfico y documental del país en cualquier soporte; por lo tanto, facilitamos el acceso y la difusión de nuestras colecciones a través de orientación y asesoría personalizada.</p>
                    <div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Elige el servicio</option>
                            <option value="1">Profesionales del Libro</option>
                            <option value="2">Servicios Virtuales</option>
                            <option value="3">En la BNC</option>
                            <option value="3">En la RNBP </option>
                        </select>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
include(dirname(__DIR__) . "./layout/footer.php");
?>