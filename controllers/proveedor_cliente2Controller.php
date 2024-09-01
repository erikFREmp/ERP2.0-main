<?php
    
    $codigo = empty($_POST['codigo']) ? 0 : $_POST['codigo'];
    $tipo = empty($_POST['tipo']) ? 0 : $_POST['tipo'];
    $Nombre = empty($_POST['Nombre']) ? '' : $_POST['Nombre'];
    $Direccion = empty($_POST['Direccion']) ? '' : $_POST['Direccion'];
    $N_telefono = empty($_POST['N_telefono']) ? '' : $_POST['N_telefono'];
    $Metodo_pago = empty($_POST['Metodo_pago']) ? '' : $_POST['Metodo_pago'];
    $Correo = empty($_POST['Correo']) ? '' : $_POST['Correo'];
  
    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/proveedor_cliente2Model.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/proveedor_cliente2Model.php";
        }
    $oData = new Datos;

    $sql = "insert into Proveedores_Clientes (tipo,Nombre,Direccion , N_telefono,Metodo_pago,Correo) values ($tipo, '$Nombre','$Direccion','$N_telefono', '$Metodo_pago','$Correo');";
    $sql .= "select * from Proveedores_Clientes order by Nombre";
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
                <table id='tabla1' class='t1'>
                    <thead>
                        <tr>
                        <th>Código</th>
                        <th>Tipo</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Método de pago</th>
                        <th>Correo</th>
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
                <td>$row->codigo</td>
                ";
                if($row->tipo == 1)
                {
                    echo "<td>Cliente</td>";
                }
                else
                {
                    echo "<td>Proveedor</td>";
                }
                echo
                "
                <td>$row->Nombre</td>
                <td>$row->Direccion</td>
                <td>$row->N_telefono</td>
                <td>$row->Metodo_pago</td>
                <td>$row->Correo</td>
                <td><button type='button' class='btn btn-primary botonModal10' cod='$row->codigo' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Editar</button></td>
                <td><button  type='button' cod='$row->codigo' class='botonBorrarProveedorCliente btn btn-primary'>Eliminar</button></td>
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

