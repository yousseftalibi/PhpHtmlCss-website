<?php
include 'db_connection.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
session_start();

$adresse = $_POST['email'];
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

$conn = OpenCon();
$activation_key= bin2hex(random_bytes(16));

if(exists($_POST['username'])  ){
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$query = mysqli_query($conn, "INSERT INTO `users` (`username`, `password`, `Email`, `Email_confirmation_code`, `confirmed`, `isAdmin` ) VALUES ('{$_POST['username']}', '{$hash}', '{$_POST['email']}', '{$activation_key}', 'non', 0 )");
}

else{
	echo "user already exists, click here to recover account";
}


$mail->Subject = 'De la part de KROBI';

$mail->Body    = 'Bonjour, <b>'.$_POST['username'].'</b>, votre code de confirmation est '.$activation_key;

if(!$mail->send()) {
    echo 'Erreur envoi';
   
} else {
    header('Location: ../../Enregistrement/validation.php');
}

function exists($name){
	$user = mysqli_query(OpenCon(), "SELECT * FROM `users` WHERE username = '{$name}' ");
	$res = mysqli_fetch_row($user);

	return is_null($res);
}

$_SESSION['UnconfirmedUsername']=$_POST['username'];


?>
