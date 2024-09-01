<?php
    
    $Id_Almacen = empty($_POST['Id_Almacen']) ? 0 : $_POST['Id_Almacen'];
    $Nombre_al = empty($_POST['Nombre_al']) ? '' : $_POST['Nombre_al'];
    $Direccion_al = empty($_POST['Direccion_al']) ? '' : $_POST['Direccion_al'];
    $Observaciones = empty($_POST['Observaciones']) ? '' : $_POST['Observaciones'];
    $Cantidad_almacenaje = empty($_POST['Cantidad_almacenaje']) ? 0 : $_POST['Cantidad_almacenaje'];
    $Productos_Stock = empty($_POST['Productos_Stock']) ? 0 : $_POST['Productos_Stock'];
    $Telefono = empty($_POST['Telefono']) ? 0 : $_POST['Telefono'];
  

    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/almacenesInsercionConsulta2Model.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/almacenesInsercionConsulta2Model.php";
        }

    $oData = new Datos;

    $sql = "insert into Almacen (Nombre,Direccion,Observaciones , Cantidad_almacenaje,Productos_Stock,Telefono) values ('$Nombre_al','$Direccion_al','$Observaciones' , $Cantidad_almacenaje,$Productos_Stock,$Telefono);";
    $sql .= "select * from Almacen order by Nombre";
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
