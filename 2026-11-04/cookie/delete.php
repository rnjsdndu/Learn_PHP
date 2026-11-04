<?php 
// 쿠키 삭제하기

setcookie("ck_name", "", time() -5, "/"); // 값을 비우고 과거 시간을 살게해주면 삭제된다.
setcookie("ck_age", "", time() -10, "/"); // 값을 비우고 과거 시간을 살게해주면 삭제된다.
?>
쿠키가 삭제되었습니다. <br>
<a href="./cookie.php">쿠키 확인</a>