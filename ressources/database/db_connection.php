<?php
function OpenCon()
 {

 $dbhost = "eu-cdbr-west-02.cleardb.net";
 $db = "heroku_656262c843ff55a";
 $Username= "";
$Password="";  


 $conn = new mysqli($dbhost, $Username, $Password, $db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

   
?>