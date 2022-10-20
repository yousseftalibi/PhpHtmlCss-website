<?php
$title = "Options de compte";
session_start();
require "../ressources/headfoot/header.php" ;
include '../ressources/database/db_connection.php';
$conn = OpenCon();

?>





<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../ressources/css/style_header.css">
<link rel="stylesheet" href="../ressources/css/style-options.css">

    <title>Options de compte</title>
</head>

    <div id="page">

        <h1> Mes informations</h1>
        <p>
        <form method="POST" action="">
            <input type="text" name="newpseudo" placeholder="Pseudo" value="" /> </br></br>
            <input type="text" name="newmail" placeholder="Adresse mail" value="<?php echo $user['Email']; ?>" /></br></br>
            <input type="password" name="newpwd1" placeholder="Mot de passe" value="" /></br></br>
            <input type="password" name="newpwd2" placeholder="Confirmation du mot de passe" value="" /></br></br>
            <input type="submit" value="Mettre à jour mon profil" />

</p>
</html> 







 <?php require "../ressources/headfoot/footer.php" ?>

