CREATE DATABASE tienda;
USE tienda;


Create TABLE Proveedores_Clientes(
    codigo int AUTO_INCREMENT primary key,
    tipo int not null, 
    Nombre VARCHAR(50),
    Direccion VARCHAR(100),
    N_telefono VARCHAR(15),
    Metodo_pago VARCHAR(20),
    Correo VARCHAR(100)
);


CREATE TABLE Productos (
    Id_Producto INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Precio DECIMAL(8, 2),
    Stock INTEGER,
    Nombre VARCHAR(100),
    Especificaciones VARCHAR(100),
    Categoria VARCHAR(100),
    Imagen VARCHAR(100),
    Precio_Costo DECIMAL(8, 2),
    tipo_componente VARCHAR(50)
);

CREATE TABLE Almacen (
    Id_Almacen INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Id_Responsable INT,
    Telefono INT,
    Productos_Stock INTEGER,
    Cantidad_almacenaje INTEGER(6),
    Nombre VARCHAR(100),
    Direccion VARCHAR(100),
    Observaciones VARCHAR(100)
);



CREATE TABLE Empleados (
    Id_Empleado INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(9),
    Telefono INT,
    Correo VARCHAR(100),
    Usuario varchar(30),
    Contrasena varchar(15),
    Salario INTEGER(6),
    Nombre VARCHAR(100),
    Apellidos VARCHAR(100),
    Departamento VARCHAR(100),
    Direccion VARCHAR(100),
    Fecha_Contratacion DATE,
    Id_Almacen INT UNSIGNED,
    FOREIGN KEY (Id_Almacen) REFERENCES Almacen(Id_Almacen)
);
CREATE TABLE Documentos (
    Id_doc INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tipo INT NOT NULL,
    Fecha_creacion DATE,
    Fecha_entrega DATE,
    Total_importe DECIMAL(8, 2),
    numero VARCHAR(30),
    Id_Empleado INT UNSIGNED,
    Id_proveedores_clientes INT,
    Id_Almacen INT UNSIGNED,
    Id_Producto INT UNSIGNED,
    Nombre_Producto VARCHAR(255),
    Precio_Producto DECIMAL(8, 2)
);

ALTER TABLE Empleados ADD FOREIGN KEY (Id_Almacen) REFERENCES Almacen(Id_Almacen);
ALTER table Documentos add FOREIGN KEY (Id_Empleado) REFERENCES Empleados(Id_Empleado);
ALTER table Documentos add FOREIGN KEY (Id_proveedores_clientes) REFERENCES Proveedores_Clientes(codigo);
ALTER table Documentos add FOREIGN KEY (Id_Almacen) REFERENCES Almacen(Id_Almacen);
ALTER table Documentos add FOREIGN KEY (Id_Producto) REFERENCES Productos(Id_Producto);


CREATE TABLE escandallo (
    Id_Relacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Cantidad INT,
    Tiempo VARCHAR(50),
    Id_Producto INT UNSIGNED,
    FOREIGN KEY (Id_Producto) REFERENCES Productos(Id_Producto)
);

ALTER TABLE Empleados
ADD Seguridad VARCHAR(255);

ALTER TABLE Empleados
ADD Contrasena2 VARCHAR(255);