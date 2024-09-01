<?php
  
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/insercionConsulta1ModelProductos.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from Productos order by Nombre";
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
        echo "

        <main class='table' id='costumers_table'>
            <section class='table__header'>
                <div class='input-group margen-z'>
                    <input type='search' placeholder='Buscador' class='btn_posicion margen_au'>
                </div>
            </section>

            <div class='table__body'>
                <table id='tabla2' class='t2'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Especificaciones</th>
                            <th>Categoria</th>
                            <th>PrecioCosto</th>
                            <th>Tipo Componente</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
            ";
        foreach ($data as $row)
        {
           echo "
                <tr>
                    <td>$row->Id_Producto</td>
                    <td>$row->Nombre</td>
                    <td>$row->Precio</td>
                    <td>$row->Stock</td>
                    <td>$row->Especificaciones</td>
                    <td>$row->Categoria</td>
                    <td>$row->Precio_Costo</td>
                    <td>$row->tipo_componente</td>
                    <td><button type='button' class='btn btn-primary botonModal1' id_prod='$row->Id_Producto' data-bs-toggle='modal' data-bs-target='#exampleModal1' data-bs-whatever='@getbootstrap'>Editar</input></td>
                    <td><button  type='button' id_prod='$row->Id_Producto' class='botonBorrarProducto btn btn-primary'>Eliminar</button></td>
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