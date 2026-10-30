<?php 
// PHP 난수발생, 반올림, 절대값, 루트값, 상수, 파이

// abs(): 절대값 구하기
$a = -33;
echo abs($a); // 33


// sqrt(): 루트 구하기
$b = 4;
echo sqrt($b); // 2

// round(): 반올림
$c = 4.5;
echo round($c); // 5
$d = -4.5;
echo round($d); // -5

// rand(): 난수
echo rand(1, 5); // 1~5까지 무작위 수 반환 

// define(): 상수
define("GREETING", "안녕하세요");
echo GREETING; // 안녕하세요
// GREETING = "안안녕하세요"; // 에러

?>