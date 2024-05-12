<?php
function bubbleSort($arr) {
    $length = count($arr);
    for ($i = 0; $i < $length-1; $i++) {
        for ($j = 0; $j < $length-$i-1; $j++) {
            if ($arr[$j] < $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

// Lista de números
$lista = array(5, 2, 9, 1, 5, -3, 0, -8);

// Mostrar lista antes de ordenar
echo "Lista antes de ordenar: " . implode(", ", $lista) . "\n";

// Ordenar la lista usando bubbleSort
$listaOrdenada = bubbleSort($lista);

// Mostrar lista después de ordenar
echo "Lista después de ordenar: " . implode(", ", $listaOrdenada) . "\n";
?>
