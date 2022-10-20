<?php
function isLoggedin(){
if(isset($_SESSION['name']) ){
    return true;
}
echo 'You must <a href="../Accueil/connexion.php">login</a> to access this page';

}

function isAdmin(){

    if(!isset($_SESSION['name'])){
        echo 'Unauthorized access';
        return false;
    }

    elseif( $_SESSION['name']!='admin'){
        echo 'Unauthorized access';
        return false;
    }   
    else {
        return true;
    }
  


}


?>