<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/PHPMailer-master/src/Exception.php';


  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;

  $mail->Username = 'scoeprayas@gmail.com';
  $mail->Password = 'dtiiannjhdbwjlqn';



  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->setFrom('scoeprayas@gmail.com'); //--> my email
  $mail->addAddress('podere5394@mirtox.com');
  $mail->isHTML(true);



  $mail->Subject = "No reply";

  $mail->Body = "Hello world";

  $mail->send();

  echo " Done ";



?>

