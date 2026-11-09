<?php 
include "../db.php";

$sql = "SELECT * FROM myguests";
$stmt = $conn->prepare($sql);
$stmt -> execute();
$rs = $stmt->fetchAll(PDO::FETCH_ASSOC); // 필드 이름 기준으로 가져오기

// print_r($rs);

echo "<table border='1'>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Email</th>
";

foreach($rs as $row) {
  echo "<tr>
    <td>" . $row['firstname']. "</td>
    <td>" . $row['lastname']. "</td>
    <td>" . $row['email']. "</td>
  </tr>";
}
echo "</table>";


// print_r($rs);

// $rs = $stmt->fetchAll();
// PDO::FETCH_BOTH가 기본값
// (
//     [0] => Array
//         (
//             [id] => 1
//             [0] => 1
//             [firstname] => John
//             [1] => John
//             [lastname] => Doe
//             [2] => Doe
//             [email] => john@example.com
//             [3] => john@example.com
//             [reg_date] => 2026-11-09 09:50:20
//             [4] => 2026-11-09 09:50:20
//         )
// )


// $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 필드 이름 기준으로 가져오기
// (
//     [0] => Array
//         (
//             [id] => 1
//             [firstname] => John
//             [lastname] => Doe
//             [email] => john@example.com
//             [reg_date] => 2026-11-09 09:50:20
//         )
// )


// $rs = $stmt->fetchAll(PDO::FETCH_NUM);
// 필드 INDEX 기준으로 가져오기
// (
//     [0] => Array
//         (
//             [1] => 1
//             [2] => John
//             [3] => Doe
//             [4] => john@example.com
//             [5] => 2026-11-09 09:50:20
//         )
// )


$conn = null; // DB 연결 끊어주기