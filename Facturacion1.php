<?php
// Datos de la factura
$cliente = "Ramon Amaya";
$fecha = "19 de julio de 2023";

// Productos
$productos = array(
    array(
        "nombre" => "Producto 1",
        "precio" => 10,
        "cantidad" => 2
    ),
    array(
        "nombre" => "Producto 2",
        "precio" => 15,
        "cantidad" => 1
    ),
    array(
        "nombre" => "Producto 3",
        "precio" => 20,
        "cantidad" => 3
    )
);

// Calcula el total
$total = 0;
foreach ($productos as $producto) {
    $subtotal = $producto['precio'] * $producto['cantidad'];
    $total += $subtotal;
}

// Imprime la factura
echo "Factura\n";
echo "Cliente: " . $cliente . "\n";
echo "Fecha: " . $fecha . "\n\n";
echo "Productos:\n";
foreach ($productos as $producto) {
    echo $producto['nombre'] . " - $" . $producto['precio'] . " x " . $producto['cantidad'] . "\n";
}
echo "\n";
echo "Total: $" . $total;
?>
