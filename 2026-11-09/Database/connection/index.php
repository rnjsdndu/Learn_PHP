<?php

// MySQLi OOP(객체지향)
$servername = "localhost"; // DB서버가 local에 존재한다 (같은 서버에 존재한다)
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  // 연결했는데 에러가 있다면
  // echo "DB 연결에 실패했습니다.";
  // exit;

  // die(): echo + exit
  die("DB연결에 실패했습니다.");
}

echo "DB 연결에 성공했습니다";

// MySQLi Connect (절차지향)
$servername2 = 'localhost';
$username2 = "root";
$password2 = "";

$conn = new mysqli($servername2, $username2, $password2);

if (!$conn) {
  die("DB연결에 실패했습니다.");
}

echo "DB연결에 성공했습니다.";

// PDO
// PDO가 설치되어 있는지는 php.ini에서 확인하기
$servername3 = 'localhost';
$username3 = "root";
$password3 = "";

$conn = new PDO("mysql:host=$servername3", $username3, $password3);

if (!$conn) {
  die("DB연결에 실패했습니다.");
}

// try catch
try {
  $conn = new PDO("mysql:host=$servername3", $username3, $password3);
  echo "DB 연결 성공했습니다.";
} catch (PDOException $e) {
  echo "DB 연결 실패했습니다.";
  echo $e -> getMessage(); // 어떤 에러인지 확인
}
