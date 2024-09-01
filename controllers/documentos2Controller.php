<?php
$Id_doc = empty($_POST['Id_doc']) ? 0 : $_POST['Id_doc'];
$tipo = empty($_POST['tipo']) ? 0 : $_POST['tipo'];
$Fecha_creacion = empty($_POST['Fecha_creacion']) ? '' : $_POST['Fecha_creacion'];
$Fecha_entrega = empty($_POST['Fecha_entrega']) ? '' : $_POST['Fecha_entrega'];
$Total_importe = empty($_POST['Total_importe']) ? '' : $_POST['Total_importe'];
$numero = empty($_POST['numero']) ? '' : $_POST['numero'];
$almacenes = empty($_POST['almacenes']) ? 0 : $_POST['almacenes'];
$ProveedorCli = empty($_POST['ProveedorCli']) ? 0 : $_POST['ProveedorCli'];
$productos = empty($_POST['productos']) ? 0 : $_POST['productos'];
$Idproductos = $_POST['Idproductos'] ?? array();
$nombresProductos = $_POST['nombresProductos'] ?? array(); // Si se agregaron nombresProductos
$preciosProductos = $_POST['preciosProductos'] ?? array(); // Si se agregaron preciosProductos

if (file_exists("../Db/Con1Db.php")){
    // Llamada a la conexión
    require_once "../Db/Con1Db.php";
    // Llamada al modelo
    require_once "../Models/documento2Model.php";
}
elseif(file_exists("./Db/Con1Db.php")){
    require_once "./Db/Con1Db.php";
    require_once "./Models/documento2Model.php";
}

$oData = new Datos;
$sql = "INSERT INTO Documentos (tipo, Fecha_creacion, Fecha_entrega, Total_importe, numero, Id_Almacen, Id_proveedores_clientes,Id_Producto) 
VALUES (?, ?, ?, ?, ?, ?, ?,?)";

$stmt = $oData->getConexion()->prepare($sql);

$stmt->bind_param("issiiiii", $tipo, $Fecha_creacion, $Fecha_entrega, $Total_importe, $numero, $almacenes, $ProveedorCli,$productos );

$stmt->execute();

// Obtener el ID del documento recién insertado
$documentoId = $stmt->insert_id;

// Insertar productos asociados con el documento
foreach ($Idproductos as $index => $productoId) {
    $productoNombre = $nombresProductos[$index] ?? ''; // Obtener el nombre si está presente
    $productoPrecio = $preciosProductos[$index] ?? ''; // Obtener el precio si está presente

    // Sentencia preparada para la inserción de productos asociados con el documento
    $sqlProducto = "INSERT INTO Documento_Producto (Id_Documento, Id_Producto, Nombre_Producto, Precio_Producto) 
                    VALUES (?, ?, ?, ?)";

    $stmtProducto = $oData->getConexion()->prepare($sqlProducto);

    $stmtProducto->bind_param("iisi", $documentoId, $productos, $productoNombre, $productoPrecio);

    $stmtProducto->execute();
}

// Obtener los documentos y sus productos asociados después de la inserción
$sqlSelect = "SELECT d.*, dp.Id_Producto, dp.Nombre_Producto, dp.Precio_Producto FROM Documentos d
              LEFT JOIN Documento_Producto dp ON d.Id_doc = dp.Id_Documento
              ORDER BY d.Fecha_creacion";
$data = $oData->setGetData1($sqlSelect);

if (empty($data)) {
    echo "
        <div class='bloque1 negrita'>
            No hay datos.
        </div>
    ";
} else {
    echo "
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
                            <th>Fecha Creacion</th>
                            <th>Fecha Entrega</th>
                            <th>Total Importe</th>
                            <th>Cantidad</th>
                            <th>Id Almacén</th>
                            <th>Id ProCli</th>
                            <th>Id Productos</th>
                            <th>Nombre Productos</th>
                            <th>Precio Productos</th>
                        </tr>
                    </thead>
                    <tbody>
    ";

    foreach ($data as $row) {
        echo "
            <tr>
                <td>$row->Id_doc</td>";
            
        // Resto de las columnas del documento...
        
        // Mostrar productos asociados
        if (!empty($row->Id_Producto)) {
            echo "<td>$row->Id_Producto</td>";
            echo "<td>$row->Nombre_Producto</td>";
            echo "<td>$row->Precio_Producto</td>";
        } else {
            echo "<td></td>"; // Celda vacía para la columna de productos
            echo "<td></td>"; // Celda vacía para la columna de productos
            echo "<td></td>"; // Celda vacía para la columna de productos
        }

        echo "</tr>";
    }

    echo "
                    </tbody>
                </table>
            </div>
        </main>
    ";
}
?>