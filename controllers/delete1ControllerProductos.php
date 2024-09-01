<?php
  
    // Tratamiento de los input type='number'    
    $Id_Producto = empty($_GET['Id_Producto']) ? 0 : $_GET['Id_Producto'];
    
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/delete1ModelProductos.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/delete1ModelProductos.php";
        }
        $oData = new Datos;
    // Instancia del objeto
    $sql = "DELETE FROM Productos WHERE Id_Producto = $Id_Producto";

    // Ejecutar la consulta de eliminación
    $resultado = $oData->executeQuery($sql);

    
        

?>
