<?php 
 
include "../db.php";

$idx = $_GET['idx'];

try {
  $sql = "SELECT * FROM board WHERE idx = $idx";
  $stmt = $conn->prepare($sql);
  $stmt -> execute();
  $rs = $stmt -> fetch();

} catch (PDOException $e) {
  echo $e -> getMessage();
  exit;
}
  
$conn = null;  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3><?= $rs['idx'] ?>번째 글</h3>
  <p>제목 : <?= $rs['subject'] ?></p>
  <p>내용 : <?= nl2br($rs['content']) ?></p>
  <p>등록일자 : <?= $rs['rdate'] ?></p>
</body>
</html>

