<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '/../var/www/html/php/estudos/vendor/autoload.php';

// var_dump($_POST);

$dados = [
    'nome' => $_POST['nome'] ?? "",
    'pais' => strtoupper($_POST['pais']) ?? "",
    'mensagem' => $_POST['mensagem'] ?? "",
];

$mail = new PHPMailer(true);

try{
    // $mail->SMPTDebug SMTP::DEBUG_SERVER; Linha para realização de Debugs no sistema
    $mail->isSMTP();
    $mail->Host = '';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail-> Port = 587;
    $mail->CharSet = 'UTF-8';
} catch(\Exception $e) {
        echo  $e->getMessage(); 
}