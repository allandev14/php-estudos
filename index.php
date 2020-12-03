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

$md5 = md5('12345'); // padrão de criptografia mais antigo com 128 caracteres

$sha1 = sha1('12345'); // padrão de criptografia mais recente sucessor do md5

echo $md5. "<br>";
echo $sha1. "<br>";

// Exemplos com codificação do nome 
$nome_cript = "Carla";
$nome_codificado = base64_encode($nome_cript);
$nome_Decodificado = base64_decode($nome_cript);

echo $nome_cript ."<br>";
echo $nome_codificado. "<br>";
echo $nome_Decodificado. "<br>";


