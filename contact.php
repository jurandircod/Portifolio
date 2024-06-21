<?php
require 'vendor/autoload.php';  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$mail = new PHPMailer(true);

try {

    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars( $_POST['email']);
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host       = 'smtp-mail.outlook.com';  
    $mail->SMTPSecure = 'tls';
    $mail->Username   = '';  
    $mail->Password   = '';  
    $mail->Port       = 587;

    // Remetente
    $mail->setFrom('demonido@outlook.com', "klurgC");

    // Destinatário
    $mail->addAddress('jurandiraparecido19651965@gmail.com', 'jurandir');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Portfolio mensagens';
    $mail->Body    = "nome: $nome <br> email: $email <br> celular: $celular <br> mensagem: $mensagem";
    $mail->AltBody = 'sem suporte html';

    $mail->send();
    header("location: index.php?status=1");
} catch (Exception $e) {
    header("location: index.php?status=2&$mail->ErrorInfo");
}

