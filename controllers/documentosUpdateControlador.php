<?php
 
    $Id_doc = empty($_POST['Id_doc1']) ? 0 : $_POST['Id_doc1'];
    $tipo = empty($_POST['tipo1']) ? '' : $_POST['tipo1'];
    $Fecha_creacion = empty($_POST['Fecha_creacion1']) ? '' : $_POST['Fecha_creacion1'];
    $Fecha_entrega = empty($_POST['Fecha_entrega1']) ? '' : $_POST['Fecha_entrega1'];
    $Total_importe = empty($_POST['Total_importe1']) ? '' : $_POST['Total_importe1'];
    $numero = empty($_POST['numero1']) ? '' : $_POST['numero1'];


    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/documentosUpdateModel.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/documentosUpdateModel.php";
        }

    
    $oData = new Datos1;
    

    // Llamada al método de actualización
    $sql = "update Documentos set tipo=?, Fecha_creacion=? , Fecha_entrega=?, Total_importe=?, numero=? where Id_doc=?";
    $data = $oData->setDataPreparedStatements1($sql,  $tipo, $Fecha_creacion, $Fecha_entrega,$Total_importe,$numero,$Id_doc);

    
    //echo $data;
    
?>

