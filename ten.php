<?php 
// PHP 함수 function에 대해서 알아봅시다

// 내장함수
// 사용자 정의 함수

// 내장함수
$money = 3000;
echo number_format($money); // 3,000

// 사용자 정의 함수
function getString() {
  echo "구문";
}

getString();

function getReturn() {
  echo "구문!!";
  return 3;
}

$a = getReturn();
echo $a;

// 매개변수
function parameterFunction($a, $b) {
  return $a + $b;
}

echo parameterFunction(123,456);

// 지시문
// PHP의 기본 동작인 함시적 형변환 대신 Fatal Error(치명적 오류)를 발생시킨다.
declare(strict_types=1);

function add(int $a, int $b):int {
  return $a + $b;
}

echo add(1, '2');