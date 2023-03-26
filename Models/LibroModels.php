<?php
    class LibroModels{

        private $db;
        private $libro;

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->libro = array();
        }

        public function Insertar($codigoLibro, $titulo, $ISBN, $codigoEditorial, $paginas, $codigoAutor, $localizacion){
            $resultado = $this->db->query("INSERT INTO libro (codigoLibro, titulo, ISBN, codigoEditorial, paginas, codigoAutor, localizacion) values('$codigoLibro', '$titulo', '$ISBN', '112', '$paginas','COD1', '$localizacion')");
        }

        public function get_libro(){
            $sql = "SELECT * FROM libro";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->libro[] = $row;
            }
            return $this->libro;
        }

        public function get_ejemplares(){
            $sql = "SELECT t1.codigoEjemplar, t1.localizacion, t1.codigoLibro, t2.titulo 
                    FROM ejemplar t1, libro t2 WHERE t1.codigoLibro = t2.codigoLibro
                    AND t1.cantidad > 0
                    ORDER BY 4 ASC";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->libro[] = $row;
            }
            return $this->libro;
        }

        public function get_librosDisponibles(){
            $sql = "SELECT t2.codigoLibro, t2.titulo, t2.isbn, t2.codigoEditorial, t2.paginas, t2.codigoAutor, t3.nombreAutor, t1.localizacion, t1.cantidad
                    FROM ejemplar t1, libro t2, autor t3
                    WHERE t1.codigoLibro = t2.codigoLibro
                    AND t2.codigoAutor = t3.codigoAutor
                    AND t1.cantidad > 0
                    ORDER BY 1 ASC";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->libro[] = $row;
            }
            return $this->libro;
        }

        public function get_infoLibro($codigoLibro){
            $sql = "SELECT * FROM libro WHERE codigoLibro = '".$codigoLibro."'";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->libro[] = $row;
            }
            return $this->libro;
        }


        public function delete_libro($cod){
            $sql = "DELETE FROM libro WHERE codigoLibro = '".$cod."'" ;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
        //se agrega la funcion de actualizar
        public function editar_libro($codigoLibro, $titulo, $isbn, $codigoEditorial, $paginas, $codigoAutor, $localizacion){
            $sql = "UPDATE libro SET titulo = '".$titulo."', isbn = '".$isbn."', codigoEditorial = '".$codigoEditorial."', paginas = '".$paginas."', codigoAutor = '".$codigoAutor."', localizacion = '".$localizacion."'
                    WHERE codigoLibro = '".$codigoLibro."'";
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

?>