<?php
  
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/insercionConsulta1ModelEmpleados.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from Empleados order by Nombre";
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
                <table id='tabla3' class='t3'>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Salario</th>
                            <th>Departamento</th>
                            <th>DNI</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Dirección</th>
                            <th>Fecha Contratación</th>
                            <th>Usuario</th>
                            <th>Seguridad</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Contraseña Hasheada</th>
                        </tr>
                    </thead>
                    <tbody>
            ";
        foreach ($data as $row)
        {
            echo
            "
                <tr>
                    <td>$row->Id_Empleado</td>
                    <td>$row->Nombre</td>
                    <td>$row->Apellidos</td>
                    <td>$row->Salario</td>
                    <td>$row->Departamento</td>
                    <td>$row->dni</td>
                    <td>$row->Telefono</td>
                    <td>$row->Correo</td>
                    <td>$row->Direccion</td>
                    <td>$row->Fecha_Contratacion</td>
                    <td>$row->Usuario</td>
                    <td>$row->Seguridad</td>
                    <td><button type='button' class='btn btn-primary botonModal2' id_emple='$row->Id_Empleado' data-bs-toggle='modal' data-bs-target='#exampleModal2' data-bs-whatever='@getbootstrap'>Editar</input></td>
                    <td><button  type='button' id_emple='$row->Id_Empleado' class='botonBorrarEmpleado btn btn-primary'>Eliminar</button></td>
                    <td>$row->Contrasena2</td>
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


 