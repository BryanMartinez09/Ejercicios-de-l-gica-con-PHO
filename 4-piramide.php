\
<?php
// ===========================================
// Ejercicio 4: Pirámide de Asteriscos (bucles anidados)
// -------------------------------------------
// Uso (CLI):
//   php 4-piramide.php 5
// Si no pasas argumentos, imprime 5 filas por defecto.
// ===========================================

// Número de filas (desde CLI o 5 por defecto)
$filas = isset($argv[1]) && is_numeric($argv[1]) ? max(1, (int)$argv[1]) : 5;

for ($i = 1; $i <= $filas; $i++) {
    // Imprimir espacios a la izquierda
    for ($j = 1; $j <= $filas - $i; $j++) {
        echo " ";
    }
    // Imprimir asteriscos (patrón 2*i - 1)
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo PHP_EOL;
}

echo "Listo. 🌟\n";
