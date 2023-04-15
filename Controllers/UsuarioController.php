<?php
require_once(dirname(__DIR__)."./Models/UsuarioModels.php");
require_once(dirname(__DIR__)."./Config/database.php");

    class UsuarioController{

        private $codigoUsuario;
        private $nombre;
        private $telefono;
        private $direccion;


        public function __construct($codigoUsuario, $nombre, $telefono, $direccion){
            $this->codigoUsuario = $codigoUsuario;
            $this->nombre = $nombre;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
            if($codigoUsuario!=""){
                $this->guardar();
            }
           
        }

        public function guardar(){
           // $codautor = $_POST['codigo'];
           // $nomautor = $_POST['nombre'];

            $usuario = new UsuarioModels();
            $usuario->insertar($this->codigoUsuario, $this->nombre, $this->telefono, $this->direccion);
            //require_once "../Views/page/indexAutor.php"; //Funciona
            require_once (dirname(__DIR__)."./Views/index.php");
            //$this->index();
        }
        
    }
?>