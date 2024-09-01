<h3 class="margin-top-1 color-white-1">Almacenes</h3>
<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="almacenesForm1" name="documentosForm1" class="bloque1">
            <input type="hidden" id="Id_Almacen" name="Id_Almacen" required class="campo1" placeholder="codigo">
            
            <input type="text" id="Nombre_al" name="Nombre_al" required class="campo1" placeholder="Nombre">
            <input type="text" id="Direccion_al" name="Direccion_al" required class="campo1" placeholder="Dirección">
            <input type="text" id="Observaciones" name="Observaciones" class="campo1" placeholder="Observaciones">
            <input type="number" id="Cantidad_almacenaje" name="Cantidad_almacenaje" required class="campo1" placeholder="Cantidad Almacenaje">
            <input type="hidden" id="Productos_Stock" name="Productos_Stock" class="campo1" placeholder="Productos Stock">
            <input type="number" id="Telefono" name="Telefono" required class="campo1" placeholder="Teléfono">
            
           
            <input type="submit" id="botonAl" name="botonAl" value="Insertar" class="boton1 btn_posicion">
        </form>
    </div>
    
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="almacenesformEdicion1" name="documentosformEdicion1" class="bloque1">
                        <div class="happy">
                            <p>Id: </p>
                            <input type="hidden" id="Id_Almacen_edit" name="Id_Almacen_edit" required class="campo1" placeholder="codigo">
                        </div>
                        <div class="happy">
                            <p>Nombre: </p>
                            <input type="text" id="Nombre_al_edit" name="Nombre_al_edit" required class="campo1" placeholder="Nombre">
                        </div>
                        <div class="happy">
                            <p>Dirección: </p>
                            <input type="text" id="Direccion_al_edit" name="Direccion_al_edit" required class="campo1" placeholder="Direccion">
                        </div>
                        <div class="happy">
                            <p>Observaciones: </p>
                            <input type="text" id="Observaciones_edit" name="Observaciones_edit" required class="campo1" placeholder="Observaciones">
                        </div>
                        <div class="happy">
                            <p>Cantidad de almacenaje: </p>
                            <input type="number" id="Cantidad_almacenaje_edit" name="Cantidad_almacenaje_edit" required class="campo1" placeholder="Cantidad_almacenaje">
                        </div>
                        <div class="happy">
                            <p>Productos en stock: </p>
                            <input type="number" id="Productos_Stock_edit" name="Productos_Stock_edit" required class="campo1" placeholder="Productos_Stock">
                        </div>
                        <div class="happy">
                            <p>Teléfono: </p>
                            <input type="number" id="Telefono_edit" name="Telefono_edit" required class="campo1" placeholder="Telefono">
                        </div>
                        <input type="submit" id="botonAlEdit" name="botonAlEdit" value="Actualizar" data-bs-dismiss="modal" class="boton1">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="contenedorAlmacen" class="contenedor2">  
        <?php require_once "controllers/almacenesInsercionConsulta1Controller.php"; ?>
    </div>
</div>