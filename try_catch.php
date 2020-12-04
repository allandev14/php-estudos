<?php

// Try and Catch

error_reporting(-1);

set_error_handler(function($code, $message){
    throw new ErrorException($message, $code);
});


$numerador = 20;
$denominador = 0;

try {
    echo $numerador / $denominador;
    } catch(\Exception $error) {
        echo "{$error->getMessage()}"; 
    } finally {
        echo "<br> fim da execução....<br/>";
    }