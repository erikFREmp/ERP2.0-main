<?php
  
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/selectProductosDocumentosModel.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/selectProductosDocumentosModel.php";
        }
    // Instancia del objeto
    $oData = new Datos4;
    
    // Llamada al método
    $sql = "select * from Productos order by Id_Producto";
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

                <option value='$row->Id_Producto'>$row->Id_Producto </option>
                
            ";
        }
       
    }

?>