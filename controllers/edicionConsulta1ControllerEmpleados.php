<?php
  
    // Tratamiento de los input type='number'    
    $Id_Empleado = empty($_GET['Id_Empleado']) ? 0 : $_GET['Id_Empleado'];
  
    // // Llamada a la conexión
    // require_once 'Db/Con1Db.php';
    // // Llamada al modelo
    // require_once 'Models/edicionConsulta1Model.php';

    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/edicionConsulta1ModelEmpleados.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/edicionConsulta1ModelEmpleados.php";
        }
    // Instancia del objeto
    $oData = new Datos1;

    // Llamada al método
    $sql = "select * from Empleados where Id_Empleado=$Id_Empleado";
    $data = $oData->getData1($sql);
        
    if(empty($data))
    {
        $Id_Empleado = "0";
        $Nombre = "indefinido";
        $Apellidos = "indefinido";
        $Salario = "0";
        $Departamento = "indefinido";
        $dni = "indefinido";
        $Telefono = "0";
        $Correo = "indefinido";
        $Direccion = "indefinido";
        $Fecha_Contratacion = "indefinido";
        $Usuario = "indefinido";
        $Contrasena = "indefinido";
        $Seguridad = "indefinido";
    }
    else
    {
        foreach ($data as $row)
        {
            $Id_Empleado = $row->Id_Empleado;
            $Nombre = $row->Nombre;
            $Apellidos = $row->Apellidos;
            $Salario = $row->Salario;
            $Departamento = $row->Departamento;
            $dni = $row->dni;
            $Telefono = $row->Telefono;
            $Correo = $row->Correo;
            $Direccion = $row->Direccion;
            $Fecha_Contratacion = $row->Fecha_Contratacion;
            $Usuario = $row->Usuario;
            $Contrasena = $row->Contrasena;
            $Seguridad = $row->Seguridad;
        }
    }
    $jsonencode =  json_encode($data);
    echo  $jsonencode;

?>


