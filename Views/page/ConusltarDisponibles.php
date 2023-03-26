<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controllers/LibroController.php");
?>
<div class="centrar">
  <div class="container fondo">
    <h1>Libros Disponibles</h1> <br>
    <div class="row">


      <div class="table-responsive-md">
        <table border="" class="table table-dark table-striped-columns table table-hover">
          <thead>
            <tr>
              <td>CODIGO LIBRO</td>
              <td>TITULO</td>
              <td>ISBN</td>
              <td>CODIGO EDITORIAL</td>
              <td>PAGINAS</td>
              <td>CODIGO AUTOR</td>
              <td>LOCALIZACION</td>
            </tr>
            <?php
            //Se consulta libros de acuerdo a la cantidad de ejemplares disponibles
            $info = new LibroController("", "", "", "", "", "", "");
            $data = $info->disponibles();
            foreach ($data["libro"] as $dato) {
            ?>
              <tr>
                <td><?php echo $dato['codigoLibro'] ?></td>
                <td><?php echo $dato['titulo'] ?></td>
                <td><?php echo $dato['isbn'] ?></td>
                <td><?php echo $dato['codigoEditorial'] ?></td>
                <td><?php echo $dato['paginas'] ?></td>
                <td><?php echo $dato['nombreAutor'] ?></td>
                <td><?php echo $dato['localizacion'] ?></td>
              </tr>
            <?php
            }
            ?>

        </table>
      </div>
    </div>
  </div>
  <?php
  include(dirname(__DIR__) . "/layout/footer.php");
  ?>