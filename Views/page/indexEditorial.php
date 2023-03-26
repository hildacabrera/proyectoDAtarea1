<?php
    require_once(dirname(__DIR__)."./layout/header.php");
    require_once(dirname(__DIR__)."../../Controllers/EditorialController.php");
?>
<h2>Página de Editoriales</h2>
<a href="AgregarEditorial.php" class="btn btn-primary">Agregar Editorial</a>
<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Editorial</th>
                <th>Nombre Editorial</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new EditorialController("","","");
            $data = $info->index();
            foreach($data["editoriales"] as $dato){
                echo "<tr>";
                    echo "<th>".$dato["codigoEditorial"]."</th>";
                    echo "<th>".$dato["nombreEditorial"]."</th>";
                    echo "<th>Editar</th>";
                    echo "<th><a href='EliminarEditorial.php?id=".$dato["codigoEditorial"]."'>Borrar</a></th>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php
    include(dirname(__DIR__)."./layout/footer.php");
?>