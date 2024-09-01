<?php

    class Datos
    {

        private $mysqli;
        private $data;

        public function __construct()
        {
            $this->mysqli=Connection::conn1();
            $this->data=array();
        }

        // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
        public function setDataPreparedStatements1($sql, $par1, $par2, $par3, $par4,$par5,$par7,$par8, $par9)
        {
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param("siissisi", $par1, $par2, $par3, $par4,$par5,$par7,$par8, $par9); 

            if(!$stmt->execute())
            {
                $result = "La opereción no se ha podido realizar.";
                console.log("Detalle del error en la consulta (setDataPreparedStatements1) - ");
                echo "Numero del error: " . $this->mysqli->errno . " - ";
                echo "Descripcion del error: " . $this->mysqli->error;              
            }
            else {
                $success = "Operación realizada con éxito.";
            }
        
            $this->mysqli->close();
        }
        
        
            
    }
        

?>