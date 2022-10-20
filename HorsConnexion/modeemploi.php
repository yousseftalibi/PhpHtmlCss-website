<?php
$css = '<link rel="stylesheet" href="../ressources/css/style_mde.css">';
$title = "Mode d'emploi";
require 'headfoot/header.php';
?>

<h3>Qu'est-ce que Krobi ?</h3>
        <p>Krobi est une application ludique qui a pour but d'améliorer la santé de ses utilisateurs.
            Mais Krobi est aussi le nom de votre petit animal qui vous accompagne vers un quotidien plus sain. À l'aide
            des différents capteurs, l'application
            pourra connaître la qualité de votre environnement. Si votre quotidien est trop bruyant, l'application vous
            poussera à trouver une solution (prendre le vélo plutôt que le métro par exemple). Si vous êtes trop longtemps exposé à un taux de CO<sub>2</sub>,
            vous devrez trouver un moyen de vous aérer régulièrement ... <br>
            Le but du jeu: Collectionner toutes les évolutions d'Évoli.<br><br>

            <strong>Attention:</strong> Si votre Krobi est trop longtemps exposé à un milieu "hostile" ou que vous
            oubliez de le nourrir il peut mourir.
            Au quel cas, vous devrez réinitialiser votre compte pour recommencer à jouer.<br><br>
        </p>

        <h3>Comment faire évoluer son Krobi ?</h3>
        <p>Le Krobi évolue en fonction des données récoltées par les capteurs. Si les prélevements sont trop néfastes
            pour votre santé, le Krobi vous avertira du problème. Vous pouvez surveiller l'état précis de l'animal sur les barres de
            chargement. <br>
            En revanche, si certaines conditions (bonnes) sont remplies et maintenues, vous pouvez acquérir une évolution
            du Krobi. <br>
            Lorsqu'une évolution est acquise, elle est valable pendant un mois. Elle disparaitra si les conditions ne
            sont plus respectées.
        </p>

        <p>Les différentes évolutions du Krobi et comment les obtenir :</p> <br>
        <div class="grid-container">

            <div class="boite">
                <h4>Evoli </h4><br>
                <div id="parent">
                   <!-- <img id="img_1" class="superpose" src="../ressources/images/bulle.png" alt="bulle">-->
                    <img src="../ressources/images/Evoli.gif" alt="Evoli"><br>
                </div>
                <p class="tcol">Évolution de base. </p>
            </div>

            <div class="boite">
                <!--<button class="dropbtn">-->
                    <h4>Aquali </h4><br>
                    <div id="parent">
                        <!--<img id="img_1" class="superpose" src="images/bulle.png" alt="bulle" >-->
                        <img src="../ressources/images/Aquali.gif" alt="Aquali"><br>
                        <p class="tcol">Boire un verre d'eau régulièrement dans la journée.</p>
                    </div>
                </button>
            </div>


                <div class="boite">
                    <h4>Voltali</h4><br><img src="../ressources/images/Voltali.gif" alt="Voltali"><br>
                    
                        <p class="tcol">Faire du sport deux fois par semaine.</p>
                    
                </div>
                <div class="boite">
                    <h4>Mentali</h4><br><img src="../ressources/images/Mentali.gif" alt="Mentali"><br>
                    
                        <p class="tcol">Faire de l'exercice cérébral au moins une heure par jour.</p>
                    
                </div>
                <div class="boite">
                    <h4>Nymphali</h4><br><img src="../ressources/images/Nymphali.gif" alt="Nymphali"><br>
                    
                        <p class="tcol">Nourrir votre animal au moins une fois par jour.</p>
                   
                </div>
                <div class="boite">
                    <h4>Noctali</h4><br><img src="../ressources/images/Noctali.gif" alt="Noctali"><br>
                    <p class="tcol">
                        Avoir un rythme de sommeil régulier.
                    </p>
                </div>
                <div class="boite">
                    <h4>Phyllali</h4><br><img src="../ressources/images/Phyllali.gif" alt="Phyllali"><br>
                    <p class="tcol">
                        Ne pas être exposé trop longtemps à un taux de CO<sub>2</sub>
                    </p>
                </div>
                <!--<div class="boite">
                    <h4>Givrali</h4><br><img src="../ressources/images/Givrali.gif" alt="Givrali"><br>
                    <p class="tcol">
                       ???
                    </p>
                </div>-->
                <div class="boite">
                    <h4>Pyroli</h4><br><img src="../ressources/images/Pyroli_petit.gif" alt="Pyroli"><br>
                    <p class="tcol">
                       Obtenir toutes les évolutions précédentes
                    </p>
                </div><br>
                </div>



<?php require 'headfoot/footer.php'; ?>