<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controllers/PrestamoController.php");
?>
<div class="centrar">
  <div class="container fondo">
    <h1>Libros Prestados</h1> <br>
    <div class="row">


      <div class="table-responsive-md">
        <table border="" class="table table-dark table-striped-columns table table-hover">
          <thead>
            <tr>
              <td>CODIGO PRESTAMO</td>
              <td>CODIGO EJEMPLAR</td>
              <td>TITULO</td>
              <td>LOCALIZACION</td>
              <td>CODIGO USUARIO</td>
              <td>NOMBRE</td>
              <td>DIRECCION</td>
              <td>TELEFONO</td>
              <td>FECHA PRESTAMO</td>
              <td>FECHA DEVOLUCION</td>
            </tr>
            <?php
            //Se consulta libros de acuerdo a la cantidad de ejemplares disponibles
            $info = new PrestamoController("", "", "", "", "");
            $data = $info->prestados();
            foreach ($data["prestamo"] as $dato) {
            ?>
              <tr>
                <td><?php echo $dato['codigoPrestamo'] ?></td>
                <td><?php echo $dato['codigoEjemplar'] ?></td>
                <td><?php echo $dato['titulo'] ?></td>
                <td><?php echo $dato['localizacion'] ?></td>
                <td><?php echo $dato['codigoUsuario'] ?></td>
                <td><?php echo $dato['nombre'] ?></td>
                <td><?php echo $dato['direccion'] ?></td>
                <td><?php echo $dato['telefono'] ?></td>
                <td><?php echo $dato['fechaPres'] ?></td>
                <td><?php echo $dato['fechaDev'] ?></td>
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