<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controllers/LibroController.php");
?>

<h2>Pagina de Libro</h2>

<a href="/Views/page/AgregarLibros.php" class="btn btn-primary">Agregar Libro</a>

<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código libro</th>
                <th>Titulo</th>
                <th>ISBN</th>
                <th>paginas</th>
                <th>Localizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new LibroController("", "", "", "", "","","");
            $data = $info->index();
            foreach ($data["libro"] as $dato) {
                echo "<tr>";
                echo "<th>" . $dato["codigoLibro"] . "</th>";
                echo "<th>" . $dato["titulo"] . "</th>";
                echo "<th>" . $dato["isbn"] . "</th>";
                echo "<th>" . $dato["paginas"] . "</th>";
                echo "<th>" . $dato["localizacion"] . "</th>";
                echo "<th><a href='/Views/page/EditarLibro.php?id=" . $dato["codigoLibro"] . "'>Editar</a></th>";
                echo "<th><a href='/Views/page/EliminarLibro.php?id=" . $dato["codigoLibro"] . "'>Borrar</a></th>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include(dirname(__DIR__) . "./layout/footer.php");
?>