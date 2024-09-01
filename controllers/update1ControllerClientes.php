<?php
 
    $textoEdicion0 = empty($_POST['textoEdicion0Clientes']) ? 0 : $_POST['textoEdicion0Clientes'];
    $textoEdicion1 = empty($_POST['textoEdicion1Clientes']) ? '' : $_POST['textoEdicion1Clientes'];
    $textoEdicion2 = empty($_POST['textoEdicion2Clientes']) ? '' : $_POST['textoEdicion2Clientes'];
    $textoEdicion3 = empty($_POST['textoEdicion3Clientes']) ? '' : $_POST['textoEdicion3Clientes'];
    $textoEdicion4 = empty($_POST['textoEdicion4Clientes']) ? 0 : $_POST['textoEdicion4Clientes'];
    $textoEdicion5 = empty($_POST['textoEdicion5Clientes']) ? '' : $_POST['textoEdicion5Clientes'];
    $textoEdicion6 = empty($_POST['textoEdicion6Clientes']) ? '' : $_POST['textoEdicion6Clientes'];
    $textoEdicion7 = empty($_POST['textoEdicion7Clientes']) ? '' : $_POST['textoEdicion7Clientes'];
    
    
    require_once "../Db/Con1Db.php";
    
    require_once "../Models/update1ModelClientes.php";

    
    $oData = new Datos;
    

    $sql = "update Clientes set Nombre=?,Apellidos=? , Direccion=?,N_telefono=?,Metodo_pago=?,Info_factura=?,Correo=? where Id_Cliente=?";
    $data = $oData->setDataPreparedStatements1($sql, $textoEdicion1, $textoEdicion2, $textoEdicion3,$textoEdicion4, $textoEdicion5,$textoEdicion6,$textoEdicion7,$textoEdicion0);

    

    echo $data;
    
?>
