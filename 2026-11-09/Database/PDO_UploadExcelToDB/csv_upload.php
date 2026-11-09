<?php 

// print_r($_FILES);

// DB연결

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kingchobo";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
  echo $e -> getMessage();
}

// csv

$arr = [];

// fgetcsv()
$file = fopen($_FILES['csv']['tmp_name'] ,'r');
while(($line = fgetcsv($file)) !== FALSE) {
  array_push($arr, $line);

  // echo $line[0], $line[1];

  // $sql = "INSERT INTO csvmember(cs_name, cs_email) VALUES ('".$line[0]."', '".$line[1]."')";

}

fclose($file);

print_r($arr);

$conn = null;