<?php

include "connect.php";

if ($_GET["t"] == 1){

    // Consulta para seleccionar todos los registros de ctg_Proveedor
$sql = "SELECT * FROM ctg_Proveedor";
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result->num_rows > 0) {
    // Set headers to force download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=proveedores.csv');

    // Abrir un flujo de salida de PHP
    $output = fopen('php://output', 'w');

    // Escribir encabezados en el archivo CSV
    fputcsv($output, ["ID", "Nombre", "Email", "Contacto", "Teléfono"]);

    // Escribir los datos de los proveedores en el archivo CSV
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, [$row["ID_Proveedor"], $row["Nombre"], $row["Contacto"], $row["Direccion"], $row["Telefono"]]);
    }

    // Cerrar el flujo de salida
    fclose($output);
} else {
    echo "No se encontraron registros de proveedores";
}

}else {

    // Consulta para seleccionar todos los registros de ctg_Proveedor
$sql = "SELECT * FROM ctg_Cliente";
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result->num_rows > 0) {
    // Set headers to force download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=clientes.csv');

    // Abrir un flujo de salida de PHP
    $output = fopen('php://output', 'w');

    // Escribir encabezados en el archivo CSV
    fputcsv($output, ["ID", "Nombre", "Email", "Contacto", "Teléfono"]);

    // Escribir los datos de los proveedores en el archivo CSV
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, [$row["ID_Cliente"], $row["Nombre"], $row["Contacto"], $row["Direccion"], $row["Telefono"]]);
    }

    // Cerrar el flujo de salida
    fclose($output);
} else {
    echo "No se encontraron registros de proveedores";
}

}

// Cerrar la conexión a la base de datos
$conn->close();


?>
