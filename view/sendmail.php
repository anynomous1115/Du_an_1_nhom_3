<?php
    extract($checkemail);
    $emailsend = '';
    $repassword = '';
    foreach($checkemail as $mail){
        extract($mail);
        $emailsend = $email;
        $repassword = $password;
    }
   
include  "PHPMailer-6.7.1/src/PHPMailer.php";
include  "PHPMailer-6.7.1/src/Exception.php";
include  "PHPMailer-6.7.1/src/OAuthTokenProvider.php";
include  "PHPMailer-6.7.1/src/POP3.php";
include  "PHPMailer-6.7.1/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
                              // Enable SMTP authentication
    $mail->Username = 'hoteliq102@gmail.com';                 // SMTP username
    $mail->Password = 'llnbnnljfmeygihr';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('hoteliq102@gmail.com', 'HOTELIQ ');
    $mail->addAddress($emailsend);     // Add a recipient              // Name is optional

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your Password';
    $mail->Body    = 'Your Password is '.$repassword;

    $mail->send();
    echo '<script>alert("Mật khẩu của bạn đã được gửi vào mail, Bạn vui lòng xem email");</script>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}