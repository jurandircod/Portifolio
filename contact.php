<?php
require 'vendor/autoload.php';  // Inclua o autoloader gerado pelo Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  // Host SMTP do Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = '';  // Seu usuário SMTP (seu email do Gmail)
    $mail->Password   = '';  // Sua senha SMTP (senha do Gmail ou senha de aplicativo)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Remetente
    $mail->setFrom('jurandiraparecido19651965@gmail.com', 'teste');

    // Destinatário
    $mail->addAddress('jurandiraparecido19651965@gmail.com', 'jurandir');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Assunto do E-mail';
    $mail->Body    = 'Corpo do e-mail em <b>HTML</b>';
    $mail->AltBody = 'Corpo do e-mail em texto simples para clientes de e-mail que não suportam HTML';

    $mail->send();
    echo 'Mensagem enviada com sucesso';
} catch (Exception $e) {
    echo "Mensagem não pôde ser enviada. Erro de envio: {$mail->ErrorInfo}";
}
