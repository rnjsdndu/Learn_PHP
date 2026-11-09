<?php 
// PDO

include "../db.php";


$subject = $_POST['subject'];
$content = $_POST['content'];


try {
  // $sql = "INSERT INTO board(subject, content, rdate) VALUES ('{$subject}', '{$content}', '{$date}')";
  $sql = "INSERT INTO board(subject, content, rdate) VALUES ('{$subject}', '{$content}', NOW())"; // PHP에서 제공하는 내장함수 NOW는 현재 날짜와 시간을 가져온다.
  $conn -> exec($sql);
  echo "게시글 등록에 성공했습니다.";

  // lastInsertId() 메소드를 이용하여 마지막에 입력된 key를 알아낼 수 있어요
  $last_id = $conn -> lastInsertId(); // 실행했을 때 삽입된 행의 번호

  echo "<p>게시물 번호는 {$last_id}입니다.</p>";

  echo "<script>self.location.href = 'view.php?idx=".$last_id."'</script>";

} catch(PDOException $e) {
  $e -> getMessage();
}

$conn = null;