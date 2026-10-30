<?php 
// 숫자 문자를 구분하는 is_numeric 함수, is_int 함수와 어떤 차이

// str_replace(): 문자열 바꾸기
$str = "나는 자랑스러운 미국인이다.";
$str = str_replace("미국인", "한국인", $str);

echo $str;

// is_int(): 정수인지 판별
$x = 33443;
var_dump(is_int($x)); // bool(true)

// is_float(): 실수인지 판별
$d = 4.433;
var_dump(is_float($d)); // bool(true)

// is_numeric(): 숫자인지 아닌지 판별
$f = 3333.33;
var_dump(is_numeric($f)); // bool(true)
$num = 3333;
var_dump(is_numeric($num)); // bool(true)
$str = "3333";
var_dump(is_numeric($str)); // bool(true)
$str = "3333한글";
var_dump(is_numeric($str)); // bool(false)


// min()
echo min(1,23,5,6,7,-3); // -3

// max()
echo max(1,23,5,6,7,-3); // 23


?>