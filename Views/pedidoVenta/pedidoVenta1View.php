<h3 class="margin-top-1">Pedido Venta</h3>
<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="pedidosventasForm1" name="pedidosventasForm1" class="bloque1" method="post">
            <input type="hidden" id="textoInsercion1" name="textoInsercion1" required class="campo1" placeholder="Fecha Creación">
            <input type="date" id="textoInsercion2" name="textoInsercion2" required class="campo1" placeholder="Fecha Creación">
            <input type="date" id="textoInsercion3" name="textoInsercion3" required class="campo1" placeholder="Fecha Entrega">
            <input type="submit" id="botonInsercionPedidoVenta" name="botonInsercionPedidoVenta" value="Insertar"  class="boton1 btn_posicion">
        </form>
    </div>
</div>
<div id="contenedorpedidoventa" class="contenedor2">  
        <?php require_once "controllers/insercionConsultaPedidoVenta1Controller.php"; ?>
</div>