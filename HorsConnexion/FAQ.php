<?php
$css = '<link rel="stylesheet"href="../ressources/css/style_FAQ.css"/>';
$title = "FAQ";
require "headfoot/header.php";
?>

<div class="faq">
  <button class="accordion">Comment faire évoluer Krobi ?</button>
  <div class="sous">Pour faire évoluer Krobi, vous devez vous assurer de garder un environnement assez sain (bon rythme de sommeil, dépense physique, hydratation...). Allez voir la page <a href="../Mode Emploi/modeemploi.php">Mode d'emploi</a> pour connaître les différents défis à réaliser pour chaque Krobi</p>
  </div>

  <button class="accordion">Combien de temps Krobi reste-t-il sous sa forme évoluée ?</button>
  <div class="sous">
    <p>Une fois les défis réalisés, vous obtenez votre Krobi, celui-ci apparaît alors dans votre collection. Attention ! Vous pouvez le perdre au bout de quelques jours si vous ne gardez pas ces habitudes. Rendez-vous dans la section <a href="../Mode Emploi/modeemploi.php">Mode d'emploi</a> pour en savoir plus sur chaque krobi.</p>
  </div>

  <button class="accordion">Krobi est mort, que faire ?</button>
  <div class="sous">
    <p>Votre Krobi est mort ? Vous avez surement oublié de surveiller vos barres d'environnement ! Dans ce cas, la seul possibilité est de supprimer votre compte pour en créer un nouveau. Malheureusement, votre progression ne sera pas sauvegardée.</p>
  </div>

  <button class="accordion">Comment réinitialiser mon compte ?</button>
  <div class="sous">
    <p>Si vous souhaitez réinitialiser votre compte, le mieux est de supprimer votre compte actuel puis d'en recréer un nouveau. Pour cela, rendez-vous dans la section "Options de compte" et cliquez sur "Supprimer mon compte". Vous pourrez ensuite recréer un nouveau compte et repartir de zéro !</p>
  </div>

  <button class="accordion">Comment modifier mon mot de passe ?</button>
  <div class="sous">
    <p>Afin de modifier votre mot de passe, rendez-vous dans la section <a href=#>Options de compte</a>.</p>
  </div>

  <button class="accordion">Comment contacter l’administrateur ?</button>
  <div class="sous">
    <p>Pour toute question ou remarque, rendez-vous dans la section <a href="../Contact/contact.php">Nous contacter</a>.</p>
  </div>
  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>
  </body>

  <?php
  require "headfoot/footer.php";
  ?>