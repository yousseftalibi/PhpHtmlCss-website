<!DOCTYPE html>
<html>

<head>

    <title>Connexion</title>
    <link rel="shortout icon" href="../ressources/images/logo.png">
    <link rel="stylesheet" href="../ressources/css/style.css" />
</head>
<?php 
session_start();
if(!isset($_SESSION['name'])) :
?>
<body>
    <form action="authentificate.php" method="post">
        <label for="username">
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required> <br />
        <input type="submit" value="Se connecter" id="login">
    </form>

</body>
<?php else : echo '  
         <h1>Already logged in, <a href="../Evolution/evolution.php">access </a>site</h1>' ;?>

<?php endif;?>
</html>