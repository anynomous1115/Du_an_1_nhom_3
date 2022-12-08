<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;//Enable SMTP authentication
    $mail->Username = "bvh18112003@gmail.com";// SMTP username
    $mail->Password = 'djdubbogljovgqzb'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    //Recipients
    $mail->addAddress($email); // Add a recipient
     // Name is optional
   /* $mail->addReplyTo('info@example.com', 'Information');*/
    /*$mail->addBCC('bcc@example.com');*/
    // Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name*/
    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'Cập nhật lại mật khẩu';
    $mail->Body = 'Mật khẩu của bạn là:'.$password;
    /*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/
    $mail->send();
    echo '<script>alert("Bạn hãy kiểm tra lại email để nhận lại mật khẩu)</script>' ;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}