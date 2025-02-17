<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Array original: " . implode(", ", $numeros) . "\n";

$numerosSorteados = array_rand($numeros, 5);
echo "Array sorteado: " . implode(", ", $numerosSorteados) . "\n";

$tresMaioresNumeros = array_slice($numerosSorteados, 2);
$tresMaioresNumeros = array_reverse($tresMaioresNumeros);
echo "Os três maiores números: " . implode(", ", $tresMaioresNumeros) . "\n";

// ---------------------------------------------------------------------------------

$texto = "Lucas Degrande,1993,Programador";
$arrayTexto = explode(",", $texto);
echo "Informações separadas (Array do Texto): " . implode(", ", $arrayTexto) . "\n";

// ---------------------------------------------------------------------------------

$array = ["Lucas", "Degrande", "Danyelle", "Pereira", "Silva", "Degrande"];

function ordenaArray($array) {
    sort($array);
    return $array;
}

$arrayOrdenado = ordenaArray($array);

echo "Array ordenado: " . implode(", ", $arrayOrdenado) . "\n";