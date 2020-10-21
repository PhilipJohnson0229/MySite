<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  try{
    $mail->isSMTP();
    $mail->Host = 'mail.philipjakejohnson.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'autoreply@philipjakejohnson.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Newlife123'; // Gmail address Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setFrom('autoreply@philipjakejohnson.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('philip.johnson0229@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    return "SUCCESS";
  } catch (Exception $e){
    return "FAIL";
  }
}
?>
                           