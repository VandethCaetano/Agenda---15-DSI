<?php 

$texto = "agenda 15 vandeth caetano";  

$codificado = password_hash($texto, PASSWORD_DEFAULT); 
echo "Texto Codificado: " . $codificado . "<br>"; 

if (password_verify("agenda 15 vandeth caetano", $codificado)) { 
    echo 'Texto Correto'; 
} else { 
    echo 'Texto Incorreto'; 
}

?>
