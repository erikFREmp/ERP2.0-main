<?php
  
    // Tratamiento de los input type='number'    
    $Id_Producto = empty($_GET['Id_Producto']) ? 0 : $_GET['Id_Producto'];
    // // Llamada a la conexión
    // require_once 'Db/Con1Db.php';
    // // Llamada al modelo
    // require_once 'Models/edicionConsulta1Model.php';

    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/edicionConsulta1ModelProductos.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/edicionConsulta1ModelProductos.php";
        }
    // Instancia del objeto
    $oData = new Datos1;

    // Llamada al método
    $sql = "select * from Productos where Id_Producto=$Id_Producto";
    $data = $oData->getData1($sql);
        
    if(empty($data))
    {
        $Id_Producto = "0";
        $Nombre = "indefinido";
        $Precio = "0";
        $Stock = "0";
        $Especificaciones = "indefinido";
        $Categoria = "indefinido";
        $Precio_Costo = "0";
        $tipo_componente = "indefinido";
    }
    else
    {
        foreach ($data as $row)
        {
            $Id_Producto = $row->Id_Producto;
            $Nombre = $row->Nombre;
            $Precio = $row->Precio;
            $Stock = $row->Stock;
            $Especificaciones = $row->Especificaciones;
            $Categoria = $row->Categoria;
            $Precio_Costo = $row->Precio_Costo;
            $tipo_componente = $row->tipo_componente;
        }
    }
    $jsonencode =  json_encode($data);
    echo  $jsonencode;

?>
