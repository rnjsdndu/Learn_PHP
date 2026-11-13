<?php 
  require "db.php";

  $sql = "SELECT * FROM todolist order by idx desc";
  $stmt = $conn -> prepare($sql);
  $stmt -> execute();
  $stmt -> setFetchMode(PDO::FETCH_ASSOC);
  $rs = $stmt -> fetchAll();
  
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>할일 관리</title>
  <script src="./todolist.js"></script>
</head>
<body>
  <form action="todolist_ok.php" name="todoform" method="post" autocomplete="off">
    <input type="hidden" name="mode" value="input">
    할일 : <input type="text" name="subject" id="subject">
    <input type="button" value="등록" id="todobtn">
  </form>
  <table border="1" width="600">
    <?php foreach($rs as $row ):?>
      <tr>
        <td style="<?= $row['status'] ? 'text-decoration:line-through' : '' ?>"><?= $row['subject']; ?></td>
        <?php if($row['status']):?>
          <td><button onclick="todoUnCheck(<?= $row['idx'] ?>)">취소</button></td>
          <?php else: ?>
            <td><button onclick="todoCheck(<?= $row['idx'] ?>)">확인</button></td>
        <?php endif; ?>
        <td><button onclick="todoDelete(<?= $row['idx'] ?>)">삭제</button></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <form action="./todolist_ok.php" id="multiform" method="post">
    <input type="hidden" name="idx" value="">
    <input type="hidden" name="mode" value="">
  </form>
</body>
</html>