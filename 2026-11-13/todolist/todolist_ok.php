<?php
require "db.php";

if ($_POST['mode'] == 'input') {
  $subject = $_POST['subject'];

  $sql = "INSERT INTO todolist(subject) VALUES (:subject)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":subject", $subject);

  $rs = $stmt->execute();

  if ($rs) {
    echo "
      <script>
        // alert('정상적으로 등록되었습니다.');
        self.location.href = './index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('등록과정에서 오류가발생하였습니다.')
        history.go(-1);
      </script>
    ";
  }
} elseif ($_POST['mode'] == 'done') {
  $idx = $_POST['idx'];
  isChecked($idx, 1);
} elseif ($_POST['mode'] == 'undone') {
  $idx = $_POST['idx'];
  isChecked($idx, 0);
} elseif ($_POST['mode'] == 'delete') {
  $sql = "DELETE FROM todolist WHERE idx = :idx";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":idx", $_POST['idx']);
  $stmt->execute();
  echo "<script>self.location.href = './index.php'</script>";
}

function isChecked($idx, $status)
{
  global $conn;
  $sql = "UPDATE todolist SET status = :status WHERE idx = :idx";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":idx", $idx);
  $stmt->bindParam(":status", $status);
  $stmt->execute();

  echo "<script>self.location.href = './index.php'</script>";
}
