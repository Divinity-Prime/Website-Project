<?php 

//  server name
$sName = "localhost";
//  user name
$uName = "root";
//  password
$pass = "";

// database name
$db_name = "novel_store_db";

// Creating Database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}