<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortout icon" href="../ressources/images/logo.png">
    <?php echo $css ?>
    <link rel="stylesheet" href="../ressources/css/style_header.css">
    <script src="js/jquery-3.4.1.min.js">
    </script>
    <script src="js/menu.js"></script>
    <title><?php echo $title ?></title>
</head>

<body>
    <header>
        <a href="../../Evolution/evolution.php"><img id="logo" src="../ressources/images/logo.png" alt="Logo de l'application"></a>
        <input class="side-menu" type="checkbox" id="side-menu" />
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
        <nav id="mainNav" class="nav">
            <ul class="menu">
                <li class="menu-principal"><a href="../Accueil">Accueil</a></li>
                <li class="menu-principal"><a href="../Evolution/evolution.php">Evolution</a></li>
                <li class="menu-principal"><a href="../Historique/historique.php">Historique</a></li>
                <li class="menu-principal"><a href="../FAQ/FAQ.php">FAQ</a></li>
                <li class="menu-principal"><a href="../Mode Emploi/modeemploi.php">Mode d'emploi</a></li>
                <?php 
                if(isset($_SESSION['name'])){
                 if($_SESSION['name']=="admin"){
                   echo '<li class="menu-principal"><a href="../ControlePanel/Cpanel.php">Cpanel</a></li>'; 

                }
                
            }?>
                

                <li class="menu-principal"><input id="input" type="search" placeholder="Recherche..."><a href="#input"><img src="../ressources/images/loupe.png" alt="loupe de recherche"></a></li>
            </ul>

        </nav>
    </header>
    <main>
        <div id="title"><?php echo $title ?></div>
        <div id="body">