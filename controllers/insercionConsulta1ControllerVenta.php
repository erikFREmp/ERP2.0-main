<?php
  
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/insercionConsulta1ModelVenta.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/insercionConsulta1ModelVenta.php";
        }
    // Instancia del objeto
    $oData = new Datos1;
    
    // Llamada al método
    $sql = "select * from ventas order by Id_Venta";
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
                <table id='tabla5' class='t5'>
                    <thead>
                        <tr>
                            <th>Identificador</th>
                            <th>Precio Total</th>
                            <th>Cantidad</th>
                            <th>Dirección</th>
                            <th>Número de seguimiento</th>
                            <th>Fecha Envío</th>
                            <th>Fecha de Entrega</th>
                            <th>Método de pago</th>
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
                <td>$row->Id_Venta</td>
                <td>$row->Precio_total</td>
                <td>$row->Cantidad_producto</td>
                <td>$row->Direccion</td>
                <td>$row->Numero_seguimiento</td>
                <td>$row->Fecha_envio</td>
                <td>$row->Fecha_entrega</td>
                <td>$row->Metodo_pago</td>
                <td><button type='button' class='btn btn-primary botonModal5' Id_Vent='$row->Id_Venta' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Editar</button></td>
                <td><button  type='button' Id_Vent='$row->Id_Venta' class='botonBorrarVenta btn btn-primary'>Eliminar</button></td>
                
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
