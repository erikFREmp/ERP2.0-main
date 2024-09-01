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
        echo
        "
        <main class='table' id='costumers_table'>
            <section class='table__header'>
                <div class='input-group margen-z'>
                    <input type='search' placeholder='Buscador' class='btn_posicion margen_au'>
                </div>
            </section>

            <div class='table__body'>
                <table id='tabla7' class='t7'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Observaciones</th>
                            <th>Cantidad Almacenaje</th>
                            <th>Teléfono</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
        ";
        foreach ($data as $row)
        {
            echo
            "
            <tr>
                <td>$row->Id_Almacen</td>
                <td>$row->Nombre</td>
                <td>$row->Direccion</td>
                <td>$row->Observaciones</td>
                <td>$row->Cantidad_almacenaje</td>
                <td>$row->Telefono</td>
                <td><button type='button' class='btn btn-primary botonModal20' id_al='$row->Id_Almacen' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Editar</button></td>
                <td><button  type='button' id_al='$row->Id_Almacen' class='botonBorrarAlmacen btn btn-primary'>Eliminar</button></td>
                
            </tr>
            ";
        }
        echo "
                        </tbody>
                    </table>
                </div>
            </main>
        ";
    }

?>