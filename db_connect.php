<?php

$servername= "localhost"; 
$username = "root"; 
$password = "";

try { 
  $conn = new PDO("mysql:host=$servername", $username, $password); 
  // set the PDO error mode to exception 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

  $sql= "CREATE DATABASE candyrusDB"; 
  // use exec() because no results are returned 
  $conn->exec($sql); echo "Database created successfully<br>"; 
  } 
catch(PDOException$e) 
  { 
  	//echo $sql. "<br>" . $e->getMessage(); 
  }


$conn = mysqli_connect("localhost", "root", "", "candyrusDB");
if (!$conn){
  echo 'connection_error: ' . mysqli_connect_error();
}?>
