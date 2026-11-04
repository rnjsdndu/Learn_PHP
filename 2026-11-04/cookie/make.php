<?php 
// 쿠키 만들기

// setcookie("이름", "값", "유효시간", "경로")
setcookie("ck_name", "여권우", time() + 5, "/"); // 240초 동안 여권우를 담은 ck_name이라는 쿠키가 /경로에 있다
setcookie("ck_age", "17세", time() + 10, "/"); // 240초 동안 17세를 담은 ck_age이라는 쿠키가 /경로에 있다

?>

쿠키가 생성되었습니다. <br>
<a href="./cookie.php">쿠키 확인</a>

