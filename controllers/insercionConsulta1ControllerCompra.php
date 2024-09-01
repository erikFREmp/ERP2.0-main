<?php
  
    
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/insercionConsulta1ModelCompra.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/insercionConsulta1ModelCompra.php";
        }
    // Instancia del objeto
    $oData = new Datos1;
    
    // Llamada al método
    $sql = "select * from compras order by Id_Compra";
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
                <table id='tabla1' class='t1'>
                    <thead>
                        <tr>
                            <th>Identificador</th>
                            <th>Fecha de Pago</th>
                            <th>Precio Total</th>
                            <th>Cantidad de Producto</th>
                            <th>Número de Factura</th>
                            <th>Método de Pago</th>
                            <th>Número de Seguimiento</th>
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
                <td>$row->Id_Compra</td>
                <td>$row->Fecha_pago</td>
                <td>$row->Precio_total</td>
                <td>$row->Cantidad_producto</td>
                <td>$row->N_factura</td>
                <td>$row->Metodo_pago</td>
                <td>$row->Numero_seguimiento</td>
                <td><button type='button' class='btn btn-primary botonModal' id_prov='$row->Id_Compra' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Editar</button></td>
                <td><button  type='button' id_prov='$row->Id_Compra' class='botonBorrarProveedor btn btn-primary'>Eliminar</button></td>
                
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
