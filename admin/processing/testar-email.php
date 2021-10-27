<?php

require("./../vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$envio = false;

$mail = new PHPMailer(true);
try {
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $_POST['enderecoGmail'];
    $mail->Password   = $_POST['senhaGmail'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->setFrom($_POST['enderecoGmail'], 'Site Alternativa');
    $mail->addAddress($_POST['emailCadastroCurriculos'], 'Atendimento Alternativa');
    /*$mail->addAttachment($_FILES['arquivo']['tmp_name'], $_FILES['arquivo']['name']);*/
    $mail->isHTML(true);
    $mail->Subject = "E-mail de teste";
    $mail->Body    = 'Este e-mail foi enviado para testar o cadastro de email e senha do gmail. Por favor, não responda.';
    $mail->send();
    $envio = true;
} catch (Exception $e) {
    $envio = false;
}

echo json_encode([$envio]);