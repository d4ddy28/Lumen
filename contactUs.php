<?php
$nome=$_POST['name'];
$email=$_POST['email'];
$assunto=$_POST['subject'];
$msg=$_POST['message'];

$mensagem= '<b>Nome: </b>'.$nome.'<br>';
$mensagem.= '<b>E-Mail: </b>'.$email.'<br>';
$mensagem.= '<b>Assunto: </b>'.$assunto.'<br>';
$mensagem.= '<b>Mensagem: </b>'.$msg.'<br>';

// Include packages and files for PHPMailer and SMTP protocol:
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Initialize PHP Mailer and set SMTP as mailing protocol:
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

// Set required parameters for making an SMTP connection like server, port and account credentials.
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = true;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "lumen.solutions.geral@gmail.com";
$mail->Password   = "Lumen1234@";

$mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO

 //Recipients
$mail->setFrom('lumen.solutions.geral@gmail.com', 'lumen'); 
$mail->addAddress('receptor@seudominio.com.br');
$mail->addReplyTo($email, $nome);

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Mensagem do Formulário'; //ASSUNTO
$mail->Body    = $mensagem;  //CORPO DA MENSAGEM
$mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT


if(!$mail->Send()) {
    echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('index.php');</script>";
 }else{
    echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('index.php');</script>";
 }
 die

?>