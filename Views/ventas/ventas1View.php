<h3 class="margin-top-1">Venta</h3>
<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="ventasForm1" name="ventasForm1" class="bloque1">
            <input type="number" id="textoInsercion2" name="textoInsercion2" required class="campo1" placeholder="Precio Total">
            <input type="number" id="textoInsercion3" name="textoInsercion3" required class="campo1" placeholder="Cantidad">
            <input type="text" id="textoInsercion4" name="textoInsercion4" required class="campo1" placeholder="Dirección">
            <input type="text" id="textoInsercion5" name="textoInsercion5" required class="campo1" placeholder="Número de Seguimiento">
            <input type="date" id="textoInsercion6" name="textoInsercion6" required class="campo1" placeholder="Fecha de Envío">
            <input type="date" id="textoInsercion7" name="textoInsercion7" required class="campo1" placeholder="Fecha de Entrega">
            <input type="text" id="textoInsercion8" name="textoInsercion8" required class="campo1" placeholder="Método de pago">
            <input type="submit" id="botonInsercionVenta" name="botonInsercionVenta" value="Insertar"  class="boton1 btn_posicion">
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
                    
                        <form id="formEdicion1Venta" name="formEdicion1Venta" class="bloque1">
                            <div class="happy">
                                <p>Id: </p>
                                <input type="text" id="textoEdicion0Venta" name="textoEdicion0Venta" required class="campo1" placeholder="Id" value="" readonly>
                            </div>
                            <div class="happy">
                                <p>Precio Total</p>
                                <input type="text" id="textoEdicion1Venta" name="textoEdicion1Venta" required class="campo1" placeholder="Precio Total">
                            </div>
                            <div class="happy">
                                <p>Cantidad</p>
                                <input type="text" id="textoEdicion2Venta" name="textoEdicion2Venta" required class="campo1" placeholder="Cantidad" value="">
                            </div>
                            <div class="happy">
                                <p>Dirección</p>
                                <input type="text" id="textoEdicion3Venta" name="textoEdicion3Venta" required class="campo1" placeholder="Dirección" value="">
                            </div>
                            <div class="happy">
                                <p>Número de Seguimiento</p>
                                <input type="text" id="textoEdicion4Venta" name="textoEdicion4Venta" required class="campo1" placeholder="Número de Seguimiento" value="">
                            </div>
                            <div class="happy">
                                <p>Fecha de Envío</p>
                                <input type="date" id="textoEdicion5Venta" name="textoEdicion5Venta" required class="campo1" placeholder="Fecha de Envío" value="">
                            </div>
                            <div class="happy">
                                <p>Fecha de Entrega</p>
                                <input type="date" id="textoEdicion6Venta" name="textoEdicion6Venta" required class="campo1" placeholder="Fecha de Entrega" value="">
                            </div>
                            <div class="happy">
                                <p>Método de pago</p>
                                <input type="text" id="textoEdicion7Venta" name="textoEdicion7Venta" required class="campo1" placeholder="Método de pago" value="">
                            </div>

                            
                            <input type="submit" id="botonEdicion1Ventas" name="botonEdicion1Ventas" value="Actualizar" data-bs-dismiss="modal" class="boton1">
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
    <div id="contenedorVenta" class="contenedor2">  
        <?php require_once "controllers/insercionConsulta1ControllerVenta.php"; ?>

        
    </div>
</div>
