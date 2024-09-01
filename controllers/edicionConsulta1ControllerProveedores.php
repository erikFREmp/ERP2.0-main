<?php
  
    // Tratamiento de los input type='number'    
    $codigo = empty($_GET['codigo']) ? 0 : $_GET['codigo'];
  
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
    $sql = "select * from Proveedores_Clientes where codigo=$codigo";
    $data = $oData->getData1($sql);
        
    if(empty($data))
    {
        $codigo = "0";
        $tipo = "0";
        $Nombre = "indefinido";
        $Direccion = "indefinido";
        $N_telefono = "indefinido";
        $Metodo_pago = "indefinido";
        $Correo = "indefinido";
    }
    else
    {
        foreach ($data as $row)
        {
            $codigo = $row->codigo;
            $tipo = $row->tipo;
            $Nombre = $row->Nombre;
            $Direccion = $row->Direccion;
            $N_telefono = $row->N_telefono;
            $Metodo_pago = $row->Metodo_pago;
            $Correo = $row->Correo;
        }
    }
    $jsonencode1 =  json_encode($data);
    echo  $jsonencode1;

?>
