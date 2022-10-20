<!DOCTYPE HTML>

<html>

<head>
	<title>Validation</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../ressources/css/style_accueil.css" />
	
</head>

<body class="is-preload">

	<header id="header">
		<div class="content">
			<h1>Bonjour, <?php session_start(); echo $_SESSION['UnconfirmedUsername']?><br/>  Valider votre compte</h1>
			<form action="confirmation.php" method="post" onsubmit="return validate()">

			<label for="key"> <b>Code de confirmation</b> </label>
			<input type="text" type="hidden" placeholder="code de confirmation" name="key" id="key" required>

			<button type="submit" value="submit">valider</button>	
			
						</form>
		</div>
	
	</header>

	<section id="one" class="wrapper style2 special">
		<header class="major">
			<h2>Krobi, le compagnon qu'il vous fallait <br/> </h2>
		</header>
		<ul class="icons major">
			<li><span class="icon solid fa-heartbeat"> <span class="label">Coeur</span> </span></li>
			<li><span class="icon solid fa-paw"> <span class="label">Patte</span> </span></li>
			<li><span class="icon solid fa-leaf"> <span class="label">Santé</span> </span></li>

		</ul>
	</section>

</body>

</html>