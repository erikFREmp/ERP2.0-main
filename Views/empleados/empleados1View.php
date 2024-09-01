<h3 class="margin-top-1 color-white-1">Empleados</h3>
<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="empleadosForm1" class="bloque1">
            <input type="text" id="textoInsercion1" name="textoInsercion1" required class="campo1" placeholder="Nombre">
            <input type="text" id="textoInsercion2" name="textoInsercion2" required class="campo1" placeholder="Apellidos">
            <input type="number" id="textoInsercion3" name="textoInsercion3" required class="campo1" placeholder="Salario">
            <input type="text" id="textoInsercion4" name="textoInsercion4" required class="campo1" placeholder="Departamento">
            <input type="text" id="textoInsercion5" name="textoInsercion5" required class="campo1" placeholder="DNI">
            <input type="tel" id="textoInsercion6" name="textoInsercion6" required class="campo1" placeholder="Teléfono">
            <input type="email" id="textoInsercion7" name="textoInsercion7" required class="campo1" placeholder="Correo">
            <input type="text" id="textoInsercion8" name="textoInsercion8" required class="campo1" placeholder="Dirección">
            <div class="happy">
                <p class="white">Fecha de contratación: </p>
                <input type="date" id="textoInsercion10" name="textoInsercion10" required class="campo1" placeholder="Fecha Contratación">
            </div>
            <input type="text" id="textoInsercion11" name="textoInsercion11" required class="campo1" placeholder="Usuario">
            <input type="text" id="textoInsercion12" name="textoInsercion12" required class="campo1" placeholder="Contraseña">
            <input type="text" id="textoInsercion13" name="textoInsercion13" required class="campo1" placeholder="Seguridad">
            <input type="hidden" id="textoInsercion14" name="textoInsercion14" placeholder="Hash">
            <input type="submit" id="botonInsercionEmpleados" name="botonInsercionEmpleados" value="Insertar"  class="boton1 btn_posicion">
        </form>
    </div>
    <div class='modal fade' id='exampleModal2' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                        <form method="post" id="formEdicion1Empleados" name="formEdicion1Empleados" class="bloque1">
                            <div class="happy">
                                <p>Id:</p>
                                <input type="text" id="textoEdicion0Empleados" name="textoEdicion0Empleados" required class="campo1" placeholder="id" readonly>
                            </div>
                            <div class="happy">
                                <p>Nombre:</p>
                                <input type="text" id="textoEdicion1Empleados" name="textoEdicion1Empleados" required class="campo1" placeholder="Nombre">
                            </div>
                            <div class="happy">
                                <p>Apellidos:</p>
                                <input type="text" id="textoEdicion2Empleados" name="textoEdicion2Empleados" required class="campo1" placeholder="Apellidos">
                            </div>
                            <div class="happy">
                                <p>Salario</p>
                                 <input type="number" id="textoEdicion3Empleados" name="textoEdicion3Empleados" required class="campo1" placeholder="Salario">
                            </div>
                            <div class="happy">
                                <p>Departamento:</p>
                                <input type="text" id="textoEdicion4Empleados" name="textoEdicion4Empleados" required class="campo1" placeholder="Departamento">
                            </div>
                            <div class="happy">
                                <p>DNI:</p>
                                <input type="text" id="textoEdicion5Empleados" name="textoEdicion5Empleados" required class="campo1" placeholder="DNI">
                            </div>
                            <div class="happy">
                                <p>Teléfono:</p>
                                <input type="tel" id="textoEdicion6Empleados" name="textoEdicion6Empleados" required class="campo1" placeholder="Teléfono">
                            </div>
                            <div class="happy">
                                <p>Correo:</p>
                                <input type="email" id="textoEdicion7Empleados" name="textoEdicion7Empleados" required class="campo1" placeholder="Correo">
                            </div>
                            <div class="happy">
                                <p>Dirección:</p>
                                <input type="text" id="textoEdicion8Empleados" name="textoEdicion8Empleados" required class="campo1" placeholder="Dirección">
                            </div>
                            <div class="happy">
                                <p>Fecha Contratación:</p>
                                <input type="date" id="textoEdicion10Empleados" name="textoEdicion10Empleados" required class="campo1" placeholder="Fecha Contratación">
                            </div>
                            <div class="happy">
                                <p>Usuario:</p>
                                <input type="text" id="textoEdicion11Empleados" name="textoEdicion11Empleados" required class="campo1" placeholder="Usuario">    
                            </div>
                            <div class="happy">
                                <p>Contraseña:</p>
                                <input type="text" id="textoEdicion12Empleados" name="textoEdicion12Empleados" required class="campo1" placeholder="Contrasena">
                            </div>
                            <div class="happy">
                                <p>Seguridad:</p>
                                <input type="text" id="textoEdicion13Empleados" name="textoEdicion13Empleados" required class="campo1" placeholder="Seguridad">
                            </div>
                            <div class="happy">
                                <input type="submit" id="botonEdicion1Empleados" name="botonEdicion1" value="Actualizar" data-bs-dismiss="modal" class="boton1 btn_posicion">
                            </div>
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
    <div id="contenedorEmpleados" class="contenedor2">  
        <?php require_once "controllers/insercionConsulta1ControllerEmpleados.php"; ?>
    </div>
</div>


