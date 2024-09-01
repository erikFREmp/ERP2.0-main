<?php
  
    // Tratamiento de los input type='number'    
    $Id_Cliente = empty($_GET['Id_Cliente']) ? 0 : $_GET['Id_Cliente'];
    
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/delete1ModelClientes.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/delete1ModelClientes.php";
        }
        $oData = new Datos;
    // Instancia del objeto
    $sql = "DELETE FROM Clientes WHERE Id_Cliente = $Id_Cliente";

    // Ejecutar la consulta de eliminación
    $resultado = $oData->executeQuery($sql);

    
        

?>
