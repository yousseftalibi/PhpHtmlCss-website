<?php 
include '../ressources/database/db_connection.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;

$conn = OpenCon();
session_start();
if($_GET['username']) {

$newPass= bin2hex(random_bytes(8));

mysqli_query($conn, "UPDATE `users` SET `password` = '$newPass' WHERE `username` = '{$_GET['username']}' " );
sendMail("Password Rest", 'Bonjour, <b>'.$_GET['username'].'</b>, votre nouveau mot de passe est '.$newPass, "wifitste@gmail.com");
header('Location: Cpanel.php'); 
}


function sendMail($subject, $body, $destination){
    $adresse = $destination;
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Timeout = 20;
    $mail->Host = 'smtp.office365.com';
    $mail->Port       = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth   = true;
    $mail->Username = 'yousseftalibi@outlook.com';
    $mail->Password = '';
    $mail->SetFrom('yousseftalibi@outlook.com', 'FromEmail');
    $mail->addAddress($adresse, 'ToEmail');
    $mail->IsHTML(true);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

$mail->Subject = $subject;
$mail->Body    = $body;

if(!$mail->send()) {
    echo 'Erreur envoi';
   
} 

}

?>