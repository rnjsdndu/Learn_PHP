<?php
// mysql PDO, DB 생성, 삭제
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // 에러 메시지를 보여준다
} catch (PDOException $e) {
  echo $e -> getMessage(); // 연결에 실패하면 왜 실패했는지 보여주기
  exit;
}

// 테이블 만들기
try {
  $sql = "CREATE DATABASE firstdb"; // firstdb라는 이름의 DB 만들기
  $conn -> exec($sql);
  echo "<p>firstdb가 생성되었습니다</p>";
} catch(PDOException $e) {
  echo $e -> getMessage();
}

// 테이블 삭제하기
try {
  $sql = "DROP DATABASE firstdb"; // firstdb라는 이름의 DB 지우기
  $conn -> exec($sql);
  echo "<p>firstdb가 삭제되었습니다</p>";
} catch(PDOException $e) {
  echo $e -> getMessage();
}


$conn = null;
