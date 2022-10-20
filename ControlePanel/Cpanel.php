<?php

session_start();

$title = "Cpanel";
$css = '<link rel="stylesheet" href="../ressources/css/style_cpanel.css">';
require "../ressources/headfoot/header.php";
include '../ressources/database/db_connection.php';
include '../ressources/database/authorizations.php';

$conn = OpenCon();

$user = mysqli_query($conn, "SELECT `username` FROM `users`");
$res = $user->fetch_all();

if(isAdmin()):
?>


<div class="container0">
  <div class="container1">
  

    <table>
    <tr> 
      <th> All Users </th>
      <th> Actions </th>
    </tr>
    
    

    <?php  for ($i = 0; $i < count($res); $i++) : ?>
    <tr>

      <td id="user"><?= $res[$i][0] ?> </td>
      
     <td >     <?php echo '<a class="btn_delete" href="delete.php?username='.$res[$i][0].'"><i>Delete</i></a>';  ?></td>
     <td >     <?php echo '<a class="btn_reset" href="reset.php?username='.$res[$i][0].'"><i>Reset</i></a>';  ?></td>

 </td>
    
    </tr> 

    <?php endfor; ?>  

    </table>
    <br />

    <div class="humeurkrobitxt">
      <p>
      <p>

    </div>


  </div>
<?php endif;?>

  <?php require "../ressources/headfoot/footer.php" ?>





