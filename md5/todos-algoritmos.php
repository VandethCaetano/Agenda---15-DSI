<?php 

$texto = "agenda 15 vandeth caetano";  

foreach (hash_algos() as $v) {  
    $codificado = hash($v, $texto, false);  
    echo "Algoritmo: " . $v . "<br>"; 
    echo "Tamanho: " . strlen($codificado) . "<br>"; 
    echo "Texto Codificado: " . $codificado . "<br><br>"; 
}

?>
