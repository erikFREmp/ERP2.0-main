<?php
  
    // Tratamiento de los input type='number'    
    $codigo = empty($_GET['codigo']) ? 0 : $_GET['codigo'];
    
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/delete1ModelProveedores.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/delete1ModelProveedores.php";
        }
        $oData = new Datos;
    // Instancia del objeto
    $sql = "DELETE FROM Proveedores_Clientes WHERE codigo = $codigo";

    // Ejecutar la consulta de eliminación
    $resultado = $oData->executeQuery($sql);

    
        

?>
