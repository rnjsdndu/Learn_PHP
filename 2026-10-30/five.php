<?php 
// PHP 비교연산자, 증감 연산자

//약한 비교
var_dump(10 == 10); // bool(true)
var_dump(10 == 11); // bool(false)
var_dump(10 == "10"); // bool(true)

// 강한 비교
var_dump(10 === 10); // bool(true)
var_dump(10 === 11); // bool(false)
var_dump(10 === "10"); // bool(false)

// 같지 않다
var_dump(10 != 10); // bool(false)
var_dump(10 != "10"); // bool(true)
var_dump(10 !== 10); // bool(false)
var_dump(10 !== "10"); // bool(true)
var_dump(10 <> 10); // bool(false)

// 부등호
var_dump(10 > 11); // bool(false)
var_dump(10 >= 10); // bool(true)

// 증감 연산자
$num = 10;

$num++; // 11
$num--; // 10

echo $num; // 10