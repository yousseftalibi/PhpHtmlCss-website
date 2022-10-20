<?php
$title = "Mode d'emploi";
session_start();
require '../ressources\headfoot\header.php';
include '../ressources/database/db_connection.php';
$conn = OpenCon();

$requser=$bdd->prepare ("SELECT * FROM users WHERE username =?");
$requser->execute(array($_SESSION['username']));
$user=$requser->fecth();
?>





<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../ressources/css/style-options.css">
    <title>Options de compte</title>
</head>

    <div id="page">

        <h1> Mes informations</h1>
        <form method="POST" action="">
            <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['username']; ?>" />
            <input type="text" name="newmail" placeholder="Adresse mail" value="<?php echo $user['Email']; ?>" />
            <input type="password" name="newpwd1" placeholder="Mot de passe" value="" />
            <input type="password" name="newpwd2" placeholder="Confirmation du mot de passe" value="" />
            <input type="submit" value="Mettre à jour mon profil" />

       
</html> 







 <?php require "../ressources/headfoot/footer.php" ?>

