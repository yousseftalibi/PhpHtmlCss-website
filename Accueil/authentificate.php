<?php
include '../ressources/database/db_connection.php';
$conn = OpenCon();
session_start();

if ( !isset($_POST['username'], $_POST['password']) ) {
	exit();
}

$query_user= mysqli_query($conn, "SELECT * FROM `users` WHERE username = '{$_POST['username']}' ");
$res= mysqli_fetch_array($query_user);


if(isset($res)){
	$username = $res[0];
	$hash = $res[1];

}


if(password_verify($_POST['password'], $hash) && $_POST['username']==$username) {
	session_regenerate_id();
	$_SESSION['loggedin'] = TRUE;
	$_SESSION['name'] = $_POST['username'];
	header('Location:../Evolution/evolution.php');

}
else {

	echo "Identifiants incorrects!";

	exit();
}


?>