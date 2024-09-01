<?php
  
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/almacenesInsercionConsulta1Model.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/almacenesInsercionConsulta1Model.php";
        }
    // Instancia del objeto
    $oData = new Datos;
    
    // Llamada al método
    $sql = "select * from Almacen order by Id_Almacen";
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

                <option value='$row->Id_Almacen'>$row->Id_Almacen</option>

            ";
        }
       
    }

?>