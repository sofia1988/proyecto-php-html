<?php
require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;


function sendMail($subject,$body,$email,$name,$html = false){
    //servidor
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '4e915abbc18341';
    $phpmailer->Password = '26ced88f668ab9';

    //destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'MiEmpresa');
    $phpmailer->addAddress($email, $name); 

    //contenido
    $phpmailer->isHTML($html);                               
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    
    //enviar
    $phpmailer->send();
}
?>