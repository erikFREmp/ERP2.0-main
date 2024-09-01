<?php

class Datos
{
    private $mysqli;
    private $data;

    public function __construct()
    {
        // Crear la conexión al momento de la instancia
        $this->mysqli = Connection::conn1();
        $this->data = array();
    }

    // Método para obtener la conexión
    public function getConexion()
    {
        return $this->mysqli;
    }

    // Método para ejecutar una consulta y obtener los resultados
    public function setGetData1($sql)
    {
        // Ejecutar la consulta
        $result = $this->mysqli->query($sql);

        // Verificar si la consulta fue exitosa
        if (!$result) {
            // Manejar errores de consulta
            echo "Error en la consulta: " . $this->mysqli->error;
            return false;
        }

        // Obtener los resultados
        $this->data = $result->fetch_all(MYSQLI_ASSOC);

        // Liberar el resultado y cerrar la conexión
        $result->free();
        $this->mysqli->close();

        return $this->data;
    }
}

?>