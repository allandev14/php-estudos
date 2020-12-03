<?php

// strlen 

$nome =  "Fernanda";
echo strlen($nome); // realiza a contagem de quantos caractres temos na string
echo "<br>";

// Str_replace
$troca_nome = "Bruna Santos";
$depois_nome = str_replace('Bruna', 'Angelica', $troca_nome);
/* realiza a troca da primeira palavra pela segunda de maneira agil */

    echo $depois_nome. "<br>";

// Criptografia com PHP

$md5 = md5('12345');

$sha1 = $sha1('12345');

echo $md5. "<br>";
echo $sha1. "<br>";

