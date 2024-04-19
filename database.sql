CREATE DATABASE Fresas;

use Fresas;

-- Crear la tabla ctg_Producto
CREATE TABLE ctg_Producto (
    ID_Producto INT auto_increment,
    Nombre VARCHAR(255),
    Descripcion TEXT,
    Precio_Unitario DECIMAL(10, 2),
    Stock_Disponible INT,
    Stock_Minimo INT,
    PRIMARY KEY (ID_Producto)
);

-- Crear la tabla ctg_Proveedor
CREATE TABLE ctg_Proveedor (
    ID_Proveedor INT auto_increment,
    Nombre VARCHAR(255),
    Contacto TEXT,
    Direccion TEXT,
    Telefono VARCHAR(20),
    primary key (ID_Proveedor)
);

-- Crear la tabla ms_compras
CREATE TABLE ms_Compras (
    ID_Compra INT auto_increment,
    ID_Producto INT,
    ID_Proveedor INT,
    Cod_Barra INT,
    Cantidad INT,
    Precio_Unitario_Compra DECIMAL(10, 2),
    Fecha_Compra DATE,
    FOREIGN KEY (ID_Producto) REFERENCES ctg_Producto(ID_Producto),
    FOREIGN KEY (ID_Proveedor) REFERENCES ctg_Proveedor(ID_Proveedor),
    primary key (ID_Compra)
);

-- Crear la tabla ctg_cliente
CREATE TABLE ctg_cliente (
    ID_Cliente INT auto_increment,
    Nombre VARCHAR(255),
    Contacto TEXT,
    Direccion TEXT,
    Telefono VARCHAR(20),
    primary key (ID_Cliente)
);

-- Crear la tabla ms_ventas
CREATE TABLE ms_Ventas (
    ID_Venta INT auto_increment,
    ID_Producto INT,
    ID_Cliente INT,
    Cod_Barra INT,
    Cantidad INT,
    Precio_Unitario_Venta DECIMAL(10, 2),
    Fecha_Venta DATE,
    FOREIGN KEY (ID_Producto) REFERENCES ctg_Producto(ID_Producto),
    FOREIGN KEY (ID_Cliente) REFERENCES ctg_Cliente(ID_Cliente),
    primary key (ID_Venta)
);

