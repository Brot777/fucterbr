<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "este message fue enviado por: ".$nombre."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "message: ".$mensaje."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'fucterbr@gmail.com';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='#';</script>";

 ?>