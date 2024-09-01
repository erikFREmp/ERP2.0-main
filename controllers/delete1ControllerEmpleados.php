<?php
  
    // Tratamiento de los input type='number'    
    $Id_Empleado = empty($_GET['Id_Empleado']) ? 0 : $_GET['Id_Empleado'];
    
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/delete1ModelEmpleados.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/delete1ModelEmpleados.php";
        }
        $oData = new Datos;
    // Instancia del objeto
    $sql = "DELETE FROM Empleados WHERE Id_Empleado = $Id_Empleado";

    // Ejecutar la consulta de eliminación
    $resultado = $oData->executeQuery($sql);

    
        

?>
