<?php
  
    // Tratamiento de los input type='text'
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = empty($_POST['textoInsercion2']) ? '' : $_POST['textoInsercion2'];
    $textoInsercion3 = empty($_POST['textoInsercion3']) ? '' : $_POST['textoInsercion3'];
    $textoInsercion4 = empty($_POST['textoInsercion4']) ? '' : $_POST['textoInsercion4'];
    $textoInsercion5 = empty($_POST['textoInsercion5']) ? '' : $_POST['textoInsercion5'];
    $textoInsercion6 = empty($_POST['textoInsercion6']) ? '' : $_POST['textoInsercion6'];
    $textoInsercion7 = empty($_POST['textoInsercion7']) ? '' : $_POST['textoInsercion7'];
    $textoInsercion8 = empty($_POST['textoInsercion8']) ? '' : $_POST['textoInsercion8'];
    $textoInsercion9 = empty($_POST['textoInsercion9']) ? '' : $_POST['textoInsercion9'];
  
    // Llamada a la conexión
    require_once '../Db/Con1Db.php';
    // Llamada al modelo
    require_once '../Models/insercionConsulta2Model.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "insert into Productos (Nombre,Precio , Stock,Especificaciones,Categoria,Color,Precio_Costo,tipo_componente,Imagen) values ('$textoInsercion1', '$textoInsercion2', '$textoInsercion3','$textoInsercion4', '$textoInsercion5', '$textoInsercion6','$textoInsercion7', '$textoInsercion8', '$textoInsercion9');";
    $sql .= "select * from Productos order by Nombre,Precio , Stock";
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
        <div class='bloque0 negrita'>
            <div class='bloque1'>Nombre</div>
            <div class='bloque1'>Precio</div>
            <div class='bloque1'>Stock</div>
            <div class='bloque1'>Especificaciones</div>
            <div class='bloque1'>Categoria</div>
            <div class='bloque1'>Color</div>
            <div class='bloque1'>Precio_Costo</div>
            <div class='bloque1'>tipo_componente</div>
            <div class='bloque1'>Imagen</div>
        </div>
        ";
        foreach ($data as $row)
        {
            echo
            "
            <div class='bloque0'>
                <div class='bloque1'>$row->Nombre</div>
                <div class='bloque1'>$row->Precio</div>
                <div class='bloque1'>$row->Stock</div>
                <div class='bloque1'>$row->Especificaciones</div>
                <div class='bloque1'>$row->Categoria</div>
                <div class='bloque1'>$row->Color</div>
                <div class='bloque1'>$row->Precio_Costo</div>
                <div class='bloque1'>$row->tipo_componente</div>
                <div class='bloque1'>$row->Imagen</div>
            </div>
            ";
        }
    }

?>

