
<?php 
include '../ressources/database/db_connection.php';
$conn = OpenCon();
session_start();
if($_GET['username']) {

mysqli_query($conn, "DELETE FROM `users` WHERE `username` = '{$_GET['username']}' ");
header('Location: Cpanel.php'); 
}



?>