<?php

$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

// Convertir a minúsculas
$texto = strtolower($texto);

//Eliminar signos de puntuación simples
$texto = preg_replace('/[^\p{L}\p{N}\s]/u', '', $texto);

//Convertir texto en array de palabras
$palabras = explode(" ", $texto);

//Eliminar palabras de menos de 3 letras
$palabrasFiltradas = [];

foreach ($palabras as $palabra) {
    if (strlen($palabra) >= 3) {
        $palabrasFiltradas[] = $palabra;
    }
}

//Contar palabras totales
$totalPalabras = count($palabrasFiltradas);

//Contar cuántas veces aparece cada palabra
$conteo = array_count_values($palabrasFiltradas);

//Filtrar solo palabras que aparecen más de una vez
$repetidas = [];

foreach ($conteo as $palabra => $cantidad) {
    if ($cantidad > 1) {
        $repetidas[$palabra] = $cantidad;
    }
}

//Encontrar la palabra más repetida
$maxRepeticiones = 0;
$palabraMasRepetida = "";

foreach ($conteo as $palabra => $cantidad) {
    if ($cantidad > $maxRepeticiones) {
        $maxRepeticiones = $cantidad;
        $palabraMasRepetida = $palabra;
    }
}

//Mostrar resultados

echo "Texto original: $texto <br><br>";

echo "Total de palabras (>=3 letras): $totalPalabras <br><br>";

echo "Palabras repetidas:<br>";

if (count($repetidas) > 0) {
    foreach ($repetidas as $palabra => $cantidad) {
        echo "$palabra → $cantidad veces<br>";
    }
} else {
    echo "No hay palabras repetidas<br>";
}

echo "<br>Palabra más repetida: $palabraMasRepetida ($maxRepeticiones veces)";

?>
