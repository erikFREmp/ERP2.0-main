<?php
 
    $textoEdicion0 = empty($_POST['textoEdicion0Empleados']) ? 0 : $_POST['textoEdicion0Empleados'];
    $textoEdicion1 = empty($_POST['textoEdicion1Empleados']) ? '' : $_POST['textoEdicion1Empleados'];
    $textoEdicion2 = empty($_POST['textoEdicion2Empleados']) ? '' : $_POST['textoEdicion2Empleados'];
    $textoEdicion3 = empty($_POST['textoEdicion3Empleados']) ? 0 : $_POST['textoEdicion3Empleados'];
    $textoEdicion4 = empty($_POST['textoEdicion4Empleados']) ? '' : $_POST['textoEdicion4Empleados'];
    $textoEdicion5 = empty($_POST['textoEdicion5Empleados']) ? '' : $_POST['textoEdicion5Empleados'];
    $textoEdicion6 = empty($_POST['textoEdicion6Empleados']) ? 0 : $_POST['textoEdicion6Empleados'];
    $textoEdicion7 = empty($_POST['textoEdicion7Empleados']) ? '' : $_POST['textoEdicion7Empleados'];
    $textoEdicion8 = empty($_POST['textoEdicion8Empleados']) ? '' : $_POST['textoEdicion8Empleados'];
    $textoEdicion10 = empty($_POST['textoEdicion10Empleados']) ? '' : $_POST['textoEdicion10Empleados'];
    $textoEdicion11 = empty($_POST['textoEdicion11Empleados']) ? '' : $_POST['textoEdicion11Empleados'];
    $textoEdicion12 = empty($_POST['textoEdicion12Empleados']) ? '' : $_POST['textoEdicion12Empleados'];
    $textoEdicion13 = empty($_POST['textoEdicion13Empleados']) ? '' : $_POST['textoEdicion13Empleados'];

    
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/update1ModelEmpleados.php";

    
    $oData = new Datos;
    

    // Llamada al método de actualización
    $sql = "update Empleados set Nombre=?, Apellidos=? , Salario=?, Departamento=?, dni=?, Telefono=? , Correo=?, Direccion=?, Fecha_Contratacion=? , Usuario=?, Contrasena=?, Seguridad=? where Id_Empleado=?";
    $data = $oData->setDataPreparedStatements1($sql, $textoEdicion1, $textoEdicion2, $textoEdicion3,$textoEdicion4,$textoEdicion5, $textoEdicion6, $textoEdicion7,$textoEdicion8, $textoEdicion10,$textoEdicion11, $textoEdicion12, $textoEdicion13, $textoEdicion0);

    

    // Devolver la confirmación de la operación realizada con éxito
    echo $data;
    
?>
