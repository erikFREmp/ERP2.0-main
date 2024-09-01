<?php
  
    
    if (file_exists("../Db/Con1Db.php")){
        require_once "../Db/Con1Db.php";
        require_once "../Models/documento1Model.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/documento1Model.php";
        }
    // Instancia del objeto
    $oData = new Datos1;

    // Llamada al método
    $sql = "SELECT * FROM Documentos WHERE tipo IN (1, 3, 6, 8) ORDER BY tipo";
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
                <table id='tabla6' class='t6'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Fecha Creación</th>
                            <th>Fecha Entrega</th>
                            <th>Total importe</th>
                            <th>Cantidad</th>
                            <th>Id Almacén</th>
                            <th>Id ProCli</th>
                            <th>Productos</th>
                        </tr>
                    </thead>
                    <tbody>
        ";
        foreach ($data as $row)
        {
            echo
            "
            <tr>
                <td>$row->Id_doc</td>";
                if($row->tipo == 1)
                {
                    echo "<td>pedido compra</td>";
                }
                else if($row->tipo == 2)
                {
                    echo "<td>pedido venta</td>";
                }
                else if($row->tipo == 3)
                {
                    echo "<td>albaran compra</td>";
                }
                else if($row->tipo == 4)
                {
                    echo "<td>albaran venta</td>";
                }
                else if($row->tipo == 5)
                {
                    echo "<td>factura venta</td>";
                }
                else if($row->tipo == 6)
                {
                    echo "<td>factura compra</td>";
                }
                else if($row->tipo == 7)
                {
                    echo "<td>presupuesto venta</td>";
                }
                else
                {
                    echo "<td>presupuesto compra</td>";
                }
                
                echo
                "
                <td>$row->Fecha_creacion</td>
                <td>$row->Fecha_entrega</td>
                <td>$row->Total_importe</td>
                <td>$row->numero</td>
                <td>$row->Id_Almacen</td>
                <td>$row->Id_proveedores_clientes</td>
                <td>$row->Id_Producto</td>
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


