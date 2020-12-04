<?php

// var_dump($_POST);

$nome = $_POST['nome'] ?? 'não informado';

echo "O nome informado no formulário foi <br>{$nome}<br/>";

