<?php
  
    // Tratamiento de los input type='text'
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = empty($_POST['textoInsercion2']) ? '' : $_POST['textoInsercion2'];
    $textoInsercion3 = empty($_POST['textoInsercion3']) ? 0 : $_POST['textoInsercion3'];
    $textoInsercion4 = empty($_POST['textoInsercion4']) ? '' : $_POST['textoInsercion4'];
    $textoInsercion5 = empty($_POST['textoInsercion5']) ? '' : $_POST['textoInsercion5'];
    $textoInsercion6 = empty($_POST['textoInsercion6']) ? 0 : $_POST['textoInsercion6'];
    $textoInsercion7 = empty($_POST['textoInsercion7']) ? '' : $_POST['textoInsercion7'];
    $textoInsercion8 = empty($_POST['textoInsercion8']) ? '' : $_POST['textoInsercion8'];
    $textoInsercion10 = empty($_POST['textoInsercion10']) ? '' : $_POST['textoInsercion10'];
    $textoInsercion11 = empty($_POST['textoInsercion11']) ? '' : $_POST['textoInsercion11'];
    $textoInsercion12 = empty($_POST['textoInsercion12']) ? '' : $_POST['textoInsercion12'];
    $textoInsercion13 = empty($_POST['textoInsercion13']) ? '' : $_POST['textoInsercion13'];
    $textoInsercion14 = hash('sha512', $textoInsercion12);
    if (file_exists("../Db/Con1Db.php")){
        require_once "../Db/Con1Db.php";
        require_once "../Models/insercionConsulta2ModelEmpleados.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        require_once "./Models/insercionConsulta2ModelEmpleados.php";
        }
    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "insert into Empleados (Nombre,Apellidos , Salario,Departamento,dni,Telefono,Correo,Direccion,Fecha_Contratacion,Usuario,Contrasena,Seguridad,Contrasena2) values ('$textoInsercion1', '$textoInsercion2', '$textoInsercion3','$textoInsercion4', '$textoInsercion5', '$textoInsercion6','$textoInsercion7', '$textoInsercion8','$textoInsercion10', '$textoInsercion11', '$textoInsercion12', '$textoInsercion13','$textoInsercion14');";
    $sql .= "select * from Empleados order by Nombre";
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

