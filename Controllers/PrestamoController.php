<?php
require_once(dirname(__DIR__)."./Models/PrestamoModels.php");
require_once(dirname(__DIR__)."./Config/database.php");

    class PrestamoController{

        private $codigoEjemplar;
        private $codigoUsuario;
        private $fechaPres;
        private $fechaDev;
        
        public function __construct($codigoEjemplar, $codigoUsuario, $fechaPres, $fechaDev){
            $this->codigoEjemplar = $codigoEjemplar;
            $this->codigoUsuario = $codigoUsuario; 
            $this->fechaPres = $fechaPres;
            $this->fechaDev = $fechaDev;
            if($codigoUsuario!=""){ //preguntar
                $this->guardar();
            }
           
        }

        // public function index(){
        //     $prestamo = new PrestamoModels();
        //     $data["libro"] = $prestamo->get_Prestamo();
        //     //require_once "../Views/layout/pages/AgregarAutor.php";
        //     return $data;
        // }
        public function prestados(){
            $prestamo = new PrestamoModels();
            $data["prestamo"] = $prestamo->get_librosPrestados();
            return $data;
        }

        public function guardar(){
           // $codautor = $_POST['codigo'];
           // $nomautor = $_POST['nombre'];

            $prestamo = new PrestamoModels();
            $prestamo->insertar ($this->codigoEjemplar, $this->codigoUsuario, $this->fechaPres, $this->fechaDev);
            //require_once "../Views/page/indexAutor.php"; //Funciona $this->paginas
            $this->actualizar($this->codigoEjemplar);
            require_once (dirname(__DIR__)."./Views/index.php");
            //$this->index();
        }

        public function actualizar($codigoEjemplar){
            $prestamo = new PrestamoModels();
            $r = $prestamo->update_ejemplar($codigoEjemplar);
            
        }
        /*
        public function editar($id){
            $libro = new LibroModels();
            $r = $libro->editar_libro($id);
            require_once (dirname(__DIR__)."./Views/page/indexLibro.php");
            //$this->index();
        }*/
    }
?>