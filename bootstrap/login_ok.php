<?php 
include "db.php";

$id = $_POST['id'];
$pw = $_POST['pw'];


$sql = "SELECT * FROM member WHERE user_id = :id AND passwd = :pw";

$stmt = $conn -> prepare($sql);

$stmt -> bindParam(':id', $id);
$stmt -> bindParam(':pw', $pw);

$stmt -> execute();

$row = $stmt -> fetch();

if($row) {
  echo "로그인 성공";
} else {
  echo "로그인 실패";
}

die;