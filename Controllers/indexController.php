<?php
require_once("AutorController.php");
require_once("EditorialController.php");
require_once("LibroController.php");
require_once("PrestamoController.php");
require_once("UsuarioController.php");


//autor
    $opcion = $_POST['controller'];
    if($opcion == "autor"){
        $objeto = new AutorController($_POST['codigo'], $_POST['nombre'], $_POST['guardar']);
    }
    if($opcion == "autorEditar"){
        $actualizar = new AutorController("","","");
        $actualizar->editar($_POST['codigo'], $_POST['nombre']);
    }
//editorial
    $opcion = $_POST['controller'];
    if($opcion == "editorial"){
        $objeto = new EditorialController($_POST['codigo'], $_POST['nombre'], $_POST['guardar']);
    }
    if($opcion == "updateeditorial"){
    $objeto = new EditorialController($_POST['codigo'], $_POST['nombre'], "Actualizar");
}
   /* if ($opcion == "editorial"){
        $actualizar = new EditorialController("","","");
        $actualizar->editorial($_POST['codigoEditorial'], $_POST['nombreEditorial']);
    }*/

//libro
    $opcion = $_POST['controller'];
    if($opcion == "libro"){
        $objeto = new LibroController($_POST['codigoLibro'], $_POST['titulo'], $_POST['isbn'], '112', $_POST['paginas'],'COD1', $_POST['localizacion'], $_POST['guardar']);
    }
    if ($opcion == "libroEditar"){
        $actualizar = new LibroController("","","","","","","","");
        $actualizar->editar($_POST['codigoLibro'], $_POST['titulo'], $_POST['isbn'], '112', $_POST['paginas'], 'COD1', $_POST['localizacion']);
    }
    //prestamo
    $opcion = $_POST['controller'];
    if($opcion == "prestamo"){
        $objeto = new PrestamoController($_POST['codigoEjemplar'], $_POST['codigoUsuario'], $_POST['fechaPrestamo'], $_POST['fechaDevolucion'], $_POST['guardar']);
    }
    //Registrar usuario
    $opcion = $_POST['controller'];
    if($opcion == "usuario"){
        $objeto = new UsuarioController($_POST['codigoUsuario'], $_POST['nombre'], $_POST['telefono'], $_POST['direccion'], $_POST['guardar']);
    }
?>