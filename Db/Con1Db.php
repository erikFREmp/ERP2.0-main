<?php
class Connection
{
    public static function conn1()
    {
        

        $mysqli = new mysqli('localhost','naim','madrid','tienda');

        if($mysqli->connect_errno)
        {
            printf("Error en la conexion: %s\n", $mysqli->connect_errno);
        }
        else
        {
            $mysqli->set_charset("utf8");
            return $mysqli;
        }
    }
}
?>