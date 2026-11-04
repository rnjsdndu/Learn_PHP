<?php 
// 쿠키 확인하기

$cookie_name = $_COOKIE['ck_name'] ?? null;
$cookie_age = $_COOKIE['ck_age'] ?? null;

if($cookie_name) {
  echo '이름은 : '. $_COOKIE['ck_name']. '입니다.';
} else {
  echo "이름을 모르겠습니다.";
}

if($cookie_age) {
  echo '나이는 : '. $_COOKIE['ck_age']. '입니다.';
} else {
  echo "나이를 모르겠습니다.";
}

?>

<a href="./delete.php">쿠키 지우기</a>
<a href="./make.php">쿠키 만들기</a>