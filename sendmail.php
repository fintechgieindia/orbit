<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/phpmailer/src/Exception.php';
require_once __DIR__ . '/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'error';
    exit;
}

$name     = $_POST['username'] ?? '';
$email    = $_POST['email'] ?? '';
$services = $_POST['services'] ?? '';
$phone    = $_POST['phone'] ?? '';
$message  = $_POST['message'] ?? '';

if ($name === '' || $email === '' || $services === '' || $phone === '' || $message === '') {
    echo 'error';
    exit;
}

$mail = new PHPMailer(true);

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

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';

    $mail->Body = "
        <strong>Name:</strong> {$name}<br>
        <strong>Email:</strong> {$email}<br>
        <strong>Phone:</strong> {$phone}<br>
        <strong>Services:</strong> {$services}<br><br>
        <strong>Message:</strong><br>{$message}
    ";

    $mail->send();
    echo 'success';

} catch (Exception $e) {
    echo 'error';
}
