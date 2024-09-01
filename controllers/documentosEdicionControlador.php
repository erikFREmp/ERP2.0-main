<?php
  
    // Tratamiento de los input type='number'    
    $Id_doc = empty($_GET['Id_doc']) ? 0 : $_GET['Id_doc'];
  
    // // Llamada a la conexión
    // require_once 'Db/Con1Db.php';
    // // Llamada al modelo
    // require_once 'Models/edicionConsulta1Model.php';

    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/documentosEdicionModelo.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/documentosEdicionModelo.php";
        }
    // Instancia del objeto
    $oData = new Datos1;

    // Llamada al método
    $sql = "select * from Documentos where Id_doc=$Id_doc";
    $data = $oData->getData1($sql);
        
    if(empty($data))
    {
        $Id_doc1 = "0";
        $tipo1 = "0";
        $Fecha_creacion1 = "indefinido";
        $Fecha_entrega1 = "indefinido";
        $Total_importe1 = "0";
        $numero1 = "indefinido";
        
        
    }
    else
    {
        foreach ($data as $row)
        {
            $Id_doc1 = $row->Id_doc;
            $tipo1 = $row->tipo;
            $Fecha_creacion1 = $row->Fecha_creacion;
            $Fecha_entrega1 = $row->Fecha_entrega;
            $Total_importe1 = $row->Total_importe;
            $numero1 = $row->numero;
            
           
        }
    }
    $jsonencode =  json_encode($data);
    echo  $jsonencode;

?>


