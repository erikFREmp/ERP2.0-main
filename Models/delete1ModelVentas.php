<?php
    
    class Datos
    {
        private $mysqli;

        public function __construct()
        {
            $this->mysqli = Connection::conn1();
        }
        
        // Ejecuta una consulta que no devuelve resultados (DELETE, UPDATE, etc.)
        public function executeQuery($sql)
        {
            if (!$this->mysqli->query($sql))
            {
                echo "La operación no se ha podido realizar.";
                // Si deseas obtener más detalles sobre el error, puedes descomentar estas líneas
                // echo "Detalle del error en la consulta (executeQuery) - ";
                // echo "Número de error: " . $this->mysqli->errno . " - ";
                // echo "Descripción del error: " . $this->mysqli->error;
                return false; // Indica que la operación falló
            }
            else
            {
                $this->mysqli->close();
                return true; // Indica que la operación se realizó correctamente
            }
        }
    }
?>