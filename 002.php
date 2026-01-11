<?php

//Función para calcular total del carrito
function calcularTotal($carrito) {
    $total = 0;

    foreach ($carrito as $item) {
        $subtotal = $item["precio"] * $item["cantidad"];
        $total += $subtotal;
    }

    return $total;
}

//Array del carrito
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón",    "precio" => 25,   "cantidad" => 2],
    ["producto" => "Teclado",  "precio" => 45,   "cantidad" => 1],
];

//Mostrar productos
echo "<h3>Detalle del carrito</h3>";

foreach ($carrito as $item) {
    $subtotal = $item["precio"] * $item["cantidad"];

    echo "Producto: " . $item["producto"] . "<br>";
    echo "Precio unitario: $" . $item["precio"] . "<br>";
    echo "Cantidad: " . $item["cantidad"] . "<br>";
    echo "Subtotal: $" . $subtotal . "<br><br>";
}

//Calcular total
$total = calcularTotal($carrito);

//Calcular descuento
$descuento = 0;

if ($total > 1000) {
    $descuento = 0.10; // 10%
} elseif ($total > 500) {
    $descuento = 0.05; // 5%
}

//Cálculos finales
$montoDescuento = $total * $descuento;
$totalFinal = $total - $montoDescuento;

//Mostrar resumen
echo "<h3>Resumen de compra</h3>";
echo "Total sin descuento: $" . number_format($total,2) . "<br>";
echo "Descuento aplicado: $" . number_format($montoDescuento,2) . "<br>";
echo "Total final: $" . number_format($totalFinal,2) . "<br>";

?>
