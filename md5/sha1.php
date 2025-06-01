<?php 

$texto = 'agenda 15 vandeth caetano'; 

$codificado = sha1($texto); 

echo "Resultado do texto codificado usando SHA1: " . $codificado; 

?>
