<?php
// PHP 날짜를 처리하는 방법, Date()함수 알아보기

// 년도
echo date("Y"); // 2026
echo date("y"); // 26

// 월

// Jan ~ Dec
echo date("M"); // Oct

// 01 ~ 12
echo date("m"); // 11

// 1 ~ 12
echo date("n");

// Mon ~ Son
echo date('D'); // Tue

// 날짜
echo date('d'); // 03
echo date('d'); // 3

// 오늘 날짜 표현
echo date("Y-m-d H:i:s"); // 2026-11-03 06:27:39

// 요일
// 1일 ~ 7일 (월화수목금토)
echo date("N");


switch(date("N")) {
  case 1: $yoil = "월요일"; break;
  case 2: $yoil = "화요일"; break;
  case 3: $yoil = "수요일"; break;
  case 4: $yoil = "목요일"; break;
  case 5: $yoil = "금요일"; break;
  case 6: $yoil = "토요일"; break;
  case 7: $yoil = "일요일"; break;
  }
  echo "오늘은 $yoil 입니다.";


?>