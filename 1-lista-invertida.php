\
<?php
// ===========================================
// Ejercicio 1: Lista Invertida
// -------------------------------------------
// Uso (CLI):
//   php 1-lista-invertida.php "1,2,3,4,5"
// Si no pasas argumentos, usa un ejemplo por defecto.
// ===========================================

// Función utilitaria: convierte "1,2,3" -> [1,2,3]
function parse_array_from_cli(?string $csv): array {
    if ($csv === null || trim($csv) === "") return [1, 2, 3, 4, 5];
    $parts = array_map("trim", explode(",", $csv));
    // Convertimos a números si aplica
    $nums = [];
    foreach ($parts as $p) {
        if ($p === "") continue;
        if (!is_numeric($p)) {
            // Si no es número, lo dejamos como string para ser flexible
            $nums[] = $p;
        } else {
            // cast conservador (int si es entero, float si no)
            $nums[] = (strpos($p, ".") !== false) ? (float)$p : (int)$p;
        }
    }
    return $nums;
}

// Tomamos el primer argumento como CSV
$arg = $argv[1] ?? null;
$numeros = parse_array_from_cli($arg);

// array_reverse hace el trabajo pesado y NO modifica el original
$invertida = array_reverse($numeros);

// Salida legible
echo "Array original:\n";
print_r($numeros);

echo "\nArray invertido:\n";
print_r($invertida);

echo "\nListo. 👌\n";
