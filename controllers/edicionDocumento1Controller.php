<?php
  
    // Tratamiento de los input type='number'    
    $Id_Proveedor = empty($_GET['Id_Proveedor']) ? 0 : $_GET['Id_Proveedor'];
  
    // // Llamada a la conexión
    // require_once 'Db/Con1Db.php';
    // // Llamada al modelo
    // require_once 'Models/edicionConsulta1Model.php';

    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/edicionConsulta1ModelProveedores.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/edicionConsulta1ModelProveedores.php";
        }
    // Instancia del objeto
    $oData = new Datos1;

    // Llamada al método
    $sql = "select * from Proveedores where Id_Proveedor=$Id_Proveedor";
    $data = $oData->getData1($sql);
        
    if(empty($data))
    {
        $Id_Proveedor = "0";
        $Nombre = "indefinido";
        $Direccion = "indefinido";
        $N_telefono = "0";
        $Correo = "indefinido";
    }
    else
    {
        foreach ($data as $row)
        {
            $Id_Proveedor = $row->Id_Proveedor;
            $Nombre = $row->Nombre;
            $Direccion = $row->Direccion;
            $N_telefono = $row->N_telefono;
            $Correo = $row->Correo;
        }
    }
    $jsonencode1 =  json_encode($data);
    echo  $jsonencode1;

?>
