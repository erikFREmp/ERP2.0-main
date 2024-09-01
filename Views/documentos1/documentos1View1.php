<h3 class="margin-top-1 color-white-1">Ventas</h3>
<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="documentosForm1" name="documentosForm1" class="bloque1">
            <input type="hidden" id="Id_doc" name="Id_doc" required class="campo1" placeholder="codigo">
           <div class="">
                <p class="color-white-1">Selecciona Operación:</p>
                <select name="tipo" id="tipo">
                    <option value="2">Pedido venta</option>
                    <option value="4">Albarán venta</option>
                    <option value="5">Factura venta</option>
                    <option value="7">Presupuesto venta</option>
                </select>
           </div>
            <div class="happy">
                <p class="color-white-1">Fecha Creación:</p>
                <input type="date" id="Fecha_creacion" name="Fecha_creacion" required class="campo1" placeholder="Fecha_creacion">
            </div>
            <div class="happy">
                <p class="color-white-1">Fecha Entrega:</p>
                <input type="date" id="Fecha_entrega" name="Fecha_entrega" required class="campo1" placeholder="Fecha_entrega">
            </div>
            <input type="number" id="Total_importe" name="Total_importe" required class="campo1" placeholder="Total Importe">
            <input type="text" id="numero" name="numero" required class="campo1" placeholder="Cantidad">
            <!-- Muestra Id Almacenes-->
            <div class="margin1">
                <p class="color-white-1">Identificador Almacén</p>
                <select name="almacenes" id="almacenes">
                    <?php require_once "controllers/selectAlmacenDocumentosController.php"; ?>
                </select>
            </div>
            <!-- Muestra Id Cliente o Proveedor-->
            <div class="margin1">
                <p class="color-white-1">Identificador Socios</p>
                <select name="ProveedorCli" id="ProveedorCli">
                    <?php require_once "controllers/selectProveedoresClientesDocumentosController.php"; ?>
                </select>
            </div>
            <!-- -->
            <div class="margin1">
                <p class="color-white-1">Identificador Productos</p>
                <select name="productos" id="productos">
                    <?php require_once "controllers/selectProductosDocumentosController.php"; ?>
                </select>
            </div>
            <input type="submit" id="botonDoc" name="botonDoc" value="Insertar"  class="boton1 btn_posicion">
            <script>
document.getElementById("botonDoc").addEventListener("click", function() {
    location.reload();
});
</script>
        </form>
    </div>
    <h2 class="margin3-top margin1-bottom"></h2>
    <div id="datos"></div>
    <div id="datos2"></div>
 

    <div id="contenedorDocumentos" class="contenedor2">  
        <?php require_once "controllers/documentos1Controller1.php"; ?> 
    </div>
</div>
