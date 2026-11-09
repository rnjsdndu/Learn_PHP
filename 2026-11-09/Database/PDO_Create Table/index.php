<?php 

$servername = "localhost";
$username = "root";
$password = "";

// DB 연결
try {
  $conn = new PDO("mysql:host=$servername;dbname=kingchobo", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>DB 연결에 성공했습니다.</p>";
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}

// DB 생성
// $sql = "CREATE DATABASE {이름}";

// 테이블 생성
try {
$sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
  $conn -> exec($sql);
  echo "<p>테이블이 생성되었습니다</p>";
} catch (PDOException $e) {
  echo $e->getMessage();
}

$conn = null; // DB연결을 했다면 DB를 끊어줘야 한다 (중요)