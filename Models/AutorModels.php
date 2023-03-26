<?php
    class AutorModels{

        private $db;
        private $autor;

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->autor = array();
        }

        public function Insertar($codigo, $nombre){
            $resultado = $this->db->query("INSERT INTO autor (codigoAutor, nombreAutor, codigoEditorial) values('$codigo', '$nombre', '112')");
        }

        public function get_autores(){
            $sql = "SELECT * FROM autor";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->autor[] = $row;
            }
            return $this->autor;
        }
        public function get_infoAutor($codigoAutor){
            $sql = "SELECT * FROM autor WHERE codigoAutor = '".$codigoAutor."'";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->autor[] = $row;
            }
            return $this->autor;
        }

        public function delete_autor($cod){
            $sql = "DELETE FROM autor WHERE codigoAutor = '".$cod."'";
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
        //se agrega la funcion de actualizar
        public function editar_autor($codigoAutor, $nombre){
            $sql = "UPDATE autor SET nombreAutor = '".$nombre."' WHERE codigoAutor = '".$codigoAutor."'";
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

?>