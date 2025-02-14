<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){
    $mail = new PHPMailer(TRUE);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'fernandarezhak@gmail.com';
    $mail->Password = 'ddvbcgwffuhqxmeh';
    $mail->SMTPSecure = 'SSL';
    $mail->Port = 465;

    $mail->setForm('fernandarezhak@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    $mail->Subject = $_POST['Subject'];
    $mail->Body = $_POST['message'];

    $mail->send();

    echo
}
?>