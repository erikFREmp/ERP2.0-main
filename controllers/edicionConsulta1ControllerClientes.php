<?php
  
    // Tratamiento de los input type='number'    
    $Id_Cliente = empty($_GET['Id_Cliente']) ? 0 : $_GET['Id_Cliente'];
  
    // // Llamada a la conexión
    // require_once 'Db/Con1Db.php';
    // // Llamada al modelo
    // require_once 'Models/edicionConsulta1Model.php';

    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/edicionConsulta1ModelClientes.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/edicionConsulta1ModelClientes.php";
        }
    // Instancia del objeto
    $oData = new Datos1;

    // Llamada al método
    $sql = "select * from Clientes where Id_Cliente=$Id_Cliente";
    $data = $oData->getData1($sql);
        
    if(empty($data))
    {
        $Id_Cliente = "0";
        $Nombre = "indefinido";
        $Apellidos = "indefinido";
        $Direccion = "indefinido";
        $N_telefono = "0";
        $Metodo_pago = "indefinido";
        $Info_factura = "indefinido";
        $Correo = "indefinido";
    }
    else
    {
        foreach ($data as $row)
        {
            $Id_Cliente = $row->Id_Cliente;
            $Nombre = $row->Nombre;
            $Apellidos = $row->Apellidos;
            $Direccion = $row->Direccion;
            $N_telefono =  $row->N_telefono;
            $Metodo_pago = $row->Metodo_pago;
            $Info_factura = $row->Info_factura;
            $Correo = $row->Correo;
        }
    }
    $jsonencode4 =  json_encode($data);
    echo  $jsonencode4;

?>
