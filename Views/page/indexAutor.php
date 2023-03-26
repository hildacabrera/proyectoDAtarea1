<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controllers/AutorController.php");
?>

<h2>Pagina de Autor</h2>

<a href="/Views/page/AgregarAutor.php" class="btn btn-primary">Agregar Autor</a>

<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Autor</th>
                <th>Nombre Autor</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new AutorController("", "", "");
            $data = $info->index();
            foreach ($data["autor"] as $dato) {
                echo "<tr>";
                echo "<th>" . $dato["codigoAutor"] . "</th>";
                echo "<th>" . $dato["nombreAutor"] . "</th>";
                echo "<th><a href='/Views/page/EditarAutor.php?id=" . $dato["codigoAutor"] . "'>Editar</a></th>";
                echo "<th><a href='/Views/page/EliminarAutor.php?id=" . $dato["codigoAutor"] . "'>Borrar</a></th>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include(dirname(__DIR__) . "./layout/footer.php");
?>