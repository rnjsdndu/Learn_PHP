<?php 
// PHP 배열, 정렬내장함수

$fruits = array("사과", "배", "귤", "수박", "토마토");

sort($fruits); // 오름차순 정렬
rsort($fruits); // 내림차순 정렬

print_r($fruits);

$age = array(
  "김길수" => 25,
  "이창원" => 30,
  "홍길동" => 15,
  "박영식" => 35,
);

asort($age); // value에 따라 오름차순으로 정렬
ksort($age); // key에 따라 오름차순으로 정렬

arsort($age); // value에 따라 내림차순으로 정렬
krsort($age); // key에 따라 내림차순으로 정렬

print_r($age);


?>