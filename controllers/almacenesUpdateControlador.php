<?php
 
    $Id_Almacen_edit = empty($_POST['Id_Almacen_edit']) ? 0 : $_POST['Id_Almacen_edit'];
    $Nombre_al_edit = empty($_POST['Nombre_al_edit']) ? '' : $_POST['Nombre_al_edit'];
    $Direccion_al_edit = empty($_POST['Direccion_al_edit']) ? '' : $_POST['Direccion_al_edit'];
    $Observaciones_edit = empty($_POST['Observaciones_edit']) ? '' : $_POST['Observaciones_edit'];
    $Cantidad_almacenaje_edit = empty($_POST['Cantidad_almacenaje_edit']) ? '' : $_POST['Cantidad_almacenaje_edit'];
    $Productos_Stock_edit = empty($_POST['Productos_Stock_edit']) ? '' : $_POST['Productos_Stock_edit'];
    $Telefono_edit = empty($_POST['Telefono_edit']) ? '' : $_POST['Telefono_edit'];


    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/almacenesUpdateModel.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/almacenesUpdateModel.php";
        }

    
    $oData = new Datos1;
    

    // Llamada al método de actualización
    $sql = "update Almacen set Nombre=?, Direccion=? , Observaciones=?, Cantidad_almacenaje=?, Productos_Stock=?, Telefono=? where Id_Almacen=?";
    $data = $oData->setDataPreparedStatements1($sql,  $Nombre_al_edit, $Direccion_al_edit, $Observaciones_edit,$Cantidad_almacenaje_edit,$Productos_Stock_edit,$Telefono_edit,$Id_Almacen_edit);

    
    //echo $data;
    
?>

