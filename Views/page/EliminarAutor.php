<?php 
require_once(dirname(__DIR__)."../../Controllers/AutorController.php");

$id = $_GET['id'];
$delete = new AutorController("","","");
$delete->eliminar($id);

?>