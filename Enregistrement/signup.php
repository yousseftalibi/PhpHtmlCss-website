<!DOCTYPE HTML>

<html>

<head>
	<title>Enregistrement</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../ressources/css/style_accueil.css" />
	<script>
		function validate(){
			var a = document.getElementById("password").value;
			var b = document.getElementById("password-repeat").value;
			if(a!=b){
				alert("les mots de passe ne correpondent pas");
				return false;
			}
		}
	</script>
</head>

<body class="is-preload">

	<header id="header">
		<div class="content">
			<h1>Créer votre compte</h1>
			<form action="../ressources/database/createaccount.php" method="post" onsubmit="return validate()">

			<label for="username"> <b>Username</b> </label>
			<input type="text" type="hidden" placeholder="nom d'utilisateur" name="username" id="username" required>

			<label for="password"> <b>Mot de passe</b> </label>
			<input type="password" type="hidden" placeholder="mot de passe" name="password" id="password" required>

			<label for="password-repeat"> <b>Confirmer votre mot de passe</b> </label>
			<input type="password" type="hidden" placeholder="confirmer le mot de passe" name="password-repeat" id="password-repeat" required>
			
			<label for="email"> <b>Rentrez votre e-mail</b> </label>
			<input type="text" type="hidden" placeholder="e-mail" name="email" id="email" required>

			<button type="submit" value="submit">S'enregistrer</button>	
			
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