<?php
// filter_var("필터를 거칠 값", "필터 조건(FILTER_VALIDATE_", "추가 조건")

// 정수 필터: FILTER_VALIDATE_INT
// 실수 필터: FILTER_VALIDATE_FLOAT
// IP 필터: FILTER_VALIDATE_IP
// 이메일 필터: FILTER_VALIDATE_EMAIL
// URL 필터: FILTER_VALIDATE_URL

$i = 0; // 0은 제대로 된 정수가 아닙니다.

$i = 33; // 33은 제대로 된 정수입니다.
$i = '33'; // 33은 제대로 된 정수입니다.
$i = '33.3333'; // 33.3333은 제대로 된 정수가 아닙니다.
$i = '안녕하세요'; // 안녕하세요는 제대로 된 정수가 아닙니다.
$i = TRUE; // 1은 제대로 된 정수입니다.

$j = filter_var($i, FILTER_VALIDATE_INT); // 

if ($j) {
  echo $i . "는 제대로 된 정수입니다.";
} else {
  echo $i . "는 제대로 된 정수가 아닙니다.";
}

// 0인 정수를 필터링 하는 방법
if (filter_var($i, FILTER_VALIDATE_INT) === 0 || !filter_var($i, FILTER_VALIDATE_INT) == false) {
  echo $i . "는 제대로 된 정수입니다.";
}



// 필터의 고급 기능

$int = 133;
$min = 1;
$max = 200;


if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
  echo "범위를 벗어납니다.";
} else {

  echo "범위를 벗어납니다.";
}

// Ipv6 주소 필터
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334"; // IPv6

if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo "잘못된 IPv6 입니다.";
} else {
  echo "정상적인 Ipv6 입니다.";
}

// URL Query String 여부 필터
$URL = "https://naver.com?key=안녕하세요";

if (filter_var($URL, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo "쿼리가 존재하지 않습니다.";
} else {
  echo "쿼리가 존재합니다.";
}

// ASCII 값 127보다 큰 문자 제거
// ASCII 0~127: 알파벳 대소문자, 일반적인 특수기호

$ASCII = '<h1>Hello World㏘!</h1>';

$newstr = filter_var($ASCII, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); // PHP 8.1부터는 다른 문법을 사용해야 한다

echo $newstr; //Hello World!