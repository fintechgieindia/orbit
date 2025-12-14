<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'wegeniofficial@gmail.com';
    $mail->Password = 'YOUR_APP_PASSWORD_HERE'; // App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('wegeniofficial@gmail.com', 'Test');
    $mail->addAddress('divyaramesh5121@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email.';

    $mail->send();
    echo "Email sent successfully!";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
