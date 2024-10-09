<?php
// Include PHPMailer library files
require 'E:\xampp\htdocs\PHPMailer-master\PHPMailer-master\src\PHPMailer.php';  // Update the path to where PHPMailer is located
require 'E:\xampp\htdocs\PHPMailer-master\PHPMailer-master\src\SMTP.php';
require 'E:\xampp\htdocs\PHPMailer-master\PHPMailer-master\src\Exception.php';

// Use PHPMailer namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com';  // Your Gmail address
    $mail->Password = 'your-email-password';  // Your Gmail password or app-specific password
    $mail->SMTPSecure = 'tls';  // Enable TLS encryption, `ssl` is also accepted
    $mail->Port = 587;  // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('khairulislamtushar33@gmail.com');  // Add a recipient

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Message from ' . $_POST['name'];
    $mail->Body    = 'You have received a new message from ' . $_POST['name'] . '<br>' .
                     'Email: ' . $_POST['email'] . '<br><br>' .
                     'Message: ' . nl2br($_POST['message']);

    // Send email
    if ($mail->send()) {
        echo 'Email has been sent successfully';
    }
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
