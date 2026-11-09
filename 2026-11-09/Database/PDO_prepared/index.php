<?php

// DB 연결
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kingchobo";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "DB연결에 성공했습니다";
} catch (PDOException $e) {
  echo $e->getMessage();
}


try {
  // Query를 처음 한번만 읽는다.
  // SQL문에 필요한 값들을 매개변수로 받아서 사용할 수 있다.
  // DB는 SQL Query문을 읽을 때 토큰화(구문 별로 쪼개서) -> 파싱(토큰들을 문법에 맞춰 구문으로 조립) -> 최적화(구문을 보고 인덱스를 쓸지, 어떤 순서로 찾을지 실행계획 세우기) -> 실행
  // 순서로 찾는다. SQL Injection은 1(토큰화), 2(파싱) 과정에서 정해지는 값들을 바꾸거나 없애 공격하지만 prepared statement는 실행하기 직전에 값을 채워넣기 때문에 SQL Injection 공격에 안전하다
  $stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)"); // prepared 구문

  // 바인딩
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  $firstname = "John";
  $lastname = "Doe";
  $email = "jogn@exmaple.com";
  $stmt->execute();
} catch (PDOException $e) {
  echo $e -> getMessage();
}

$conn = null;