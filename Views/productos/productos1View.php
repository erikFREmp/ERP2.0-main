<h3 class="margin-top-1 color-white-1">Productos</h3>
<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form method="POST" id="productosForm1" class="bloque1">
            <input type="hidden" id="textoInsercion9" name="textoInsercion9" required class="campo1" placeholder="Id">
            <input type="text" id="textoInsercion1" name="textoInsercion1" required class="campo1" placeholder="Nombre">
            <input type="number" id="textoInsercion2" name="textoInsercion2" required class="campo1" placeholder="Precio">
            <input type="number" id="textoInsercion3" name="textoInsercion3" required class="campo1" placeholder="Stock">
            <input type="text" id="textoInsercion4" name="textoInsercion4" required class="campo1" placeholder="Especificaciones">
            <input type="text" id="textoInsercion5" name="textoInsercion5" required class="campo1" placeholder="Categoria">
            <input type="number" id="textoInsercion7" name="textoInsercion7" required class="campo1" placeholder="Precio Costo">
            <input type="text" id="textoInsercion8" name="textoInsercion8" required class="campo1" placeholder="Tipo componente">
            <input type="submit" id="botonInsercionProductos" name="botonInsercionProductos" value="Insertar"  class="boton1 btn_posicion">
           

        </form>
    </div>
    <div class='modal fade' id='exampleModal1' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                        <form id="formEdicion1Productos" name="formEdicion1" class="bloque1">
                            <div class="happy">
                                <p>Id:</p>
                                <input type="text" id="textoEdicion0Productos" name="textoEdicion0Productos" required class="campo1" placeholder="Id" readonly>
                            </div>
                            <div class="happy">
                                <p>Nombre:</p>
                                <input type="text" id="textoEdicion1Productos" name="textoEdicion1Productos" required class="campo1" placeholder="Nombre">
                            </div>
                            <div class="happy">
                                <p>Precio:</p>
                                <input type="number" id="textoEdicion2Productos" name="textoEdicion2Productos" required class="campo1" placeholder="Precio">
                            </div>
                            <div class="happy">
                                <p>Stock:</p>
                                <input type="number" id="textoEdicion3Productos" name="textoEdicion3Productos" required class="campo1" placeholder="Stock">
                            </div>
                            <div class="happy">
                                <p>Especificaciones:</p>
                                <input type="text" id="textoEdicion4Productos" name="textoEdicion4Productos" required class="campo1" placeholder="Especificaciones">
                            </div>
                            <div class="happy">
                                <p>Categoria:</p>
                                <input type="text" id="textoEdicion5Productos" name="textoEdicion5Productos" required class="campo1" placeholder="Categoria">
                            </div>
                            <div class="happy">
                                <p>Precio Costo:</p>
                                <input type="number" id="textoEdicion7Productos" name="textoEdicion7Productos" required class="campo1" placeholder="Precio Costo">
                            </div>
                            <div class="happy">
                                <p>Tipo Componente:</p>       
                                <input type="text" id="textoEdicion8Productos" name="textoEdicion8Productos" required class="campo1" placeholder="Tipo componente">
                            </div>
                            <div class="happy">
                                <input type="submit" id="botonEdicion1Productos" name="botonEdicion1Productos" value="Actualizar" data-bs-dismiss="modal" class="boton1 btn_posicion">
                            </div>
                            
                            
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
    <div id="contenedorProductos" class="contenedor2">  
        <?php require_once "controllers/insercionConsulta1ControllerProductos.php"; ?>
    </div>
</div>
