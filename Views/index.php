<?php
require_once(dirname(__DIR__) . "./Views/layout/header.php");
?>
<div class="centrar">
    <div class="container fondo">
        <h1>Catálogo de biblioteca</h1>
        <div class="row">
            <div id="rojo" class="col-12">
                <ul>
                    <li><a href="/Views/page/AgregarLibros.php">Agregar Libros</a></li>
                    <li><a href="/Views/page/AgregarEditorial.php">Agregar Editorial</a></li>
                    <li><a href="/Views/page/AgregarAutor.php">Agregar Autor</a></li>
                    <li><a href="/Views/page/PrestarLibros.php">Prestar libros</a></li>
                    <li><a href="/Views/page/ConsultarLibros.php">Consultar libros prestados</a></li>
                    <li><a href="/Views/page/ConusltarDisponibles.php">Consultar libros disponibles</a></li>                    
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
include(dirname(__DIR__) . "./Views/layout/footer.php");
?>