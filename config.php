<?php

$dbhost = "localhost";
$dbname = "student";
$dbuser = "root";
$dbpassword = "";

try{
     $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser, $dbpassword);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   }catch(PDOException $e){
	echo"Connection Error: ".$e->getMessage();
    }

     
?>