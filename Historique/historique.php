<?php
$css = "";
$title = "Historique";
 session_start();

require "../ressources/headfoot/header.php";
include '../ressources/database/authorizations.php';
if(isLoggedin()):
?>

<div class="container0">

  <div class="container1">
    <?php include 'charte_intensité_sonore.php' ?>
  </div>

  <div class="container2">
    <img id="taillegif" alt="" src="Evoli.gif">
  </div>


  <div class="humeurkrobitxt">
    <p>L'intensité sonore augmente. Attention, votre Krobi n'aime pas beaucoup ça...<p>
  </div>


</div>


<?php 
endif;
require "../ressources/headfoot/footer.php" ?>
