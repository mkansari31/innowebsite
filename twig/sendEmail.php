<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP(true);
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'innovative.academy01@gmail.com';
    $mail->Password   = 'Ica3131##';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress("innovative.academy01@gmail.com", "Innovative Group");

    //Content
    $mail->isHTML(true);
    $mail->Subject  = $_POST['subject'];
    $mail->Body     = "Hello Admin,"."<br><br>";
    $mail->Body    .= "Below details has been submitted through Contact form."."<br><br>";
    $mail->Body    .= "User Name: ".$_POST['name']."<br>";
    $mail->Body    .= "User Email: ".$_POST['email']."<br>";
    $mail->Body    .= "User Message: ".$_POST['message']."<br>";
    $mail->send();
    echo true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>