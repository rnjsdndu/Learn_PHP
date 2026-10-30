<?php 
// PHP 논리연사자, 문자열 연산자

$x = true;
$y = true;
$z = false;

// 논리곱 (and, &&)
// true true = true
// true false = false
// false true = false
// false false = false
var_dump($x and $y); // true
var_dump($x && $y); // true
var_dump($x && $z); // false

// 논리합 (or, ||)
// true true = true
// true false = true
// false true = true
// false false = false
var_dump($x or $y); // true
var_dump($x || $y); // true
var_dump($x or $z); // true

// not (!)
var_dump(!$x); // false
var_dump(!$z); // true

// xor (남자 남자 싫어요 남자 여자 좋아요)
// true true = false
// true false = true
// false true = true
// false false = false
var_dump($x xor $y); // false
var_dump($x xor $z); // true


// 문자열 연산자
$a = "안녕";
$a .= "하세요";
echo $a; // 안녕하세요














