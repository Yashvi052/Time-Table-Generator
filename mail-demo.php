<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'phpmysql.project10@gmail.com';                     //SMTP username
    $mail->Password   = 'project@123';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('phpmysql.project10@gmail.com', 'Project');
    $mail->addAddress('gandhibhavya00@gmail.com', 'Bhavya');     //Add a recipient

    //Attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'PHP Project GLS';
    $mail->Body    = 'Hi Here is our <b>Project</b>.';
    $mail->AltBody = 'Hi Here is our <b>Project</b>.';

    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
