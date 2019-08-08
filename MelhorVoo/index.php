<?php

$string= str_replace(".","","Melhor preço sem escalas R$ 1.367(1)
Melhor preço com escalas R$ 994 (1)

1 - Incluindo todas as taxas.");

//preg_match_all("/([^ ]+) \([^ ]\)/", $string, $matches);
//$stringnova = preg_replace("/(\W{1,})/", "", $string);
//echo $stringnova;

preg_match_all('/(\d{2,4})/',$string, $matches, PREG_PATTERN_ORDER);
$valor1 = $matches[1][0];
$valor2 = $matches[1][1];

if($valor1>$valor2){
    echo number_format(floatval($valor2), 2, ',', '');
}
else{
    echo number_format(floatval($valor1), 2, ',', '');
}
?>