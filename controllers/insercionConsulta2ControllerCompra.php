<?php
    
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = empty($_POST['textoInsercion2']) ? '' : $_POST['textoInsercion2'];
    $textoInsercion3 = empty($_POST['textoInsercion3']) ? '' : $_POST['textoInsercion3'];
    $textoInsercion4 = empty($_POST['textoInsercion4']) ? '' : $_POST['textoInsercion4'];
    $textoInsercion5 = empty($_POST['textoInsercion5']) ? '' : $_POST['textoInsercion5'];
    $textoInsercion6 = empty($_POST['textoInsercion6']) ? '' : $_POST['textoInsercion6'];
    $textoInsercion7 = empty($_POST['textoInsercion7']) ? '' : $_POST['textoInsercion7'];
   
  
    require_once '../Db/Con1Db.php';

    require_once '../Models/insercionConsulta2ModelCompra.php';

    $oData = new Datos;

    $sql = "insert into compras (Id_compra, Fecha_pago, Precio_total, Cantidad_producto, N_factura, Metodo_pago, Numero_seguimiento) values ('$textoInsercion1', '$textoInsercion2', '$textoInsercion3','$textoInsercion4','$textoInsercion5','$textoInsercion6','$textoInsercion7');";
    $sql .= "select * from compras order by Id_compra";
    $data = $oData->setGetData1($sql);



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
                <table id='tabla6' class='t6'>
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
                    <td><button type='button' class='btn btn-primary botonModal' id_prov='$row->Id_Venta' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Editar</button></td>
                    <td><button  type='button' id_prov='$row->Id_Venta' class='botonBorrarProveedor btn btn-primary'>Eliminar</button></td>
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

