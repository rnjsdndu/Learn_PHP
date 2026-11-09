<?php 
$server_name = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$server_name", $username, $password);  
  $conn -> getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ) {
  $e -> getMessage();
  exit;
}

try {
  $sql = "CREATE DATABASE sign_login";
  $conn -> exec($sql);
} catch(PDOException $e) {
  $e -> getMessage();
  exit;
}

