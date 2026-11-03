<?php 
// 파일의 확장자 구하는 함수 만들기
// D:\xampp\htdocs\2026-11-02

// explode(): 지정된 문자로 문자열을 잘라서 배열을 만드는 함수

$str = "a, b, c, d";

$arr = explode(',', $str);

print_r($arr);
// Array
// (
//     [0] => a
//     [1] =>  b
//     [2] =>  c
//     [3] =>  d
// )

// count(): 배열의 크기를 구하는 함수
echo count($arr); // 4

// end(): 배열의 마지막 값을 구하는 함수
echo end($arr); // d

// 파일의 확장자 구하는 함수 만들기 (나)
function getExtension(string $file) {
  $explodeFile = explode('.', $file);
  return end($explodeFile);
}

echo getExtension("aaa.jpg");


// 파일의 확장자 구하는 함수 만들기 (왕초보 PHP 선생님)
function getFileExt($file_name) {
  $arr = explode('.', $file_name);
  $ext = end($arr);
  return $ext;
}

$file_name = "photo.jpg";
$ext = getFileExt($file_name);

echo $ext;


// count함수를 사용하여 파일의 확장자 구하는 함수 만들기 (나)
function countGetFileExtension(string $file) {
  $arr = explode('.', $file);
  $arrLastNumber = count($arr) - 1;
  return $arr[$arrLastNumber];
}

echo countGetFileExtension("photo.jpg.dddddd.xlsx");

// count함수를 사용하여 파일의 확장자 구하는 함수 만들기 (왕초보 PHP 선생님)

function getFileExt2($file_name) {
  $arr = explode('.', $file_name);
  $arr_size = count($arr); // 3
  $ext = $arr[$arr_size - 1];
  return $ext;
}

echo getFileExt2($file_name);
