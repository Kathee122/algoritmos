<?php
function mergeSort($arr) {
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    
    $mid = (int)($length / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    
    $left = mergeSort($left);
    $right = mergeSort($right);
    
    return merge($left, $right);
}

function merge($left, $right) {
    $result = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }
    
    return $result;
}

// Lista de palabras
$lista = array("manzana", "banana", "pera", "uva", "cereza", "sandía");

// Mostrar lista antes de ordenar
echo "Lista antes de ordenar: " . implode(", ", $lista) . "\n";

// Ordenar la lista usando mergeSort
$listaOrdenada = mergeSort($lista);

// Mostrar lista después de ordenar
echo "Lista después de ordenar: " . implode(", ", $listaOrdenada) . "\n";
?>
