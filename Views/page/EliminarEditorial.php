<?php 
require_once(dirname(__DIR__)."../../Controllers/EditorialController.php");

$id = $_GET['id'];
$delete = new EditorialController("","","");
$delete->eliminar($id);

?>