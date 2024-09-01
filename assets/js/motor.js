

function deshabilitarControl1(control1)
{
    control1.classList.remove("boton1");
    control1.classList.add("boton1Inhabilitado");
    control1.disable = true;
}

function habilitarControl1(control1)
{
    control1.classList.remove("boton1Inhabilitado");
    control1.classList.add("boton1");
    control1.disable = false;
}

/* INICIO - ajaxPost1 - Devuelve el resultado a un DIV (POST) */
function ajaxPost1(form1, controlador1, div1)
{

  // 1.- Creación del objeto XMLHttpRequest (Ajax1)
  const Ajax1 = new XMLHttpRequest();

  // 2.- Enlace del formulario a un objeto FormData (FormData1)
  const FormData1 = new FormData(form1);
  console.log(form1);
  console.log(FormData1);
  // 5.-Éxito en el envío
  Ajax1.addEventListener("load", function(event) {
    
    document.getElementById(div1.id).innerHTML = this.responseText;
    console.log(div1.id);
  });
  
  // 5.-Error en el envío
  Ajax1.addEventListener("error", function( event ) {
    alert( 'Error: no se ha enviado la informacion' );
  } );
  
  // 3.-Configuración del envío del formulario a través del FormData
  Ajax1.open("POST", controlador1);
  
  // 4.-Envío del formulario a través del FormData
  Ajax1.send( FormData1 );
  
}


function ajaxPost3(form1, controlador1, div1)
{

  // 1.- Creación del objeto XMLHttpRequest (Ajax1)
  const Ajax2 = new XMLHttpRequest();

  // 2.- Enlace del formulario a un objeto FormData (FormData1)
  const FormData2 = new FormData( form1 );
  
  // 5.-Éxito en el envío
  Ajax2.addEventListener("load", function(event) {
    document.getElementById(div1.id).innerHTML = this.responseText;
  });
  
  // 5.-Error en el envío
  Ajax2.addEventListener("error", function( event ) {
    alert( 'Error: no se ha enviado la informacion' );
  } );
  
  // 3.-Configuración del envío del formulario a través del FormData
  Ajax2.open("POST", controlador1);
  
  // 4.-Envío del formulario a través del FormData
  Ajax2.send( FormData2 );
  
}
/* FIN - ajaxPost1 - Devuelve el resultado a un DIV (POST) */

/* INICIO - ajaxPost2 - Devuelve el resultado a una Alert (POST) */
function ajaxPost2(form1, controlador1, div1)
{

  // 1.- Creación del objeto XMLHttpRequest (Ajax1)
  const Ajax1 = new XMLHttpRequest();

  // 2.- Enlace del formulario a un objeto FormData (FormData1)
  const FormData1 = new FormData( form1 );
  
  // 5.-Éxito en el envío
  Ajax1.addEventListener("load", function(event) {
    alert(this.responseText);
  });
  
  // 5.-Error en el envío
  Ajax1.addEventListener("error", function( event ) {
    alert( 'Error: no se ha enviado la informacion' );
  } );
  
  // 3.-Configuración del envío del formulario a través del FormData
  Ajax1.open("POST", controlador1);
  
  // 4.-Envío del formulario a través del FormData
  Ajax1.send( FormData1 );
  
}
function ajaxGet1(controlador1, div1) {
 
  let ajax1 = new XMLHttpRequest();
  ajax1.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200)
    {
      document.getElementById(div1.id).innerHTML = this.responseText;
    }
  };
  ajax1.open("GET", controlador1, true);
  ajax1.send();

}
/* FIN - ajaxGet1 - Devuelve el resultado a un DIV (GET) */

function seleccionarDatos1(form1, boton1, controlador1, div1)
{    
    deshabilitarControl1(boton1);
    ajaxPost1(form1,controlador1,div1);
    habilitarControl1(boton1);
    form1.reset();
}

function seleccionarDatos2(form1, boton1, controlador1, div1)
{
  deshabilitarControl1(boton1);
  ajaxGet1(controlador1, div1);
  habilitarControl1(boton1);
  form1.reset();
}

function seleccionarDatos3(form1, boton1, controlador1, div1)
{
  deshabilitarControl1(boton1);
  ajaxGet1(controlador1+'?valor=' + campo1.value, div1);
  //ajaxGet1('Controllers/Buscador1Controller.php?valor=' + campo1.value, divResultado1.id);
  habilitarControl1(boton1);
  form1.reset();
}

function insertarDatos1(form1, boton1, controlador1, div1)
{      
  deshabilitarControl1(boton1);
  ajaxPost1(form1,controlador1,div1);
  habilitarControl1(boton1);
  form1.reset();
}
function insertarDatos2(form1, boton1, controlador1, div1) {
  deshabilitarControl1(boton1);
  // Agregar los datos de listaSeleccionado al formulario
  listaSeleccionado.forEach(producto => {
      const inputIdProducto = document.createElement('input');
      inputIdProducto.type = 'hidden';
      inputIdProducto.name = 'Idproductos[]'; // Este nombre debe coincidir con el nombre en $_POST
      inputIdProducto.value = producto.id;
      form1.appendChild(inputIdProducto);

      const inputNombreProducto = document.createElement('input');
      inputNombreProducto.type = 'hidden';
      inputNombreProducto.name = 'nombresProductos[]'; // Agregar nombresProductos si es necesario
      inputNombreProducto.value = producto.nombre;
      form1.appendChild(inputNombreProducto);

      const inputPrecioProducto = document.createElement('input');
      inputPrecioProducto.type = 'hidden';
      inputPrecioProducto.name = 'preciosProductos[]'; // Agregar preciosProductos si es necesario
      inputPrecioProducto.value = producto.precio;
      form1.appendChild(inputPrecioProducto);
  });

  ajaxPost1(form1, controlador1, div1);
  habilitarControl1(boton1);
  form1.reset();
}

function modificarDatos1(form1, boton1, controlador1, div1)
{      
  deshabilitarControl1(boton1);
  ajaxPost1(form1,controlador1,div1);
  habilitarControl1(boton1);
}
function modificarDatos2(form1, boton1, controlador1, div1)
{      
  
  deshabilitarControl1(boton1);
  ajaxPost3(form1,controlador1,div1);
  habilitarControl1(boton1);
}
function EliminarDatos1(form1, boton1, controlador1, div1)
{      
  
  deshabilitarControl1(boton1);
  ajaxPost3(form1,controlador1,div1);
  habilitarControl1(boton1);
}
window.addEventListener('load', function(){

  let boton1;
  let boton2;
  let boton3;
  let boton4;
  let boton5;
  let controlador1;
  let controlador2;
  let controlador3;
  let controlador4;
  let controlador5;
  let div1;
  let div2;
  let div3;
  let div4;
  let div5;



  const formConsulta1 = document.getElementById("formConsulta1");
 
  if(formConsulta1)
  {
    
    boton1 = document.getElementById("botonConsulta1");
    controlador1 = "Controllers/Consulta1Controller.php";
    div1 = document.getElementById("contenedor2");
    formConsulta1.addEventListener("submit", function(event){
      event.preventDefault();
      seleccionarDatos1(formConsulta1,boton1,controlador1,div1);
    });
  }
  
  const botonConsulta2 = document.getElementById("botonConsulta2");
  
  if(botonConsulta2)
  {
    controlador2 = "Controllers/Consulta2Controller.php";
    div2 = document.getElementById("contenedor2");
    botonConsulta2.addEventListener("click", function(event){
      event.preventDefault();
      seleccionarDatos2(formConsulta1,botonConsulta2,controlador2,div2);
    });
  }

  

  const productosForm1 = document.getElementById("productosForm1");
  if(productosForm1)
  {
    boton1 = document.getElementById("botonInsercionProductos");
    controlador1 = "controllers/insercionConsulta2ControllerProductos.php";
    div1 = document.getElementById("contenedorProductos");
    // Evento y llamada a la función
    productosForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(productosForm1,boton1,controlador1,div1);
      window.location.href = 'productos.php';
    });
  }
  const proveedoresClientesForm1 = document.getElementById("proveedoresClientesForm1");
  if(proveedoresClientesForm1)
  {
    boton1 = document.getElementById("botonInsercionProveedoresClientes");
    controlador1 = "controllers/proveedor_cliente2Controller.php";
    div1 = document.getElementById("contenedorProveedores");
    // Evento y llamada a la función
    proveedoresClientesForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(proveedoresClientesForm1,boton1,controlador1,div1);
    });
  }
  const almacenesForm1 = document.getElementById("almacenesForm1");
  if(almacenesForm1)
  {
    boton1 = document.getElementById("botonAl");
    controlador1 = "controllers/almacenesInsercionConsulta2Controller.php";
    div1 = document.getElementById("contenedorAlmacen");
    // Evento y llamada a la función
    almacenesForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(almacenesForm1,boton1,controlador1,div1);
    });
  }


  const ventasForm1 = document.getElementById("ventasForm1");
  if(ventasForm1)
  {
    boton1 = document.getElementById("botonInsercionVenta");
    controlador1 = "controllers/insercionConsulta2ControllerVenta.php";
    div1 = document.getElementById("contenedorProveedores");
    // Evento y llamada a la función
    ventasForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(ventasForm1,boton1,controlador1,div1);
      window.location.href = 'venta.php';
    });
  }
  const comprasForm1 = document.getElementById("comprasForm1");
  if(comprasForm1)
  {
    boton1 = document.getElementById("botonInsercionCompra");
    controlador1 = "controllers/insercionConsulta2ControllerCompra.php";
    div1 = document.getElementById("contenedorCompra");
    // Evento y llamada a la función
    comprasForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(comprasForm1,boton1,controlador1,div1);
      window.location.href = 'compra.php';
    });
  }
  
  const pedidosventasForm1 = document.getElementById("pedidosventasForm1");
  if(pedidosventasForm1)
  {
    boton1 = document.getElementById("botonInsercionPedidoVenta");
    controlador1 = "controllers/insercionConsultaPedidoVenta2Controller.php";
    div1 = document.getElementById("contenedorpedidoventa");
    // Evento y llamada a la función
    pedidosventasForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(pedidosventasForm1,boton1,controlador1,div1);
    });
  }





  const clientesForm1 = document.getElementById("clientesForm1");
  if(clientesForm1)
  {
    boton1 = document.getElementById("botonInsercionClientes");
    controlador1 = "controllers/insercionConsulta2ControllerClientes.php";
    div1 = document.getElementById("contenedorClientes");
        clientesForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(clientesForm1,boton1,controlador1,div1);
      window.location.href = 'clientes.php';
    });
  }
  const empleadosForm1 = document.getElementById("empleadosForm1");
  if(empleadosForm1)
  {
    
    boton1 = document.getElementById("botonInsercionEmpleados");
    controlador1 = "controllers/insercionConsulta2ControllerEmpleados.php";
    div1 = document.getElementById("contenedorEmpleados");
    empleadosForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(empleadosForm1,boton1,controlador1,div1);
      window.location.href = 'empleados.php';
    });
  }

  const documentosForm1 = document.getElementById("documentosForm1");
  if(documentosForm1)
  {
    
    boton1 = document.getElementById("botonDoc");
    controlador1 = "controllers/documentos2Controller.php";
    div1 = document.getElementById("contenedorDocumentos");
   // listaSeleccionadoJSON = JSON.stringify(listaSeleccionado);
    documentosForm1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos2(documentosForm1,boton1,controlador1,div1);
    });
  }
  
    
      const formEdicion1 = document.getElementById("formEdicion1");
    if(formEdicion1)
  {
    
    // Referencia de los elementos
    boton3 = document.getElementById("botonEdicion1");

    controlador3 = "controllers/update1ControllerProveedores.php";
    div3 = document.getElementById("contenedorProveedores");
        formEdicion1.addEventListener("submit", function(event){
      event.preventDefault();
      modificarDatos2(formEdicion1,boton3,controlador3,div3);
      window.location.href = 'proveedores.php';
      
    });  
  }

  const documentosformEdicion1 = document.getElementById("documentosformEdicion1");
  if(documentosformEdicion1)
  {
    boton5 = document.getElementById("botonDocEdit");
    controlador5 = "controllers/documentosUpdateControlador.php";
    div5 = document.getElementById("contenedorDocumentos");
    documentosformEdicion1.addEventListener("submit", function(event){
      event.preventDefault();
      modificarDatos2(documentosformEdicion1,boton5,controlador5,div5);

    });
  }
  const almacenesformEdicion1 = document.getElementById("almacenesformEdicion1");
  if(almacenesformEdicion1)
  {
    boton5 = document.getElementById("botonAlEdit");
    controlador5 = "controllers/almacenesUpdateControlador.php";
    div5 = document.getElementById("contenedorAlmacen");
    almacenesformEdicion1.addEventListener("submit", function(event){
      event.preventDefault();
      modificarDatos2(almacenesformEdicion1,boton5,controlador5,div5);
      window.location.href = 'almacenes.php';

    });
  }

  const formEdicion1Clientes = document.getElementById("formEdicion1Clientes");
  if(formEdicion1Clientes)
  {
    boton5 = document.getElementById("botonEdicion1Clientes");

    controlador5 = "controllers/update1ControllerClientes.php";
    div5 = document.getElementById("contenedorClientes");
        formEdicion1Clientes.addEventListener("submit", function(event){
      event.preventDefault();
      modificarDatos2(formEdicion1Clientes,boton5,controlador5,div5);
      window.location.href = 'clientes.php';
    });
  }
  const formEdicion1Empleados = document.getElementById("formEdicion1Empleados");
  if(formEdicion1Empleados)
  {
    // Referencia de los elementos
    boton3 = document.getElementById("botonEdicion1Empleados");

    controlador3 = "controllers/update1ControllerEmpleados.php";
    div3 = document.getElementById("contenedorEmpleados");
    // Evento y llamada a la función
    formEdicion1Empleados.addEventListener("submit", function(event){
      event.preventDefault();
      modificarDatos2(formEdicion1Empleados,boton3,controlador3,div3);
      window.location.href = 'empleados.php';
    });
  }
  const formEdicion1Venta = document.getElementById("formEdicion1Venta");
  if(formEdicion1Venta)
  {
      
    // Referencia de los elementos
    boton4 = document.getElementById("botonEdicion1Ventas");

    controlador4 = "controllers/update1ControllerVentas.php";
    div4 = document.getElementById("contenedorVenta");
    // Evento y llamada a la función
    formEdicion1Venta.addEventListener("submit", function(event){
      event.preventDefault();
      modificarDatos2(formEdicion1Venta,boton4,controlador4,div4);
      window.location.href = 'venta.php';
    });
  }
  const formEdicion1Productos = document.getElementById("formEdicion1Productos");
  if(formEdicion1Productos)
  {
      
    // Referencia de los elementos
    boton4 = document.getElementById("botonEdicion1Productos");

    controlador4 = "controllers/update1ControllerProductos.php";
    div4 = document.getElementById("contenedorProductos");
    // Evento y llamada a la función
    formEdicion1Productos.addEventListener("submit", function(event){
      event.preventDefault();
      modificarDatos2(formEdicion1Productos,boton4,controlador4,div4);
      window.location.href = 'productos.php';
    });
  }

  


  

const tabla01 = document.getElementById("tabla01");
const tabla02 = document.getElementById("tabla02");
const t2 = document.getElementById("tabla2");
const t1 = document.getElementById("tabla1");
const t3 = document.getElementById("tabla3");
const t4 = document.getElementById("tabla4");
const t5 = document.getElementById("tabla5");
const t6 = document.getElementById("tabla6");
const t7 = document.getElementById("tabla7");

if(tabla01)
{
  console.log("tabla01:");
}
if(tabla02)
{
  console.log("tabla02:");
}

if(t1)
{
  console.log("tabla1:");
  document.querySelector(".t1").addEventListener("click", function(event) {
    if (event.target.classList.contains("botonModal10")) 
    {
    let codigoEdit = event.target.getAttribute("cod");
    let codigo = document.getElementById("codigo1");
    let tipo = document.getElementById("tipo1");
    let Nombre = document.getElementById("Nombre1");
    let Direccion = document.getElementById("Direccion1");
    let N_telefono = document.getElementById("N_telefono1");
    let Metodo_pago = document.getElementById("Metodo_pago1");
    let Correo = document.getElementById("Correo1");
    

      if (true) {
      
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "./controllers/edicionConsulta1ControllerProveedores.php?codigo=" + codigoEdit, true);
        
      xhr.onreadystatechange = function() 
        {
          
          if (xhr.readyState == 4 && xhr.status == 200) 
          {
            
          console.log("Result 1: " + xhr.responseText);
          console.log("Result 1: " + JSON.parse(xhr.responseText));
          console.log("Result 1: " + xhr.responseText);
                let parsedResult = JSON.parse(xhr.responseText);
                
                if (parsedResult !== false) 
                {
                  // Access the properties using the correct names
                  codigo.value = parsedResult[0].codigo;
                  tipo.value = parsedResult[0].tipo;
                  Nombre.value = parsedResult[0].Nombre;
                  Direccion.value = parsedResult[0].Direccion;
                  N_telefono.value = parsedResult[0].N_telefono;
                  Metodo_pago.value = parsedResult[0].Metodo_pago;
                  Correo.value = parsedResult[0].Correo;
                }
          }
        };
      xhr.send();
      }
      
    }
    else if(event.target.classList.contains("botonBorrarProveedorCliente"))
    {
      const botonesBorrarProveedor = document.querySelectorAll('.botonBorrarProveedorCliente');
      botonesBorrarProveedor.forEach(boton => {
        boton.addEventListener('click', function() {
            const codigoEliminar = boton.getAttribute('cod');
            // Realiza una solicitud para eliminar el dato asociado al ID
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/delete1ControllerProveedores.php?codigo=' + codigoEliminar, true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Maneja la respuesta del servidor si es necesario
                    console.log('Respuesta del controlador:', xhr.responseText);
                }
            };

            xhr.send();
        });
      });
    }

    
      
        
  });
    
}
if(t2)
{
  console.log("tabla2:");
  document.querySelector(".t2").addEventListener("click", function(event) {
    if (event.target.classList.contains("botonModal1")) 
    {
      
    console.log("123");
    let codigoEdit1 = event.target.getAttribute("id_prod");
    let Id_Producto = document.getElementById("textoEdicion0Productos");
    let Nombre = document.getElementById("textoEdicion1Productos");
    let Precio = document.getElementById("textoEdicion2Productos");
    let Stock = document.getElementById("textoEdicion3Productos");
    let Especificaciones = document.getElementById("textoEdicion4Productos");
    let Categoria = document.getElementById("textoEdicion5Productos");
    let Precio_Costo = document.getElementById("textoEdicion7Productos");
    let tipo_componente = document.getElementById("textoEdicion8Productos");

    
      
    if(true)
    {
      var xhr1 = new XMLHttpRequest();
      xhr1.open("GET", "./controllers/edicionConsulta1ControllerProductos.php?Id_Producto=" + codigoEdit1, true);
        xhr1.onreadystatechange = function() 
        {
          if (xhr1.readyState == 4 && xhr1.status == 200) 
          {
            
            
          console.log("Result 1: " + xhr1.responseText);
          console.log("Result 1: " + JSON.parse(xhr1.responseText));
          console.log("Result 1: " + xhr1.responseText);
                let parsedResult = JSON.parse(xhr1.responseText);

                if (parsedResult !== false) 
                {
                  // Access the properties using the correct names
                  Id_Producto.value = parsedResult[0].Id_Producto;
                  
                  Nombre.value = parsedResult[0].Nombre;
                  Precio.value = parsedResult[0].Precio;
                  Stock.value = parsedResult[0].Stock;
                  Especificaciones.value = parsedResult[0].Especificaciones;
                  Categoria.value = parsedResult[0].Categoria;
                  Precio_Costo.value = parsedResult[0].Precio_Costo;
                  tipo_componente.value = parsedResult[0].tipo_componente;
                }
          }
        };
      xhr1.send();
    }

    }
    else if(event.target.classList.contains("botonBorrarProducto"))
    {
      const botonBorrarProducto = document.querySelectorAll('.botonBorrarProducto');
      botonBorrarProducto.forEach(boton => {
        boton.addEventListener('click', function() {
            const codigoEliminar = boton.getAttribute('id_prod');
            // Realiza una solicitud para eliminar el dato asociado al ID
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/delete1ControllerProductos.php?Id_Producto=' + codigoEliminar, true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Maneja la respuesta del servidor si es necesario
                    console.log('Respuesta del controlador:', xhr.responseText);
                    // Por ejemplo, podrías recargar la página después de eliminar el dato
                    window.location.href = 'productos.php'; 
                }
            };

            xhr.send();
        });
      });
    }
    
  });
}
if(t3)
{
  console.log("tabla3");
  document.querySelector(".t3").addEventListener("click", function(event) {
    if (event.target.classList.contains("botonModal2")) 
    {
    console.log("soy t3");
    
    let codigoEdit = event.target.getAttribute("id_emple");
    let Id_Empleado = document.getElementById("textoEdicion0Empleados");
    let Nombre = document.getElementById("textoEdicion1Empleados");
    let Apellidos = document.getElementById("textoEdicion2Empleados");
    let Salario = document.getElementById("textoEdicion3Empleados");
    let Departamento = document.getElementById("textoEdicion4Empleados");
    let dni = document.getElementById("textoEdicion5Empleados");
    let Telefono = document.getElementById("textoEdicion6Empleados");
    let Correo = document.getElementById("textoEdicion7Empleados");
    let Direccion = document.getElementById("textoEdicion8Empleados");
    let Fecha_Contratacion = document.getElementById("textoEdicion10Empleados");
    let Usuario = document.getElementById("textoEdicion11Empleados");
    let Contrasena = document.getElementById("textoEdicion12Empleados");
    let Seguridad = document.getElementById("textoEdicion13Empleados");

      if (true) { // Coloca tu condición aquí
      
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "./controllers/edicionConsulta1ControllerEmpleados.php?Id_Empleado=" + codigoEdit, true);
        xhr.onreadystatechange = function() 
        {
          if (xhr.readyState == 4 && xhr.status == 200) 
          {
            

            
          console.log("Result 1: " + xhr.responseText);
          console.log("Result 1: " + JSON.parse(xhr.responseText));
          console.log("Result 1: " + xhr.responseText);
                let parsedResult = JSON.parse(xhr.responseText);

                if (parsedResult !== false) 
                {
                  
                  Id_Empleado.value = parsedResult[0].Id_Empleado;
                 
                  Nombre.value = parsedResult[0].Nombre;
                  Apellidos.value = parsedResult[0].Apellidos;
                  Salario.value = parsedResult[0].Salario;
                  Departamento.value = parsedResult[0].Departamento;
                  dni.value = parsedResult[0].dni;
                  Telefono.value = parsedResult[0].Telefono;
                  Correo.value = parsedResult[0].Correo;
                  Direccion.value = parsedResult[0].Direccion;
                  let fechaContratacionString = parsedResult[0].Fecha_Contratacion;
                  let partesFecha = fechaContratacionString.split("-");
                  let fechaFormateada = partesFecha[0] + "-" + partesFecha[1] + "-" + partesFecha[2]; // Formato "yyyy-MM-dd"
                  let fechaContratacionDate = new Date(fechaFormateada);
                  Fecha_Contratacion.valueAsDate = fechaContratacionDate;
                  Usuario.value = parsedResult[0].Usuario;
                  Contrasena.value = parsedResult[0].Contrasena;
                  Seguridad.value = parsedResult[0].Seguridad;
                }
          }
        };
      xhr.send();
      }
    }
    else if(event.target.classList.contains("botonBorrarEmpleado"))
    {
      const botonBorrarEmpleado = document.querySelectorAll('.botonBorrarEmpleado');
      botonBorrarEmpleado.forEach(boton => {
        boton.addEventListener('click', function() {
            const codigoEliminar = boton.getAttribute('id_emple');
            // Realiza una solicitud para eliminar el dato asociado al ID
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/delete1ControllerEmpleados.php?Id_Empleado=' + codigoEliminar, true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Maneja la respuesta del servidor si es necesario
                    console.log('Respuesta del controlador:', xhr.responseText);
                    // Por ejemplo, podrías recargar la página después de eliminar el dato
                    window.location.href = 'empleados.php'; 
                }
            };

            xhr.send();
        });
      });
    }
  });
}
if(t4)
  {
    document.querySelector(".t4").addEventListener("click", function(event) {
      if (event.target.classList.contains("botonModal3")) 
      {
      console.log("122223");
      let codigoEdit = event.target.getAttribute("id_clie");
      let Id_Cliente = document.getElementById("textoEdicion0Clientes");
      let Nombre = document.getElementById("textoEdicion1Clientes");
      let Apellidos = document.getElementById("textoEdicion2Clientes");
      let Direccion = document.getElementById("textoEdicion3Clientes");
      let N_telefono = document.getElementById("textoEdicion4Clientes");
      let Metodo_pago = document.getElementById("textoEdicion5Clientes");
      let Info_factura = document.getElementById("textoEdicion6Clientes");
      let Correo = document.getElementById("textoEdicion7Clientes");


        if (true) { // Coloca tu condición aquí
        
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "./controllers/edicionConsulta1ControllerClientes.php?Id_Cliente=" + codigoEdit, true);
          xhr.onreadystatechange = function() 
          {
            if (xhr.readyState == 4 && xhr.status == 200) 
            {
              

              
            console.log("Result 1: " + xhr.responseText);
            console.log("Result 1: " + JSON.parse(xhr.responseText));
            console.log("Result 1: " + xhr.responseText);
                  let parsedResult = JSON.parse(xhr.responseText);

                  if (parsedResult !== false) 
                  {
                    // Access the properties using the correct names
                    Id_Cliente.value = parsedResult[0].Id_Cliente;
                    Nombre.value = parsedResult[0].Nombre;
                    Apellidos.value = parsedResult[0].Apellidos;
                    Direccion.value = parsedResult[0].Direccion;
                    N_telefono.value = parsedResult[0].N_telefono;
                    Metodo_pago.value = parsedResult[0].Metodo_pago;
                    Info_factura.value = parsedResult[0].Info_factura;
                    Correo.value = parsedResult[0].Correo;
                  }
            }
          };
        xhr.send();
        }
      }
      else if(event.target.classList.contains("botonBorrarClientes"))
    {
      const botonBorrarClientes = document.querySelectorAll('.botonBorrarClientes');
      botonBorrarClientes.forEach(boton => {
        boton.addEventListener('click', function() {
            const codigoEliminar = boton.getAttribute('id_clie');
            // Realiza una solicitud para eliminar el dato asociado al ID
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/delete1ControllerClientes.php?Id_Cliente=' + codigoEliminar, true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Maneja la respuesta del servidor si es necesario
                    console.log('Respuesta del controlador:', xhr.responseText);
                    // Por ejemplo, podrías recargar la página después de eliminar el dato
                    window.location.href = 'clientes.php'; 
                }
            };

            xhr.send();
        });
      });
    }
    });
  }

  if(t5)
  {
    document.querySelector(".t5").addEventListener("click", function(event) {
      if (event.target.classList.contains("botonModal5")) 
      {
      console.log("122223");
      let codigoEdit = event.target.getAttribute("Id_Vent");
      let Id_Venta = document.getElementById("textoEdicion0Venta");
      let Precio_total = document.getElementById("textoEdicion1Venta");
      let Cantidad_producto = document.getElementById("textoEdicion2Venta");
      let Direccion = document.getElementById("textoEdicion3Venta");
      let Numero_seguimiento = document.getElementById("textoEdicion4Venta");
      let Fecha_envio = document.getElementById("textoEdicion5Venta");
      let Fecha_entrega = document.getElementById("textoEdicion6Venta");
      let Metodo_pago = document.getElementById("textoEdicion7Venta");


        if (true) { // Coloca tu condición aquí
        
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "./controllers/edicionConsulta1ControllerVentas.php?Id_Venta=" + codigoEdit, true);
          xhr.onreadystatechange = function() 
          {
            if (xhr.readyState == 4 && xhr.status == 200) 
            {
              

              
            console.log("Result 1: " + xhr.responseText);
            console.log("Result 1: " + JSON.parse(xhr.responseText));
            console.log("Result 1: " + xhr.responseText);
                  let parsedResult = JSON.parse(xhr.responseText);

                  if (parsedResult !== false) 
                  {
                    // Access the properties using the correct names
                    Id_Venta.value = parsedResult[0].Id_Venta;
                    Precio_total.value = parsedResult[0].Precio_total;
                    Cantidad_producto.value = parsedResult[0].Cantidad_producto;
                    Direccion.value = parsedResult[0].Direccion;
                    Numero_seguimiento.value = parsedResult[0].Numero_seguimiento;
                    let Fecha_envioString = parsedResult[0].Fecha_envio;
                    let partesFecha3 = Fecha_envioString.split("-");
                    let fechaFormateada3 = partesFecha3[0] + "-" + partesFecha3[1] + "-" + partesFecha3[2]; // Formato "yyyy-MM-dd"
                    let fechaContratacionDate3 = new Date(fechaFormateada3);
                    Fecha_envio.valueAsDate = fechaContratacionDate3;

                    let Fecha_entregaString = parsedResult[0].Fecha_entrega;
                    let partesFecha2 = Fecha_entregaString.split("-");
                    let fechaFormateada2 = partesFecha2[0] + "-" + partesFecha2[1] + "-" + partesFecha2[2]; // Formato "yyyy-MM-dd"
                    let fechaContratacionDate2 = new Date(fechaFormateada2);
                    Fecha_entrega.valueAsDate = fechaContratacionDate2;

                    Metodo_pago.value = parsedResult[0].Metodo_pago;
                  }
            }
          };
        xhr.send();
        }
      }
      else if(event.target.classList.contains("botonBorrarVenta"))
    {
      const botonBorrarClientes = document.querySelectorAll('.botonBorrarVenta');
      botonBorrarClientes.forEach(boton => {
        boton.addEventListener('click', function() {
            const codigoEliminar = boton.getAttribute('id_vent');
            // Realiza una solicitud para eliminar el dato asociado al ID
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/delete1ControllerVentas.php?Id_Venta=' + codigoEliminar, true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Maneja la respuesta del servidor si es necesario
                    console.log('Respuesta del controlador:', xhr.responseText);
                    // Por ejemplo, podrías recargar la página después de eliminar el dato
                    window.location.href = 'venta.php'; 
                }
            };

            xhr.send();
        });
      });
    }
    });
  }

  if(t6)
  {
    document.querySelector(".t6").addEventListener("click", function(event) {
            if (event.target.classList.contains("botonModal11")) 
      {
      let codigoEdit = event.target.getAttribute("Id_docu");
      let Id_doc = document.getElementById("Id_doc1");
      let tipo = document.getElementById("tipo1");
      let Fecha_creacion = document.getElementById("Fecha_creacion1");
      let Fecha_entrega = document.getElementById("Fecha_entrega1");
      let Total_importe = document.getElementById("Total_importe1");
      let numero = document.getElementById("numero1");


        if (true) { // Coloca tu condición aquí
        
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "./controllers/documentosEdicionControlador.php?Id_doc=" + codigoEdit, true);
          xhr.onreadystatechange = function() 
          {
            if (xhr.readyState == 4 && xhr.status == 200) 
            {
              

              
            console.log("Result 1: " + xhr.responseText);
            console.log("Result 1: " + JSON.parse(xhr.responseText));
            console.log("Result 1: " + xhr.responseText);
                  let parsedResult = JSON.parse(xhr.responseText);

                  if (parsedResult !== false) 
                  {
                    alert(parsedResult[0].Id_doc);
                    // Access the properties using the correct names
                    Id_doc.value = parsedResult[0].Id_doc;
                    tipo.value = parsedResult[0].tipo;
                    let Fecha_creacion1String = parsedResult[0].Fecha_creacion;
                    let partesFecha3 = Fecha_creacion1String.split("-");
                    let fechaFormateada3 = partesFecha3[0] + "-" + partesFecha3[1] + "-" + partesFecha3[2]; // Formato "yyyy-MM-dd"
                    let fechaContratacionDate3 = new Date(fechaFormateada3);
                    Fecha_creacion.valueAsDate = fechaContratacionDate3;
                    let Fecha_entregaString = parsedResult[0].Fecha_entrega;
                    let partesFecha2 = Fecha_entregaString.split("-");
                    let fechaFormateada2 = partesFecha2[0] + "-" + partesFecha2[1] + "-" + partesFecha2[2]; // Formato "yyyy-MM-dd"
                    let fechaContratacionDate2 = new Date(fechaFormateada2);
                    Fecha_entrega.valueAsDate = fechaContratacionDate2;
                    Total_importe.value = parsedResult[0].Total_importe;
                    numero.value = parsedResult[0].numero;
                  }
            }
          };
        xhr.send();
        }
      }
      else if(event.target.classList.contains("botonEliminarDocumento"))
    {
      const botonBorrarClientes = document.querySelectorAll('.botonEliminarDocumento');
      botonBorrarClientes.forEach(boton => {
        boton.addEventListener('click', function() {
            const codigoEliminar = boton.getAttribute('Id_docu');
            // Realiza una solicitud para eliminar el dato asociado al ID
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/delete1ControllerVentas.php?Id_doc=' + codigoEliminar, true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Maneja la respuesta del servidor si es necesario
                    console.log('Respuesta del controlador:', xhr.responseText);
                }
            };

            xhr.send();
        });
      });
    }
    });
  }

  
  if(t7)
  {
    document.querySelector(".t7").addEventListener("click", function(event) {
      if (event.target.classList.contains("botonModal20")) 
      {
      let codigoEdit = event.target.getAttribute("id_al");
      let Id_Almacen = document.getElementById("Id_Almacen_edit");
      let Nombre = document.getElementById("Nombre_al_edit");
      let Direccion = document.getElementById("Direccion_al_edit");
      let Observaciones = document.getElementById("Observaciones_edit");
      let Cantidad_almacenaje = document.getElementById("Cantidad_almacenaje_edit");
      let Productos_Stock = document.getElementById("Productos_Stock_edit");
      let Telefono = document.getElementById("Telefono_edit");


        if (true) { // Coloca tu condición aquí
        
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "./controllers/edicionConsulta1ControllerAlmacenes.php?Id_Almacen=" + codigoEdit, true);
          xhr.onreadystatechange = function() 
          {
            if (xhr.readyState == 4 && xhr.status == 200) 
            {
              

              
            console.log("Result 1: " + xhr.responseText);
            console.log("Result 1: " + JSON.parse(xhr.responseText));
            console.log("Result 1: " + xhr.responseText);
                  let parsedResult = JSON.parse(xhr.responseText);

                  if (parsedResult !== false) 
                  {
                    Id_Almacen.value = parsedResult[0].Id_Almacen;
                    Nombre.value = parsedResult[0].Nombre;
                    Direccion.value = parsedResult[0].Direccion;
                    Observaciones.value = parsedResult[0].Observaciones;
                    Cantidad_almacenaje.value = parsedResult[0].Cantidad_almacenaje;
                    Productos_Stock.value = parsedResult[0].Productos_Stock;
                    Telefono.value = parsedResult[0].Telefono;
                  }
            }
          };
        xhr.send();
        }
      }
      else if(event.target.classList.contains("botonBorrarAlmacen"))
    {
      const botonBorrarClientes = document.querySelectorAll('.botonBorrarAlmacen');
      botonBorrarClientes.forEach(boton => {
        boton.addEventListener('click', function() {
            const codigoEliminar = boton.getAttribute('id_al');
            // Realiza una solicitud para eliminar el dato asociado al ID
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/delete1ControllerAlmacen.php?Id_Almacen=' + codigoEliminar, true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Maneja la respuesta del servidor si es necesario
                    console.log('Respuesta del controlador:', xhr.responseText);
                }
            };

            xhr.send();
        });
      });
    }
    });
  }


   


    
    
    


        


});


let noseque = document.getElementById('noseque');
var lista = [];
var listaSeleccionado = [];
console.log(lista);
 function ajaxPost5() {
    const ajaxRequest = new XMLHttpRequest();

    ajaxRequest.addEventListener("load", function(event) {
        if (this.status === 200) {
            const response = JSON.parse(this.responseText);
            lista = response;
            actualizarInterfaz();
        } else {
            console.error('Error en la solicitud:', this.statusText);
        }
    });

    ajaxRequest.addEventListener("error", function(event) {
        console.error('Error en la solicitud:', event);
    });

    ajaxRequest.open("POST", "./controllers/productosLista.php", true);
    ajaxRequest.send();
}

// Función para actualizar la interfaz de usuario con los datos almacenados en el array 'lista'
function actualizarz() {
    // Aquí puedes actualizar la interfaz de usuario con los datos almacenados en el array 'lista'
    console.log('Datos almacenados en lista:', lista);
    // Por ejemplo, puedes mostrar los datos en la consola
    lista.forEach(function(item) {
        console.log('Nombre:', item.Nombre, '- Precio:', item.Precio);
    });
}



function actualizarInterfaz() {
  // Obtener el div contenedor
  var contenedor = document.getElementById('datos');

  // Limpiar cualquier contenido existente dentro del div
  contenedor.innerHTML = '';

  // Crear el elemento select
  var noseque = document.createElement('select');
  noseque.className = 'js-example-basic-single';
  noseque.name = 'state';
  noseque.id = 'noseque';

  // Agregar opciones al select
  lista.forEach(function(item) {
      var option = document.createElement('option');
      option.value = item.Nombre; 
      option.textContent = item.Nombre; 
      noseque.appendChild(option);
  });

  // Agregar evento change al select
  noseque.addEventListener('change', function() {
      var nombreProducto = noseque.value;
      var productoSeleccionado = lista.find(function(item) {
          return item.Nombre === nombreProducto;
      });
      mostrarProductoSeleccionado(productoSeleccionado);
  });

  // Agregar el select al div contenedor
  contenedor.appendChild(noseque);
}

function handleSelectChange() {
  var nombreProducto = noseque.options[noseque.selectedIndex].value;
  var productoSeleccionado = lista.find(function(item) {
      return item.Nombre === nombreProducto;
  });
  mostrarProductoSeleccionado(productoSeleccionado);
}
function mostrarProductoSeleccionado(producto) {
  // Obtener el div donde se mostrará la información
  var divInfoProducto = document.getElementById('datos2');
  
  // Limpiar el contenido existente en el div
  divInfoProducto.innerHTML = '';
  
  // Crear elementos para mostrar el nombre y el precio del producto
  var idProducto = document.createElement('p');
  idProducto.textContent = 'Id: ' + producto.Id_Producto;
  var nombreProducto = document.createElement('p');
  nombreProducto.textContent = 'Nombre: ' + producto.Nombre;
  
  var precioProducto = document.createElement('p');
  precioProducto.textContent = 'Precio: ' + producto.Precio;

  //-----------------------------------------------------------------------------------------------------
  // Agregar los elementos al div
  divInfoProducto.appendChild(idProducto);
  divInfoProducto.appendChild(nombreProducto);
  divInfoProducto.appendChild(precioProducto);
  listaSeleccionado.push({ Id: producto.Id_Producto , Nombre: producto.Nombre, Precio: producto.Precio });
  console.log(listaSeleccionado);
}
window.addEventListener('load', function() {
  ajaxPost5();
});







const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click",() =>{
    nav.classList.add("visible");
});
cerrar.addEventListener("click",() =>{
    nav.classList.remove("visible");
});

// ----------------------------------------------------------------
const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}



function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}

// 3. Converting HTML table to PDF

const pdf_btn = document.querySelector('#toPDF');
const customers_table = document.querySelector('#customers_table');


const toPDF = function (customers_table) {
    const html_code = `
    <!DOCTYPE html>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <main class="table" id="customers_table">${customers_table.innerHTML}</main>`;

    const new_window = window.open();
     new_window.document.write(html_code);

    setTimeout(() => {
        new_window.print();
        new_window.close();
    }, 400);
}

pdf_btn.onclick = () => {
    toPDF(customers_table);
}

// 4. Converting HTML table to JSON

const json_btn = document.querySelector('#toJSON');

const toJSON = function (table) {
    let table_data = [],
        t_head = [],

        t_headings = table.querySelectorAll('th'),
        t_rows = table.querySelectorAll('tbody tr');

    for (let t_heading of t_headings) {
        let actual_head = t_heading.textContent.trim().split(' ');

        t_head.push(actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase());
    }

    t_rows.forEach(row => {
        const row_object = {},
            t_cells = row.querySelectorAll('td');

        t_cells.forEach((t_cell, cell_index) => {
            const img = t_cell.querySelector('img');
            if (img) {
                row_object['customer image'] = decodeURIComponent(img.src);
            }
            row_object[t_head[cell_index]] = t_cell.textContent.trim();
        })
        table_data.push(row_object);
    })

    return JSON.stringify(table_data, null, 4);
}

json_btn.onclick = () => {
    const json = toJSON(customers_table);
    downloadFile(json, 'json')
}

// 5. Converting HTML table to CSV File

const csv_btn = document.querySelector('#toCSV');

const toCSV = function (table) {
    // Code For SIMPLE TABLE
    // const t_rows = table.querySelectorAll('tr');
    // return [...t_rows].map(row => {
    //     const cells = row.querySelectorAll('th, td');
    //     return [...cells].map(cell => cell.textContent.trim()).join(',');
    // }).join('\n');

    const t_heads = table.querySelectorAll('th'),
        tbody_rows = table.querySelectorAll('tbody tr');

    const headings = [...t_heads].map(head => {
        let actual_head = head.textContent.trim().split(' ');
        return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
    }).join(',') + ',' + 'image name';

    const table_data = [...tbody_rows].map(row => {
        const cells = row.querySelectorAll('td'),
            img = decodeURIComponent(row.querySelector('img').src),
            data_without_img = [...cells].map(cell => cell.textContent.replace(/,/g, ".").trim()).join(',');

        return data_without_img + ',' + img;
    }).join('\n');

    return headings + '\n' + table_data;
}

csv_btn.onclick = () => {
    const csv = toCSV(customers_table);
    downloadFile(csv, 'csv', 'customer orders');
}

// 6. Converting HTML table to EXCEL File

const excel_btn = document.querySelector('#toEXCEL');

const toExcel = function (table) {
    // Code For SIMPLE TABLE
    // const t_rows = table.querySelectorAll('tr');
    // return [...t_rows].map(row => {
    //     const cells = row.querySelectorAll('th, td');
    //     return [...cells].map(cell => cell.textContent.trim()).join('\t');
    // }).join('\n');

    const t_heads = table.querySelectorAll('th'),
        tbody_rows = table.querySelectorAll('tbody tr');

    const headings = [...t_heads].map(head => {
        let actual_head = head.textContent.trim().split(' ');
        return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
    }).join('\t') + '\t' + 'image name';

    const table_data = [...tbody_rows].map(row => {
        const cells = row.querySelectorAll('td'),
            img = decodeURIComponent(row.querySelector('img').src),
            data_without_img = [...cells].map(cell => cell.textContent.trim()).join('\t');

        return data_without_img + '\t' + img;
    }).join('\n');

    return headings + '\n' + table_data;
}

excel_btn.onclick = () => {
    const excel = toExcel(customers_table);
    downloadFile(excel, 'excel');
}

const downloadFile = function (data, fileType, fileName = '') {
    const a = document.createElement('a');
    a.download = fileName;
    const mime_types = {
        'json': 'application/json',
        'csv': 'text/csv',
        'excel': 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    }
    a.href = `
        data:${mime_types[fileType]};charset=utf-8,${encodeURIComponent(data)}
    `;
    document.body.appendChild(a);
    a.click();
    a.remove();
}

var eye = document.getElementById('eye');
var input = document.getElementById('pass');

