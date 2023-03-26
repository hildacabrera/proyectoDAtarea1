<?php
require_once(dirname(__DIR__)."./Models/LibroModels.php");
require_once(dirname(__DIR__)."./Config/database.php");

    class LibroController{

        private $codigoLibro;
        private $titulo;
        private $ISBN;
        private $codigoEditorial;
        private $paginas;
        private $codigoAutor;
        private $localizacion;



        public function __construct($codigoLibro, $titulo, $ISBN, $codigoEditorial, $paginas, $codigoAutor, $localizacion ){
            $this->codigoLibro = $codigoLibro;
            $this->titulo = $titulo;
            $this->ISBN = $ISBN;
            $this->codigoEditorial = $codigoEditorial;
            $this->paginas = $paginas;    
            $this->codigoAutor = $codigoAutor;
            $this->localizacion = $localizacion;
            if($codigoLibro!=""){ //preguntar
                $this->guardar();
            }
           
        }

        public function index(){
            $libro = new LibroModels();
            $data["libro"] = $libro->get_libro();
            //require_once "../Views/layout/pages/AgregarAutor.php";
            return $data;
        }

        public function ejemplares(){
            $libro = new LibroModels();
            $data["libro"] = $libro->get_ejemplares();
            //require_once "../Views/layout/pages/AgregarAutor.php";
            return $data;
        }

        public function disponibles(){
            $libro = new LibroModels();
            $data["libro"] = $libro->get_librosDisponibles();
            return $data;
        }

        public function guardar(){
           // $codautor = $_POST['codigo'];
           // $nomautor = $_POST['nombre'];

            $libro = new LibroModels();
            $libro->insertar($this-> codigoLibro, $this->titulo, $this->ISBN, $this->codigoEditorial, $this->paginas, $this->codigoAutor, $this->localizacion);
            //require_once "../Views/page/indexAutor.php"; //Funciona $this->paginas
            require_once (dirname(__DIR__)."./Views/page/indexLibro.php");
            //$this->index();
        }

        public function eliminar($id){
            $libro = new LibroModels();
            //$r = $editorial->delete_editorial($id);
            $r = $libro->delete_libro($id);
            require_once (dirname(__DIR__)."./Views/page/indexLibro.php");
            //$this->index();
        }
        public function libro($codigoLibro){
            $libro = new LibroModels();
            $data["libro"] = $libro->get_infoLibro($codigoLibro);
            //require_once "../Views/layout/pages/AgregarAutor.php";
            return $data;
        }

        public function editar($codigoLibro, $titulo, $isbn, $codigoEditorial, $paginas, $codigoAutor, $localizacion){
            $libro = new LibroModels();
            $r = $libro->editar_libro($codigoLibro, $titulo, $isbn, $codigoEditorial, $paginas, $codigoAutor, $localizacion);
            require_once (dirname(__DIR__)."./Views/page/indexLibro.php");
            //$this->index();
        }
    }
?>