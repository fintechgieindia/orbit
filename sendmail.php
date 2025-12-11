<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){

$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require __DIR__ . '/PHPMailer/src/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'wegeniofficial@gmail.com';
    $mail->Password = 'hfqw oqyz myak tkyc';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('wegeniofficial@gmail.com', 'Website Contact Form');
    $mail->addAddress('divyaramesh5121@gmail.com');

    $mail->Subject = "New Contact Form Submission";
    $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    $mail->send();

    // SUCCESS FLAG
    $_SESSION['form_success'] = true;
    header("Location: contact.php"); // YOUR PAGE NAME HERE
    exit();

} catch (Exception $e) {
    echo "Email could not be sent.";
}
}
?>
