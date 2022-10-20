<script>
    function update(){
$.ajax({
  method: "POST",
  url: "update.php",
})
  .done(function( response ) {
    $("div.valeur_son").html(response);

  });
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
session_start();
$css = '<link rel="stylesheet" href="../ressources/css/style_evolution.css">';
$title = "Evolution";
require "../ressources/headfoot/header.php";
include '../ressources/database/authorizations.php';
if(isLoggedin()):
  
?>
<div class="container0">

  <div class="container1">

    <div>
      <progress id="valeur_faim" max="100" value="70"></progress>
      <i class="bi bi-egg-fried positionicone"></i>
    </div>

    <div class="textesousbarre">Faim : valeur</div>
   
    <div>
      <progress id="valeur_fc" max="220" value="20"></progress>
      <i class="bi bi-heart-fill positionicone"></i>
    </div>

    <div class="textesousbarre">Fréquence Cardique : 60 bpm</div>

    <div>
      <progress id="valeur_co2" max="5000" value="90"></progress>
      <i class="bi bi-wind positionicone"></i>
    </div>

    <div class="textesousbarre">Taux de CO2 : 20 ppm</div>

    <div class="valeur_son">
      <progress id="valeur_son"  max="120" value="100"></progress>
      <i class="bi bi-volume-up positionicone"></i>
      <div class="textesousbarre">Intensité sonore : dB</div>

    </div>

    <button onclick="update()">Actualiser</button>

  </div>

  <div class="container2">
    <img id="taillegif" alt="" src="../ressources/images/Evoli.gif">
  </div>


  </div>
  </div>

<div class="grid-container">

   <div class="boite">
        <h4>Evoli</h4>
        <br>
        <p class="tcol">Voir la page Mode d'emploi pour plus 
          d'informations concernant l'obtention de cette carte. </p>
    </div>

    <div class="boite">
            <h4>Aquali</h4>
            <br>
            <div id="parent">
                <p class="tcol">Voir la page Mode d'emploi pour plus 
          d'informations concernant l'obtention de cette carte.</p>
            </div>
        </button>
    </div>

        <div class="boite">
            <h4>Voltali</h4>
                <p class="tcol">Voir la page Mode d'emploi pour plus 
          d'informations concernant l'obtention de cette carte.</p>
            
        </div>
        <div class="boite">
            <h4>Mentali</h4>
                <p class="tcol">Voir la page Mode d'emploi pour plus 
          d'informations concernant l'obtention de cette carte.</p>
        </div>

        <div class="boite">
            <h4>Nymphali</h4>00
                <p class="tcol">Voir la page Mode d'emploi pour plus 
          d'informations concernant l'obtention de cette carte.</p>   
        </div>

        <div class="boite">
            <h4>Noctali</h4><br>
            <p class="tcol">
            Voir la page Mode d'emploi pour plus 
          d'informations concernant l'obtention de cette carte.</p>
        </div>

        <div class="boite">
            <h4>Phyllali</h4>
            <p class="tcol">
            Voir la page Mode d'emploi pour plus 
          d'informations concernant l'obtention de cette carte.</p>
        </div>
       
        <div class="boite">
            <h4>Pyroli</h4>
            <p class="tcol">
            Voir la page Mode d'emploi pour plus 
          d'informations concernant l'obtention de cette carte.</p>
        </div><br>
        </div>

<?php ?>

<?php

endif;
require "../ressources/headfoot/footer.php"; ?>
