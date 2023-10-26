<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer//src/SMTP.php';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["email"];

    $subject = "Change Password";
    $message = '<p>Click this link to change your password: <a href="localhost/change-password.php">Change Password</a></p>';

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'koayjingwei1@gmail.com'; // Your SMTP username
        $mail->Password = 'lqip awcr axnq okxm'; // Your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('koayjingwei1@gmail.com'); // Your email address
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo "Email sent successfully to $to.";
    } catch (Exception $e) {
        echo "Email sending failed: {$mail->ErrorInfo}";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
