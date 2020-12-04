<?php

define('DRIVER', 'mysql');
define('DATABASE', "teste");
define('DATABASE_USER', 'root');
define('DATABASE_PASS', 'secret');

function getConection(){

    return DRIVER .", " .DATABASE. ", " .DATABASE_USER. ", " . DATABASE_PASS;
}