<?php
// PHP while반복문, do while반복문 loop

// if 문

// if (조건문) {
  // 만족할 때 처리
//} else {
  // 반대의 경우 처리
//}

$a = 10;

if($a >= 90) {
  echo "당신은 A입니다.";
} else if($a >= 80) {
  echo "당신은 B입니다.";
} else {
  echo "당신은 C이하입니다.";
}

// switch case
$r = rand(1,4);

switch($r) {
  case 1 : 
    echo "가위입니다.";
    break;
  case 2 : 
    echo "바위입니다.";
    break;
  case 3 : 
    echo "보입니다.";
    break;
  default:
    echo "범위를 벗어났습니다.";
}

// while
$w = 2;
while($w < 10) {
  echo "<h2>$w</h2>";
  $w++;
}

// do-while
// 조건과 상관없이 무조건 한번은 실행한다
$dw = 4;
do {
  echo "<h2>$dw 출력</h2>";
  $dw++;
} while($dw > 10);