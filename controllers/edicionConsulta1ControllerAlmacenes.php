<?php
     
    $Id_Almacen = empty($_GET['Id_Almacen']) ? 0 : $_GET['Id_Almacen'];
  
    if (file_exists("../Db/Con1Db.php")){
        require_once "../Db/Con1Db.php";
        require_once "../Models/edicionConsulta1ModelProveedores.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/edicionConsulta1ModelProveedores.php";
        }
    $oData = new Datos1;

    $sql = "select * from Almacen where Id_Almacen=$Id_Almacen";
    $data = $oData->getData1($sql);
        
    if(empty($data))
    {
        $Id_Almacen = "0";
        $Nombre = "indefinido";
        $Direccion = "indefinido";
        $Observaciones = "indefinido";
        $Cantidad_almacenaje = "0";
        $Productos_Stock = "0";
        $Telefono = "0";
    }
    else
    {
        foreach ($data as $row)
        {
            $Id_Almacen = $row->Id_Almacen;
            $Nombre = $row->Nombre;
            $Direccion = $row->Direccion;
            $Observaciones = $row->Observaciones;
            $Cantidad_almacenaje = $row->Cantidad_almacenaje;
            $Productos_Stock = $row->Productos_Stock;
            $Telefono = $row->Telefono;

        }
    }
    $jsonencode1 =  json_encode($data);
    echo  $jsonencode1;

?>
