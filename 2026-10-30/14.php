<?php 
// PHP 배열, 다차원 배열에 대해서 배웁니다.

// 2차원 배열 (다차원배열)

$cars = array(
  array("볼보", 22, 10),
  array("산타페", 25, 4),
  array("아우디", 12, 11)

);

print_r($cars);

/*
Array
(
    [0] => Array
        (
            [0] => 볼보
            [1] => 22
            [2] => 10
        )

    [1] => Array
        (
            [0] => 산타페
            [1] => 25
            [2] => 4
        )

    [2] => Array
        (
            [0] => 아우디
            [1] => 12
            [2] => 11
        )

)
*/

echo "산타페의 재고는 ", $cars[1][1];

echo "<table>";

for($row = 0; $row < 3; $row++) {
  echo "<tr>";
  for($col = 0; $col < 3; $col++) {
    echo "<td>".$cars[$row][$col]."</td>";
  }
  echo "</tr>";
}

echo "</table>";

?>