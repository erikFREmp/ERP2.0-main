<?php
    
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = empty($_POST['textoInsercion2']) ? '' : $_POST['textoInsercion2'];
    $textoInsercion3 = empty($_POST['textoInsercion3']) ? '' : $_POST['textoInsercion3'];
   
  
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/insercionConsultaPedidoVenta2Model.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/insercionConsultaPedidoVenta2Model.php";
        }
    $oData = new Datos;

    $sql = "insert into pedidos_venta (Id_Pedido, Fecha_creacion, Fecha_entrega) values ('$textoInsercion1', '$textoInsercion2', '$textoInsercion3');";
    $sql .= "select * from pedidos_venta order by Id_Pedido";
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
                <table id='tabla5' class='t5'>
                    <thead>
                        <tr>
                            <th>Identificador</th>
                            <th>Fecha Creación Total</th>
                            <th>Fecha Entrega</th>
                        </tr>
                    </thead>
                    <tbody>
        ";
        foreach ($data as $row)
        {
            echo
            "
                <tr>
                    <td>$row->Id_Pedido</td>
                    <td>$row->Fecha_creacion</td>
                    <td>$row->Fecha_entrega</td>
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

