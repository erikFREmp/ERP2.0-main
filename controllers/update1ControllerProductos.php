<?php
 
    $textoEdicion0Productos = empty($_POST['textoEdicion0Productos']) ? 0 : $_POST['textoEdicion0Productos'];
    $textoEdicion1Productos = empty($_POST['textoEdicion1Productos']) ? '' : $_POST['textoEdicion1Productos'];
    $textoEdicion2Productos = empty($_POST['textoEdicion2Productos']) ? 0 : $_POST['textoEdicion2Productos'];
    $textoEdicion3Productos = empty($_POST['textoEdicion3Productos']) ? 0 : $_POST['textoEdicion3Productos'];
    $textoEdicion4Productos = empty($_POST['textoEdicion4Productos']) ? '' : $_POST['textoEdicion4Productos'];
    $textoEdicion5Productos = empty($_POST['textoEdicion5Productos']) ? '' : $_POST['textoEdicion5Productos'];
    $textoEdicion7Productos = empty($_POST['textoEdicion7Productos']) ? 0 : $_POST['textoEdicion7Productos'];
    $textoEdicion8Productos = empty($_POST['textoEdicion8Productos']) ? '' : $_POST['textoEdicion8Productos'];

    
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/update1ModelProductos.php";

    
    $oData = new Datos;
    

    // Llamada al método de actualización
    $sql = "update Productos set Nombre=?, Precio=? , Stock=?, Especificaciones=?, Categoria=?, Precio_Costo=?, tipo_componente=? where Id_Producto=?";
    $data = $oData->setDataPreparedStatements1($sql, $textoEdicion1Productos, $textoEdicion2Productos, $textoEdicion3Productos,$textoEdicion4Productos, $textoEdicion5Productos, $textoEdicion7Productos,$textoEdicion8Productos,$textoEdicion0Productos);

    

    // Devolver la confirmación de la operación realizada con éxito
    echo $data;
    
?>
