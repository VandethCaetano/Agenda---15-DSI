<?php 

$texto = 'agenda 15 vandeth caetano'; 

$criptografada = base64_encode($texto); 

echo "Resultado da codificação usando Base64: " . $criptografada . "<br>"; 

$textoOriginal = base64_decode($criptografada); 

echo "Resultado da decodificação usando Base64: " . $textoOriginal; 

?>
