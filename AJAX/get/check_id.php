<?php 

// db 연결

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kingchobo";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo $e -> getMessage();
  exit;
}

$user_id = $_GET['id'];

$sql = "SELECT COUNT(*) cnt FROM member WHERE user_id='".$user_id."'";

$stmt = $conn -> prepare($sql);
$stmt -> execute();

$result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
$row = $stmt -> fetch();

$arr = array("result" => $row["cnt"] ? "exist" : "not_exist");

die(json_encode($arr));