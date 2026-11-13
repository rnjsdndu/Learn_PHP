<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kingchobo";

try {
  $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "DB 연결 성공";
} catch (PDOException $e) {
  echo $e -> getMessage();
  exit;
}