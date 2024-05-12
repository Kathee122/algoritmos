<?php
function insertionSort($arr) {
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Lista de nombres
$nombres = array("Juan", "María", "Pedro", "Ana", "Luis", "Sofía");

// Mostrar lista antes de ordenar
echo "Lista antes de ordenar: " . implode(", ", $nombres) . "\n";

// Ordenar la lista usando insertionSort
$nombresOrdenados = insertionSort($nombres);

// Mostrar lista después de ordenar
echo "Lista después de ordenar: " . implode(", ", $nombresOrdenados) . "\n";
?>
