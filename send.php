<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {

    $fullname = $_POST['fullname'];
    $Username = $_POST['Username'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        // Server settings                       
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                         // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                     // Enable SMTP authentication
        $mail->Username   = 'priyanshusingh773300@gmail.com';         // SMTP username
        $mail->Password   = 'cfgw bune sqkg zfox';                    // SMTP password (be cautious with this info)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;              // Enable implicit TLS encryption
        $mail->Port       = 465;                                      // TCP port to connect to

        // Recipients
        $mail->setFrom('priyanshusingh773300@gmail.com', 'Registration Form');
        $mail->addAddress('priyanshusingh773300@gmail.com', 'Hamari Website'); // Add a recipient

        // Content
        $mail->isHTML(true);                                          // Set email format to HTML
        $mail->Subject = 'Test Contact Form';
        $mail->Body    = "Sender name - $fullname <br> Sender email - $email <br> sender username - $Username <br> sender number - $number";

        // Send the email
        $mail->send();
        echo "<script>alert('Form has been submitted successfully!');</script>";
        echo "<script>window.location.href = 'index.php';</script>"; 
        // header("Location:index.php");  
        exit();   
    } catch (Exception $e) {
        // Error handling
        // echo "Message could not be sent.Mailer Error: {$mail->ErrorInfo}";
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>
