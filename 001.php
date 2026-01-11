<?php

// 1️⃣ Función para calcular promedio
function calcularPromedio($notas) {
    return count($notas) > 0
        ? array_sum($notas) / count($notas)
        : 0;
}

// 2️⃣ Array de estudiantes
$estudiantes = [
    "Ana"    => [8, 7, 9],
    "Luis"   => [5, 6, 4],
    "María"  => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

// 3️⃣ Variables de control
$aprobados = 0;
$suspensos = 0;
$mejorPromedio = 0;
$mejorEstudiante = "";

// 4️⃣ Recorrido principal
foreach ($estudiantes as $nombre => $notas) {
    
    $promedio = calcularPromedio($notas);

    // Determinar estado
    $estado = ($promedio >= 6) ? "Aprobado" : "Suspenso";

    // Contadores
    if ($estado == "Aprobado") {
        $aprobados++;
    } else {
        $suspensos++;
    }

    // Comprobar mejor promedio
    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }

    // Mostrar datos por estudiante
    echo "Nombre: $nombre <br>";
    echo "Promedio: " . number_format($promedio,2) . "<br>";
    echo "Estado: $estado <br><br>";
}

// 5️⃣ Resultados finales
echo "Total aprobados: $aprobados <br>";
echo "Total suspensos: $suspensos <br>";
echo "Mejor estudiante: $mejorEstudiante con promedio " . number_format($mejorPromedio,2);

?>
