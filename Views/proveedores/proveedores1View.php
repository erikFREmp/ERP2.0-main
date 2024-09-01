<h3 class="margin-top-1 color-white-1">Socios</h3>
<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="proveedoresClientesForm1" name="proveedoresClientesForm1" class="bloque1">
            <input type="hidden" id="codigo" name="codigo" required class="campo1" placeholder="codigo">
            <select name="tipo" id="tipo">
                <option value="1">Cliente</option>
                <option value="2">Proveedor</option>
            </select>
            <input type="text" id="Nombre" name="Nombre" required class="campo1" placeholder="Nombre">
            <input type="text" id="Direccion" name="Direccion" required class="campo1" placeholder="Dirección">
            <input type="text" id="N_telefono" name="N_telefono" required class="campo1" placeholder="Teléfono">
            <input type="text" id="Metodo_pago" name="Metodo_pago" required class="campo1" placeholder="Método pago">
            <input type="email" id="Correo" name="Correo" required class="campo1" placeholder="Correo">
            <input type="submit" id="botonInsercionProveedoresClientes" name="botonInsercionProveedoresClientes" value="Insertar"  class="boton1 btn_posicion">

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
                    
                        <form id="formEdicion1" name="formEdicion1" class="bloque1">
                            <div class="happy">
                                <p>Id: </p>
                                <input type="number" id="codigo1" name="codigo1" required class="campo1" placeholder="codigo" readonly>
                            </div>
                            <div class="happy">
                                <p>tipo:</p>
                                <select name="tipo1" id="tipo1">
                                    <option value="1">cliente</option>
                                    <option value="2">Proveedor</option>
                                </select>
                            </div>
                            <div class="happy">
                                <p>Nombre</p>
                                <input type="text" id="Nombre1" name="Nombre1" required class="campo1" placeholder="Nombre">
                            </div>
                            <div class="happy">
                                <p>Dirección</p>
                                <input type="text" id="Direccion1" name="Direccion1" required class="campo1" placeholder="Dirección">
                            </div>
                            <div class="happy">
                                <p>N_telefono</p>
                                <input type="text" id="N_telefono1" name="N_telefono1" required class="campo1" placeholder="N_telefono">
                            </div>
                            <div class="happy">
                                <p>Metodo_pago</p>
                                <input type="text" id="Metodo_pago1" name="Metodo_pago1" required class="campo1" placeholder="Metodo_pago">
                            </div>
                            <div class="happy">
                                <p>Correo</p>
                                <input type="email" id="Correo1" name="Correo1" required class="campo1" placeholder="Correo">
                            </div>
                            <input type="submit" id="botonEdicion1" name="botonEdicion1" value="Actualizar" data-bs-dismiss="modal" class="boton1">
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
    <div id="contenedorProveedores" class="contenedor2">  
        <?php require_once "controllers/proveedor_cliente1Controller.php"; ?>

        
    </div>
</div>
