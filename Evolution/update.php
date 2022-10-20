<?php

$rawArray = raw(getData());

echo '<div class="valeur_son">
<progress id="valeur_son"  max="120" value="'. end($rawArray).'"></progress>
<i class="bi bi-volume-up positionicone"></i>
<div class="textesousbarre">Intensité sonore :'.end($rawArray).' dB</div>
</div>';

function getData(){
    $ch = curl_init();
   
  curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=SUMO");
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $data = curl_exec($ch);
  
  curl_close($ch);
  $data_tab = str_split($data,33);
  return $data_tab;
  }
  

    function raw($data_tab){
      $quatreChiffre = [];
      $s = 0;
      for($i=1250, $size=1300; $i<$size; $i++){
         
          $quatreChiffre[$s]=$data_tab[$i][25].$data_tab[$i][26].$data_tab[$i][27].$data_tab[$i][28];
          $s++;
      }
      return $quatreChiffre;
    }
    
?>
