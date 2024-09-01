<?php
// Verificar la existencia del archivo de conexión
if (file_exists("../Db/Con1Db.php")) {
    require_once "../Db/Con1Db.php";
    require_once "../Models/productosListaModel.php";
} elseif (file_exists("./Db/Con1Db.php")) {
    require_once "./Db/Con1Db.php";
    require_once "./Models/productosListaModel.php";
}

// Instancia del objeto para obtener los datos de los productos
$oData = new Datos4;

// Consulta para obtener todos los productos
$sql = "SELECT * FROM Productos ORDER BY Id_Producto";

$data = $oData->getData1($sql);

echo json_encode($data);


?>