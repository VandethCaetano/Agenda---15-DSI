<?php 

$texto = 'agenda 15 vandeth caetano'; 

$criptografada = hash('ripemd160', $texto); 
echo "Resultado da criptografia usando função hash com o algoritmo ripemd160: " . $criptografada . "<br>"; 

$criptografada = hash('sha256', $texto); 
echo "Resultado da criptografia usando função hash com o algoritmo sha256: " . $criptografada . "<br>"; 

?>
