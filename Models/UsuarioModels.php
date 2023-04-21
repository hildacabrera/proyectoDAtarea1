<?php
    class UsuarioModels{

        private $db;
        private $usuario;

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->usuario = array();
        }

        public function Insertar($codigoUsuario, $nombre, $telefono, $direccion){
            $resultado = $this->db->query("INSERT INTO usuario (codigoUsuario, nombre, telefono, direccion) values('$codigoUsuario', '$nombre', '$telefono', ' $direccion')");
        }

    }

?>