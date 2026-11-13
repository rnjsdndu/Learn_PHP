<?php
include "db.php";

include "lib.php";


$sql = "SELECT count(*) as cnt FROM freeboard";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$rs = $stmt->fetch();

$total = $rs['cnt']; // 게시물 총 개수
$limit = 10; // 한 화면 출력 개수   0 ~ 9, 10 ~ 19
$page_limit = 5;
$page = isset($_GET['page']) && $_GET['page'] != '' && is_numeric($_GET['page']) ? $_GET['page'] : 1; // 현재 페이지

$rs_str = my_pagination($total, $limit, $page_limit, $page);


$start = $limit * ($page - 1);


$sql = "SELECT idx, subject, author, rdate FROM freeboard LIMIT $start, $limit";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$rs = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>부트스트랩5 이용 게시물 목록, 페이지네이션 처리</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <?php
    echo "<table class=\"table table-hover\">
      <tr>
        <th>번호</th>
        <th>제목</th>
        <th>작성자</th>
        <th>날짜</th>
      </tr>
    ";
    foreach ($rs as $row) {
      echo "
    <tr>
      <td>" . $row['idx'] . "</td>
      <td>" . $row['subject'] . "</td>
      <td>" . $row['author'] . "</td>
      <td>" . $row['rdate'] . "</td>
    </tr>
  ";
    }
    echo "</table>";




    echo $rs_str;
    ?>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>