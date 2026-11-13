<?php 
include "db.php";

include "lib.php";




$sql = "SELECT count(*) as cnt FROM freeboard";
$stmt = $conn -> prepare($sql);
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$stmt -> execute();
$rs = $stmt -> fetch();

$total = $rs['cnt']; // 게시물 총 개수
$limit = 10; // 한 화면 출력 개수   0 ~ 9, 10 ~ 19
$page_limit = 5;
$page = isset($_GET['page']) && $_GET['page'] != '' && is_numeric($_GET['page']) ? $_GET['page'] : 1; // 현재 페이지

$rs_str = my_pagination($total, $limit, $page_limit, $page);
echo $rs_str;

$start = $limit * ($page - 1);


$sql = "SELECT idx, subject, author, rdate FROM freeboard LIMIT $start, $limit";
$stmt = $conn -> prepare($sql);
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$stmt -> execute();
$rs = $stmt -> fetchAll();




echo "<table>";
foreach($rs as $row) {
  echo "
    <tr>
      <td>".$row['idx']."</td>
      <td>".$row['subject']."</td>
      <td>".$row['author']."</td>
      <td>".$row['rdate']."</td>
    </tr>
  ";

}
echo "</table>";



// 출력
// for($i = $start; $i < ($start + $limit); $i++) {
//   if(isset($data[$i])) {
//     echo $data[$i]. "번 게시글 <br>";
//   }  
// }



// total: 게시물의 총 개수
// limit: 한 페이지에 보여질 게시물의 총 개수
// page_limit: pagination 버튼(페이지) 개수 
// page: 현재 페이지

