<?php

// Globais PHP

$nome = $_GET['nome'] ?? 'não informado';
$sobrenome = $_GET['sobrenome'] ?? 'não informado';

echo "{$nome} <br>";
echo "{$sobrenome} <br>";
