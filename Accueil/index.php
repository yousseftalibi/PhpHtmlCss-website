<?php
session_start();
include '../ressources/database/authorizations.php';

?>
<!DOCTYPE HTML>

<html>

<head>
	<title>Accueil</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../ressources/css/style_header.css" />
	<link rel="stylesheet" href="../ressources/css/style_accueil.css" />


</head>

<body class="is-preload">

	<!-- Header -->
	<header id="header">
		<div class="content">
			<h1>Votre Krobi n'attend que vous !</h1>
			<h3>Lancez-vous dans cette nouvelle aventure unique !</h3>
			<ul class="actions">
				<?php if(!isset($_SESSION['name'])) :?> <li><a href="..//Enregistrement/signup.php" class="button">Je m'inscris</a></li>
				<li><a href="connexion.php" class="button">Je me connecte</a></li> 
				<?php else: echo '<li><a href="../Evolution/evolution.php" class="button">Accéder au site</a></li> '?> 
				<?php endif;?>
			</ul>

		</div>
		<div class="image phone">
			<div class="inner"><img src="../ressources/images/FondAccueil.png" alt="" /></div>
		</div>
	</header>

	<!-- Two -->
	<section id="two" class="wrapper">
		<div class="inner alt">
			<section class="spotlight">
				<div class="image"><img src="../ressources/images/micro.png" alt="" /></div>
				<div class="content">
					<h3>Qui sommes-nous ?</h3>
					<p>Microbiome est une strat-up de 6 ingénieurs ISEP.</br>
						Notre but est de créer des projets innovants
						dans le respect de l'environnement et pour
						méliorer le quotidien de chacun par de simples actions.</p>
				</div>


			</section>
			<section class="spotlight">
				<div class="image"><img src="../ressources/images/krobi.png" alt="" /></div>
				<div class="content">
					<h3>Krobi ?</h3>
					<p>Krobi est un animal virtuel de compagnie qui vous suit partout où vous allez.</br>
						Son but est de vous aider à améliorer votre
						qualité de vie en récoltant des données de santé et envionnementales.</p>
				</div>
			</section>

			<section class="spotlight">
				<div class="image"><img src="../ressources/images/vovo.jpg" alt="" /></div>
				<div class="content">
					<h3>Adoptez et prenez soin de votre Krobi !</h3>
					<p>Vous souhaitez consulter vos données de santé et
						d'environnement tout en vous amusant ?</br>
						Avec Krobi c'est possible !</br>
						Prenez soin de votre animal tout en prenant soin de vous
						Avec Krobi, vos données seront simplifiées !</p>
				</div>
			</section>

			<section class="spotlight">
				<div class="image"><img src="../ressources/images/go.jpg" alt="" /></div>
				<div class="content">
					<h3>Faites de Krobi votre meilleur allié !</h3>
					<p>Renforcez le lien qui vous unit en lui donnant un surnom,
						en le faisant évoluer et bien d'autres choses encore !</br>
						Où que vous soyiez, Krobi sera toujours avec vous</br>
						Partez à l'aventure, partagez des moments et
						grandissez ensemble !</p>
				</div>
			</section>
	</section>

	<section class="spotlight">
	</section>


	</section>

	<!-- Three -->
	<section id="three" class="wrapper style2 special">
		<div class="major">
			<h2>Et vous, comment sera votre Kroby ?</h2>
		</div>
		<ul class="actions special">

			<li><a href="../HorsConnexion/FAQ.php" class="button">FAQ</a></li>
			<li><a href="../HorsConnexion/modeemploi.php" class="button">Mode d'emploi</a></li>
		</ul>
	</section>
	<footer>
		<div class="footerMenu">
			<var>
				<ul>
					<li><a href="../HorsConnexion/Politique_de_confidentialité.php">Politique de confidentialité</a></li>
					<li><a href="../HorsConnexion/MentionLegale.php">Mentions légales</a></li>
					<li><a href="../HorsConnexion/contact.php">Nous contacter</a></li>
				</ul>
			</var>
		</div>
		<div class="copyright">
			<p>© Copyright – Krobi</p>
		</div>

	</footer>
</body>

</html>