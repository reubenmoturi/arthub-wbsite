<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->username = 'reubenmoturim@gmail.com'; // your gmail.
    $mail->password = 'vzqq ejcq tity pyzx'; // your gmail app password.
    $mail->SMTPSecure = 'ssl';
    $mail->port = 465;

    $mail->setFrom('reubenmoturim@gmail.com'); // your gmail

    $mail-> addAddress($_POST["email"]);

    $mail-> isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo 
    "
    <script>
    alert('Sent Successfully');
    document.location.href ='contactus.php';
    </script>
    ";
}
?>
