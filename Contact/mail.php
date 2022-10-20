<?php
 session_start();

if (!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['sujet'])) {
    $surname = htmlspecialchars($_POST['surname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $dest = "xxxxx@gmail.com";
    $subject = "Contact: $sujet";
    $corp = "$surname $firstname: $message";
    $header = "From: $email";

    if (mail($dest, $subject, $corp, $header)) {
        echo '<script type="text/javascript">
        alert("Votre message à bien été envoyé");
        window.location.href="contact.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Votre message n\'a pas pu s\'envoyer");
        window.location.href="contact.php";
        </script>';
    }
} else {
    header('Location: contact.php');
    die();
}
