<?php 
function calcularPromedio($notas) {
    return count($notas) > 0
        ? array_sum($notas) / count($notas)
        : 0;
}
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];
foreach ($estudiantes as $nombre => $notas) {
    
    $promedio = calcularPromedio($notas);

    $estado = ($promedio >= 6) ? "Aprobado" : "Suspenso";

    echo "Nombre: $nombre <br>";
    echo "Promedio: " . number_format($promedio, 2) . "<br>";
    echo "Estado: $estado <br><br>";
}
?>