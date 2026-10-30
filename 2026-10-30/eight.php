<?php
// PHP for 문, foreach문, 반복문

// for
for($i = 0; $i < 10; $i += 2) {
  echo "<h2>$i 출력</h2>";
}

// foreach
// $arr = array('사과', '바나나', '딸기', '오렌지');
// $arr = ['사과', '바나나', '딸기', '오렌지'];
$arr = array (
  1 => "사과",
  2 => "배",
  3 => "딸기"
);

foreach($arr as $k => $v) {
  echo "<h2>$k => $v</h2>";
}
