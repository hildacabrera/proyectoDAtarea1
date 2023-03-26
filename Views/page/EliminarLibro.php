<?php 
require_once(dirname(__DIR__)."../../Controllers/LibroController.php");

$id = $_GET['id'];
$delete = new LibroController("","","","","","","");
$delete->eliminar($id);

?>