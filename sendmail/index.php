<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <link rel="stylesheet" href="mail.css">
  <title>Send Mail</title>
</head>

<body >
  <nav>
    
  </nav>
  <div class="container">

    <h2>Alumni Message</h2>

    <form action="index.php" method="post">
      
      <input type="email" name="Alumni_Email" placeholder="Enter the Email of the Alumni" class="text_field">

      <br>

      <!-- <label for="Alumni_sub" id="Alumni_sub">Subject : </label> -->
      <input id="Alumni_Sub_inp" type="text" name="Alumni_sub" placeholder="Enter the Subject of mail" class="text_field">

      <br>


      <!-- <label for="Alumni_message">Message : </label> -->
      <textarea name="Alumni_message" id="Alumni_message" placeholder="your message goes here!!!" cols="30" rows="10"></textarea>

      <br>

      <button type="submit" name="btn" value="Submit">Submit</button>
      <br>
    </form>
  </div>
  

  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';
  require 'PHPMailer-master/PHPMailer-master/src/Exception.php';

  if (isset($_POST["btn"])) {

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'scoeprayas@gmail.com';
    $mail->Password = 'dtiiannjhdbwjlqn';



    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('scoeprayas@gmail.com'); //--> my email
    $mail->addAddress($_POST["Alumni_Email"]);
    $mail->isHTML(true);



    $mail->Subject = ($_POST["Alumni_sub"]);

    $mail->Body = ($_POST["Alumni_message"]);

    // $mail->send();

    try {

      if ($mail->send()) {
  ?>
        <script>
          alert("Message Sent Successfully!");
        </script>
  <?php
      }
    } catch (Exception $e) {
      echo "Message Could Not be Sent! {$mail->ErrorInfo}";
    }
  }
  ?>

</body>


</html>