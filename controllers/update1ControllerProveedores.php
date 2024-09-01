<?php
 
    $codigo = empty($_POST['codigo']) ? 0 : $_POST['codigo'];
    $tipo = empty($_POST['tipo']) ? 0 : $_POST['tipo'];
    $Nombre = empty($_POST['Nombre']) ? '' : $_POST['Nombre'];
    $Direccion = empty($_POST['Direccion']) ? '' : $_POST['Direccion'];
    $N_telefono = empty($_POST['N_telefono']) ? '' : $_POST['N_telefono'];
    $Metodo_pago = empty($_POST['Metodo_pago']) ? '' : $_POST['Metodo_pago'];
    $Correo = empty($_POST['Correo']) ? '' : $_POST['Correo'];


    
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/update1ModelProveedores.php";

    
    $oData = new Datos;
    

    // Llamada al método de actualización
    $sql = "update Proveedores_Clientes set tipo=?, Nombre=?, Direccion=? , N_telefono=?,Metodo_pago=?, Correo=? where codigo=?";
    $data = $oData->setDataPreparedStatements1($sql,  $tipo, $Nombre, $Direccion,$N_telefono,$Metodo_pago,,$Correo$codigo);

    

    // Devolver la confirmación de la operación realizada con éxito
    //echo $data;
    
?>
