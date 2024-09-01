<?php
  
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/selectProveedoresClientesDocumentosModel.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/selectProveedoresClientesDocumentosModel.php";
        }
    // Instancia del objeto
    $oData = new Datos;
    
    // Llamada al método
    $sql = "select * from Proveedores_Clientes order by codigo";
    $data = $oData->getData1($sql);

    if(empty($data))
    {
        echo
        "
            <div class='bloque1 negrita'>
                No hay datos.
            </div>
        ";
    }
    else
    {
        
        foreach ($data as $row)
        {
            echo
            "

                <option value='$row->codigo'>$row->codigo</option>
            ";
        }
       
    }

?>