<?php
  
    // Tratamiento de los input type='number'    
    $Id_doc = empty($_GET['Id_doc']) ? 0 : $_GET['Id_doc'];
    
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/delete1ModelVentas.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/delete1ModelVentas.php";
        }
        $oData = new Datos;
    // Instancia del objeto
    $sql = "DELETE FROM Documentos WHERE Id_doc = $Id_doc";

    // Ejecutar la consulta de eliminación
    $resultado = $oData->executeQuery($sql);

    
        

?>
