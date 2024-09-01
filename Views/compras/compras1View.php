<h3 class="margin-top-1 color-white-1">Compras</h3>
<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="comprasForm1" name="comprasForm1" class="bloque1">
            <input type="date" id="textoInsercion2" name="textoInsercion2" required class="campo1" placeholder="Fecha de Pago">
            <input type="number" id="textoInsercion3" name="textoInsercion3" required class="campo1" placeholder="Precio Total">
            <input type="number" id="textoInsercion4" name="textoInsercion4" required class="campo1" placeholder="Cantidad de Producto">
            <input type="number" id="textoInsercion5" name="textoInsercion5" required class="campo1" placeholder="Número de Factura">
            <input type="text" id="textoInsercion6" name="textoInsercion6" required class="campo1" placeholder="Método de Pago">
            <input type="number" id="textoInsercion7" name="textoInsercion7" required class="campo1" placeholder="Número de Seguimiento">
            <input type="submit" id="botonInsercionCompra" name="botonInsercionCompra" value="Insertar"  class="boton1 btn_posicion">
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
                                <input type="text" id="textoEdicion0" name="textoEdicion0" required class="campo1" placeholder="Id" value="" readonly>
                            </div>
                            <div class="happy">
                                <p>Precio Total</p>
                                <input type="text" id="textoEdicion1" name="textoEdicion1" required class="campo1" placeholder="Precio Total">
                            </div>
                            <div class="happy">
                                <p>Cantidad</p>
                                <input type="text" id="textoEdicion2" name="textoEdicion2" required class="campo1" placeholder="Cantidad" value="">
                            </div>
                            <div class="happy">
                                <p>Dirección</p>
                                <input type="text" id="textoEdicion3" name="textoEdicion3" required class="campo1" placeholder="Dirección" value="">
                            </div>
                            <div class="happy">
                                <p>Número de Seguimiento</p>
                                <input type="text" id="textoEdicion4" name="textoEdicion4" required class="campo1" placeholder="Número de Seguimiento" value="">
                            </div>
                            <div class="happy">
                                <p>Fecha de Envío</p>
                                <input type="text" id="textoEdicion5" name="textoEdicion5" required class="campo1" placeholder="Fecha de Envío" value="">
                            </div>
                            <div class="happy">
                                <p>Fecha de Entrega</p>
                                <input type="text" id="textoEdicion6" name="textoEdicion6" required class="campo1" placeholder="Fecha de Entrega" value="">
                            </div>
                            <div class="happy">
                                <p>Método de pago</p>
                                <input type="text" id="textoEdicion7" name="textoEdicion7" required class="campo1" placeholder="Método de pago" value="">
                            </div>

                            
                            <input type="submit" id="botonEdicion1" name="botonEdicion1" value="Actualizar" data-bs-dismiss="modal" class="boton1">
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
    <div id="contenedorCompra" class="contenedor2">  
        <?php require_once "controllers/insercionConsulta1ControllerCompra.php"; ?>

        
    </div>
</div>
