<?php
    class PrestamoModels{

        private $db;
        private $prestamo;

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->prestamo = array();
        }

        public function Insertar($codigoEjemplar, $codigoUsuario, $fechaPres, $fechaDev){
            $resultado = $this->db->query("INSERT INTO prestamo (codigoEjemplar, codigoUsuario, fechaPres, fechaDev) values('$codigoEjemplar', '$codigoUsuario', '$fechaPres', '$fechaDev')");
        }

        public function get_librosPrestados(){
            $sql = "SELECT t1.codigoPrestamo, t1.codigoEjemplar, t4.titulo, t3.localizacion, t1.codigoUsuario, t2.nombre, t2.direccion, t2.telefono, t1.fechaPres, t1.fechaDev
                    FROM prestamo t1, usuario t2, ejemplar t3, libro t4
                    WHERE t1.codigoUsuario = t2.codigoUsuario
                    AND t1.codigoEjemplar = t3.codigoEjemplar
                    AND t3.codigoLibro = t4.codigoLibro
                    ORDER BY 1 ASC";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->prestamo[] = $row;
            }
            return $this->prestamo;
        }

       public function update_ejemplar($codigoEjemplar){
            $sql = "UPDATE  ejemplar SET cantidad = 0 WHERE codigoEjemplar = '".$codigoEjemplar."'" ;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
         /*
        //se agrega la funcion de actualizar
        public function editar_prestamo($cod){
            $sql = "UPDATE FROM prestamo WHERE codigoPrestamo = '".$cod."'";
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }*/
    }

?>