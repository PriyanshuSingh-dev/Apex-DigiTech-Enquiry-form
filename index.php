<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="send.php" method="post">
            <h5> <img src="img/Apex-IT-Solutions_top-logo-removebg-preview.png" alt=""></h5>
            <h1>ENQUIRY FORM</h1>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="full name" name="fullname" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="Username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input id="email" type="email" name="email" placeholder="Email" required>
                    <i class='bx bxl-gmail'></i>
                </div>
                <div class="input-field">
                    <input type="number"  name="number" placeholder=" Phone Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
            </div>
            <label> <input type="checkbox">
                I hereby declare that the above information provided is true and correct
            </label>
            <button name="send" type="submit" class="btn">SEND</button>
        </form>
    </div>
</body>
</html>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {

    $fullname = $_POST['fullname'];
    $Username = $_POST['Username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $send = $_POST['send'];
    

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
        header("Location: " . $_SERVER['index.php']);
        exit();   
    } catch (Exception $e) {
        // Error handling
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
