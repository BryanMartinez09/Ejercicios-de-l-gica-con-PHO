\
<?php
// ===========================================
// Ejercicio 3: Frecuencia de Caracteres
// -------------------------------------------
// Uso (CLI):
//   php 3-frecuencia-caracteres.php "Hola mundo"
// Si no pasas argumentos, usa un ejemplo por defecto.
// Nota: Soporta UTF-8 (acentos/emoji) si tienes mbstring.
// ===========================================

// Leemos el texto desde args o usamos uno por defecto
$texto = $argv[1] ?? "Hola mundo";

// Normalizamos a UTF-8 por si acaso
if (!mb_detect_encoding($texto, 'UTF-8', true)) {
    $texto = utf8_encode($texto);
}

// Intentamos dividir con mb_str_split (PHP 7.4+ con mbstring)
if (function_exists('mb_str_split')) {
    $chars = mb_str_split($texto);
} else {
    // Fallback: regex para dividir en puntos de código UTF-8
    $chars = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
}

$frecuencia = [];
foreach ($chars as $c) {
    if (isset($frecuencia[$c])) {
        $frecuencia[$c]++;
    } else {
        $frecuencia[$c] = 1;
    }
}

echo "Texto analizado: \"$texto\"\n\n";
echo "Frecuencia de caracteres:\n";
// Mostramos ordenado por carácter para lectura estable
ksort($frecuencia, SORT_NATURAL);
foreach ($frecuencia as $car => $count) {
    // Mostramos espacios y saltos de línea con etiquetas visibles
    $visible = $car;
    if ($car === " ") $visible = "[espacio]";
    if ($car === "\n") $visible = "[\\n]";
    if ($car === "\t") $visible = "[\\t]";
    echo "  {$visible} => {$count}\n";
}

echo "\nTip: Puedes ignorar espacios/puntuación filtrando antes de contar.\n";
echo "Listo. 🧮\n";
