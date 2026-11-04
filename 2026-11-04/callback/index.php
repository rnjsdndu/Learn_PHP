<?php 
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "pear", "pineapple"];


// array_map("콜백함수", $배열): 콜백함수를 배열의 길이만큼 호출하여 배열 형태로 담아준다
$lengths = array_map("my_callback", $strings);

print_r($lengths); // [5, 6, 4, 9]

function exclaim($str) {
  return $str ."! ";
}

function ask($str) {
  return $str ."? ";
}

function printFormatted($str, $format) {
  echo $format($str);
}

printFormatted("안녕", "exclaim"); // 안녕!
printFormatted("안녕", "ask"); // 안녕?
