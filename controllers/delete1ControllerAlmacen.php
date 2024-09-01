<?php
  
    // Tratamiento de los input type='number'    
    $Id_Almacen = empty($_GET['Id_Almacen']) ? 0 : $_GET['Id_Almacen'];
    
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/delete1ModelAlmacen.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/delete1ModelAlmacen.php";
        }
        $oData = new Datos;
    // Instancia del objeto
    $sql = "DELETE FROM Almacen WHERE Id_Almacen = $Id_Almacen";

    // Ejecutar la consulta de eliminación
    $resultado = $oData->executeQuery($sql);

    
        

?>
