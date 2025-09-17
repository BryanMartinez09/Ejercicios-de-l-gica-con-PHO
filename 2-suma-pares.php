\
<?php
// ===========================================
// Ejercicio 2: Suma de Números Pares
// -------------------------------------------
// Uso (CLI):
//   php 2-suma-pares.php "10,15,22,33,40,7,8"
// Si no pasas argumentos, usa un ejemplo por defecto.
// ===========================================

function parse_numbers_from_cli(?string $csv): array {
    if ($csv === null || trim($csv) === "") $csv = "10,15,22,33,40,7,8";
    $parts = array_map("trim", explode(",", $csv));
    $nums = [];
    foreach ($parts as $p) {
        if ($p === "") continue;
        if (!is_numeric($p)) {
            // ignoramos valores no numéricos para mantener el flujo
            continue;
        }
        $nums[] = (int)round((float)$p);
    }
    return $nums;
}

$arg = $argv[1] ?? null;
$numeros = parse_numbers_from_cli($arg);

$sumaPares = 0;
foreach ($numeros as $n) {
    if ($n % 2 === 0) {
        $sumaPares += $n;
    }
}

echo "Array de números:\n";
print_r($numeros);

echo "\nSuma de pares: $sumaPares\n";
echo "Listo. ✅\n";
