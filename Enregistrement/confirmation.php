<?php
include '../ressources/database/db_connection.php';
session_start();
$conn = OpenCon();

    $name= $_SESSION['UnconfirmedUsername'];
	$query = mysqli_query($conn, "SELECT `Email_confirmation_code`  FROM `users` WHERE username = '{$name}' ");
	$Ckey = mysqli_fetch_array($query);
    $confirmation_key=$Ckey[0];

    if($confirmation_key==$_POST['key']){
        mysqli_query($conn, "UPDATE `users` SET `confirmed`='oui' WHERE username = '{$name}' ");
        $_SESSION['UnconfirmedUsername']="";
        header('Location: ../Evolution/evolution.php');
    }

   else{
        echo("error");


   }
?>