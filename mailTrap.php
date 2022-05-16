<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mailDestino ="elmanodeveloper@gmail.com";
$nome = "Junin";
$mensagem = "Obrigado pelo seu contato, responderemos ASAP!";
$assunto = "Obrigado pelo seu contato!";
 $mail = new PHPMailer(true);
 $mail->IsSMTP(); // envia por SMTP 
 $mail->CharSet = 'UTF-8';
 $mail->True;
 $mail->SMTPSecure = "tls";
 $mail->Host = "smtp.mailtrap.io"; // Servidor SMTP
 $mail->Port = 2525; 
 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
 $mail->Username = "32cff1d654178b"; // SMTP username
 $mail->Password = "f3e5abcd0c3ade"; // SMTP password
 $mail->From = "elmanodeveloper@gmail.com"; // From
 $mail->FromName = "Sua Empresa" ; // Nome de quem envia o email
 $mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

if(!$mail->Send()) // Envia o email
 { 
 echo "Erro no envio da mensagem";
 } 
    






?>